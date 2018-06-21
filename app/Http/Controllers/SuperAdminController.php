<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\Constraint\IsFalse;

Session::start();//ei ta dite hoi logout er por jate bach dile dashboard e na duke

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {


    }

    public function index()
    {

        return $this->authChecking();


        // return view('admin_dashboard');
    }

    public function authChecking()
    {

        $admin_id = Session::get('admin_id');

        if ($admin_id == NULL) {

            return view('admin.login');

            //  return redirect('admin-login');
        } else if ($admin_id != NULL) {
            return redirect('admin-dashboard');
        } else {
            return view('admin_dashboard');
        }

    }

    public function admin_logout()
    {

        //  echo "Hi,This is logout";

        Session::put('admin_id', '');
        Session::put('admin_name', '');

        return redirect('admin-login')->with('session_destroy', 'you LogOut Successfully');


    }
    public function manage_blog(){

        $all_blog = DB::table('tbl_blog')->get();

        $add_blog = view('pages.manage_blog')

              ->with('all_blog', $all_blog);

        return view('admin_dashboard')->with('main_content', $add_blog);


    }

    public function delete_blog($id){

       // echo $id;
        DB::table('tbl_blog')->where('blog_id',$id)

            ->update(['publication_status'=>2]);

        return redirect('manage-blog');
    }
    public function unpublish_blog($id){

        DB::table('tbl_blog')
            ->where('blog_id', $id)//id er sate id match
            ->update(['publication_status' => 0]);//ekane eshe column name

        return redirect('/manage-blog');
    }

    public function publish_blog($id){

        DB::table('tbl_blog')
            ->where('blog_id', $id)//id er sate id match
            ->update(['publication_status' => 1]);//ekane eshe column name

        return redirect('/manage-blog');
    }
    public function getpublish_blog(){

       $getpublishBlog= DB::table('tbl_blog')
            ->select('*')
            ->where('publication_status',1)
            ->get();


        $published_blog = view('admin.pages.home_content')
            ->with('getpublishBlog', $getpublishBlog);


        return view('admin_dashboard')->with('main_content', $published_blog);



        // return $getpublishBlog;
    }

    public function harddelete_blog($id){

        DB::table('tbl_blog')->where('blog_id', $id)

            ->delete();

        return redirect('manage-blog');

    }

    public function edit_blog($id){


        $all_data = DB::table('tbl_blog')->where('blog_id', $id)
            ->first();


        $all_category = DB::table('tbl_category')->get();


        $edit_blog = view('admin.edit_blog')
            ->with('all_data', $all_data)
            -> with('all_category', $all_category);

        return view('admin_dashboard')->with('main_content', $edit_blog);



    }
    public function update_blog(Request $request){
        $blog_id = $request->blog_id;

        $data=array();
        $data['blog_title'] = $request->blog_title;
        $data['author_name'] = $request->author_name;
        $data['blog_short_description'] = $request->blog_short_description;
        $data['blog_long_description'] = $request->blog_long_description;
        $data['blog_image'] = $request->blog_image;

        if ($_FILES['blog_image']['name']=='' || $_FILES['blog_image']['size']==0){

            $data['blog_image']=$request->blogOld_image;

            DB::table('tbl_blog')
                ->where('blog_id',$blog_id)
                ->update($data);


            unlink($request->blogOld_image);

            return redirect('manage-blog')->with('status', 'Blog Updated Successfully!');
            // $this->products_model->edited_products_model($details);

        }

        else{
            $files=$request->file('blog_image');//image ta
            $fileName=$files->getClientOriginalName();//extension of the file or image
            $picture=date('His').$fileName;//image + extension

            $image_url='public/adminImages/'.$picture;//folder e nilam

            $destinationPath=base_path().'/public/adminImages';//folder soho path bole dilam

            $success=$files->move($destinationPath,$picture);//move kore dilam destination e

                if ($success) {
                    $data['blog_image']=$image_url;

                    DB::table('tbl_blog')
                        ->where('blog_id',$blog_id)
                        ->update($data);
                    unlink($request->blogOld_image);

                    return redirect('manage-blog')->with('status', 'Blog Updated Successfully!');
                }
                else{

                    $error=  $files->getErrorMessage();

                }

        }
        return redirect('manage-blog');


    }
    public function blog_details($id){

        echo $id;

    }




    public function manage_category()
    {

        $all_category = DB::table('tbl_category')->get();

        // echo '<pre>';

        // print_r($all_category);


        $add_category = view('pages.manage_category')
            ->with('all_category', $all_category);

        return view('admin_dashboard')->with('main_content', $add_category);


    }

    public function unpublish_category($id)
    {

        // echo $id;

        DB::table('tbl_category')
            ->where('category_id', $id)//id er sate id match
            ->update(['category_status' => 0]);//ekane eshe column name

        return redirect('/manage-category');


    }

    public function publish_category($id)
    {

        //  echo $id;
        DB::table('tbl_category')
            ->where('category_id', $id)
            ->update(['category_status' => 1]);

        return redirect('/manage-category');
    }

    public function delete_category($id)
    {

        //   echo $id;

        DB::table('tbl_category')->where('category_id', $id)
            ->update(['category_status' => 3]);

        return redirect('manage-category');
    }

    public function hardDelete_category($id)
    {
        DB::table('tbl_category')->where('category_id', $id)
            ->delete();

        return redirect('manage-category');

    }

    public function edit_category($id)
    {
        $all_data = DB::table('tbl_category')->where('category_id', $id)
            ->first();
//      echo '<pre>';
//      print_r($all_data);
//      exit();


        $edit_category = view('admin.edit_category')->with('all_data', $all_data);

        return view('admin_dashboard')->with('main_content', $edit_category);


    }

    public function edited_category(Request $request)
    {

        $id = $request->category_id;

        // echo $id;
        //dd($request->all());
        // $data=array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;

        DB::table('tbl_category')->where('category_id', $id)
            ->update($data);

        return redirect('manage-category');


    }

    public function show_category()
    {

        $all_category = DB::table('tbl_category')->get();


    }


}
