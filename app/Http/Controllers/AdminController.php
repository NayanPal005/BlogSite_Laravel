<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Carbon\Carbon;

Session::start();
class AdminController extends Controller
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

      // return view('admin_dashboard');
    }



    public function admin_login(){

         $this->authChecking();



      return  view('admin.login');

    }
    public function authChecking(){

        $admin_id=Session::get('admin_id');

        if ($admin_id!=NULL){

            return redirect('admin-dashboard');
        }


    }


    public  function admin_login_check(Request $request){

       $admin_email=$request->admin_email;

       $admin_password=md5($request->admin_password);



        $result= DB::table('admin_login')

            ->select('*')

            ->where('admin_email',$admin_email)

            ->where('admin_password',$admin_password)

            ->first();//CodeIgniter er row() ta eklane first()


        if ($result){

            Session::put('admin_id',$result->admin_id);
            Session::put('admin_name','$result->admin_name');
            Session::put('access_label',$result->access_label);

           // echo $admin_id;

           return view('admin_dashboard');




        }
        else{
         // Session::put('exeption','Your User ID or password Invalid');

            return redirect('admin-login')

              ->with('status','Your Email or Password is not correct!Please try again');

        }



    }


    public function add_blog(){

        //category table er data niye blog add er somoi blog category te use korbo
        $all_category=DB::table('tbl_category')->get();
        //echo '<pre>';
       // print_r($all_category);



       $add_blog=view('admin.add_blog')->with('all_category',$all_category);

       return view('admin_dashboard')->with('main_content',$add_blog);
    }
    public function save_blog(Request $request){

        $data=array();
       // dd($request->all());
        //echo '<pre>';
      //  print_r($_FILES);
       // exit();
       // exit();
        $data['blog_title']=$request->blog_title;
        $data['category_id']=$request->category_id;
        $data['author_name']=$request->author_name;
        $data['blog_short_description']=$request->blog_short_description;
        $data['blog_long_description']=$request->blog_long_description;
        $data['publication_status']=$request->publication_status;
        $data['created_at']=Carbon::now();

        /* ===================image upload=========*/
        $files=$request->file('blog_image');
        $fileName=$files->getClientOriginalName();
        $picture=date('His').$fileName;

        $image_url='public/adminImages/'.$picture;

        $destinationPath=base_path().'/public/adminImages';

        $success=$files->move($destinationPath,$picture);

        if ($success) {
            $data['blog_image']=$image_url;


            DB::table('tbl_blog')->insert($data);

            return redirect('add-blog')->with('status', 'Blog Inserted Successfully!');
        }
        else{

          $error=  $files->getErrorMessage();




        }

    }




    public function add_category(){

        $add_category=view('admin.add_category');

        return view('admin_dashboard')->with('main_content',$add_category);


    }
    public function save_category(Request $request){



         $data=array();
         $data['category_name']=$request->category_name;
         $data['category_slug']=str_slug($request->category_name);
         $data['category_description']=$request->category_description;
         $data['category_status']=$request->category_status;
         $data['category_status']=$request->category_status;
         $data['created_at']=Carbon::now();
         //$data['created_at']=Carbon::now();
 /*
         echo '<pre>';
         print_r($data);
         exit();
 */
        DB::table('tbl_category')->insert($data);
        return redirect('add-category')->with('status', 'Category Inserted!');


     //  dd($request->all())



    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
