<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.admin_dashboard');
    }
    public function admin_login(){

        return view('admin.login');

    }
    public function add_blog(){

       $add_blog=view('pages.add_blog');

       return view('admin.admin_dashboard')->with('main_content',$add_blog);
    }
    public function manage_blog(){

        echo "Hello admin !Manage You Blog";
    }
    public function add_category(){

        $add_category=view('pages.add_category');

        return view('admin.admin_dashboard')->with('main_content',$add_category);


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
