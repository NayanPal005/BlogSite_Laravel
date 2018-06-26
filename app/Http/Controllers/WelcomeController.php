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
        $all_published_blog=DB::table('tbl_blog')
                             ->where('publication_status',1)
                             ->orderBy('blog_id','desc')
                               ->get();


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
                      ->with('all_blog',$all_blog)
                      ->with('all_published_blog',$all_published_blog);
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
        //At First take al data corresponding id

        $data['hit_counter']=$blog_info->hit_counter+1; //adding one value of hit_counter field

        $blog_info=DB::table('tbl_blog')->where('blog_id',$id)->update($data);//updating the only hit_counter field value
        $blog_infoupdate=DB::table('tbl_blog')->where('blog_id',$id)->first();//get all data with update blog_info with corresponding id


        $blog_details=view('pages.blog_details')
                ->with('blog_infoupdate',$blog_infoupdate);

        return view('master')->with('main_content',$blog_details);

    }

    public function categorywise_blog($category_id){

      //  echo "This Category id is:".$category_id;


        $categorywise_blog= DB::table('tbl_category')

//         //$categorywise_blog= DB::table('tbl_blog')
//
                ->join('tbl_blog','tbl_category.category_id','=','tbl_blog.category_id')
//
//                //->join('tbl_category','tbl_blog.category_id','=','tbl_category.category_id')
               //  ->where('tbl_blog.category_id','>',$category_id) eta dile ei sign(>) ti category_id joto tar ek ghor samner category_id er blog dekhabe :)

                 ->where('tbl_blog.category_id',$category_id)
                //must tbl_blog.category_id or tbl_category.category_id ditei hbe in laravel
                 ->select('tbl_category.*','tbl_blog.*')
                 ->get();
        $categorywise_blog_result=view('pages.categorywise_blog')->with('categorywise_blog',$categorywise_blog);

        return view('master')->with('main_content',$categorywise_blog_result);

//     echo '<pre>';
//      print_r($categorywise_blog);
//     exit();

    }
    public function search_blog(Request $request){
       // echo "This is Search";

        $search_blog=$request->search;
        $search_result=DB::table('tbl_blog')
                   ->where('publication_status',1)

                    ->where('blog_title','like','%'.$search_blog.'%')

                   ->orderBy('blog_id','desc')
                   ->get();
        $search_get_result=view('pages.search_blog')->with('search_result',$search_result);

        return view('master')->with('main_content',$search_get_result);

//        echo '<pre>';
//        print_r($search_result);
//        exit();


    }
    public function registration_user(Request $request){

        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=$request->password;
        $data['mobile_number']=$request->mobile_number;
        DB::table('users')->insert($data);


}


    public function portfolio(){
        $portfolio=view('pages.portfolio');

        return view('master')->with('main_content',$portfolio);

    }
    public function registration(){
        $registration=view('pages.registration');

        return view('master')->with('main_content',$registration);

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
