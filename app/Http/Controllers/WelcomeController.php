<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_published_category=DB::table('tbl_category')
          //  ->pluck('category_name');//pluck use kore just category_name column tar data anlam :)
         ->where('category_status',1)//sob date jader status 1

            ->get();

        $all_blog=DB::table('tbl_blog')->get();

       // print_r($all_blog);

       // $category_id=$all_blog->category_id;
      //   echo $category_id;
        ////eta diye home content e blog er niche blog category tulsi
      //  $all_category=DB::table('tbl_category')
           // ->where('category_id',$category_id)
         //   ->first();




        //print_r($all_published_category);

       //exit();

        $home_content=view('pages.home_content')

                      ->with('all_published_category',$all_published_category)
                      ->with('all_blog',$all_blog);
                     // ->with('all_category',$all_category);

        //$all_published_category er data 'all_published_category' hisebe pataisi,,jeta home e variable hiebe kaj korbe

        return view('master')->with('main_content',$home_content);
    }

    ////////////////////////////latest_blog=======================================/////////55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555

//    public function latest_blog(){
//
//        $latest_blog = DB::table('tbl_blog')
//            ->latest()
//            ->get();
////         echo '<pre>';
////        print_r($latest_blog);
////        exit();
//       $latest_content= view('pages.home_content')->with('latest_blog',$latest_blog);
//        return view('master')->with('main_content',$latest_content);
//
//
//    }
    public function blog_details($id){


        $blog_info=DB::table('tbl_blog')
            ->where('blog_id',$id)
            ->first();

        $blog_details=view('pages.blog_details')
                ->with('blog_info',$blog_info);

        return view('master')->with('main_content',$blog_details);

    }


    public function portfolio(){
        $portfolio=view('pages.portfolio');

        return view('master')->with('main_content',$portfolio);

    }
    public function services(){
        $services=view('pages.services');

        return view('master')->with('main_content',$services);

    }
    public function contact(){
        $contact=view('pages.contact');

        return view('master')->with('main_content',$contact);

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
