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
    public function authChecking(){

        $admin_id=Session::get('admin_id');

        if ($admin_id==NULL){

            return view('admin.login');

          //  return redirect('admin-login');
        }
        else if ($admin_id!=NULL){
            return redirect('admin-dashboard');
        }
        else{
            return view('admin_dashboard');
        }

    }
  public function admin_logout(){

      //  echo "Hi,This is logout";

      Session::put('admin_id','');
      Session::put('admin_name','');

     return redirect('admin-login')->with('session_destroy','you LogOut Successfully');



  }
    public function manage_category(){

      $all_category=DB::table('tbl_category')->get();

     // echo '<pre>';

     // print_r($all_category);


        $add_category=view('pages.manage_category')

                        ->with('all_category',$all_category);

        return view('admin_dashboard')->with('main_content',$add_category);


    }
    public  function unpublish_category($id){

       // echo $id;

        DB::table('tbl_category')
            ->where('category_id', $id)//id er sate id match
            ->update(['category_status' => 0]);//ekane eshe column name

        return redirect('/manage-category');


    }
    public function publish_category($id){

      //  echo $id;
        DB::table('tbl_category')
            ->where('category_id',$id)
            ->update(['category_status'=>1]);

        return redirect('/manage-category');
    }
    public function delete_category($id){

     //   echo $id;

        DB::table('tbl_category')->where('category_id',$id)

            ->update(['category_status'=>3]);

        return redirect('manage-category');
    }
    public function hardDelete_category($id){
        DB::table('tbl_category')->where('category_id',$id)

            ->delete();

        return redirect('manage-category');

    }
    public function edit_category($id){
      $all_data=  DB::table('tbl_category')->where('category_id',$id)
                          ->first();
//      echo '<pre>';
//      print_r($all_data);
//      exit();


        $edit_category=view('admin.edit_category')->with('all_data',$all_data);

        return view('admin_dashboard')->with('main_content',$edit_category);


    }
    public function edited_category(Request $request){

          $id=$request->category_id;

         // echo $id;
        //dd($request->all());
       // $data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;

        DB::table('tbl_category')->where('category_id',$id)

            ->update($data);

        return redirect('manage-category');




    }

    public function show_category(){

        $all_category=DB::table('tbl_category')->get();



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
