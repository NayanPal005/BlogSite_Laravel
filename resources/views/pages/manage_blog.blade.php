@extends('admin_dashboard')
@section('main_content')
<!--    --><?php
//    echo '<pre>';
//        print_r($all_blog);
//       exit();
       ?>
    <?php

    use Illuminate\Support\Facades\Session;

    ?>


    <h1 style="color: deeppink; text-align: center ">Manage Blog</h1>

    <table class="table table-bordered">
        <thead>

        <tr>
            <th style="color: #97310e">Blog ID</th>
            <th style="color: #97310e">Blog Title</th>
            <th style="color: darkviolet">Author Name</th>
            <th style="color: palegreen">Blog Short  Des</th>
            <th style="color: palegreen">Blog Long  Des</th>
            <th style="color: palegreen">Blog Image</th>
            <th style="color: indigo">Publication Status</th>
            <th style="color: mediumseagreen">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php

       foreach ($all_blog as $all_blog):
        ?>
        <tr>

            <td style="color: #0e90d2"><?php echo $all_blog->blog_id ?></td>

            <td style="color: #0e90d2"><?php echo $all_blog->blog_title  ?></td>


            <td style="color: #985f0d"><?php echo $all_blog->author_name   ?></td>

            <td style="color: #985f0d"><?php echo $all_blog->blog_short_description   ?></td>

            <td style="color: green;"><?php echo $all_blog->blog_long_description   ?> </td>

            <td><img src="{{\Illuminate\Support\Facades\URL::asset($all_blog->blog_image)}}">  </td>

            <td style="color: slateblue">

                <?php

                    if ($all_blog->publication_status==1){
                        echo "Published";
                    }
                    else if ($all_blog->publication_status==0){
                        echo "Not Published";
                    }
                    else if ($all_blog->publication_status==2){
                        echo "Deleted";
                    }

                    ?>
            </td>

            <td>
               <?php   if ($all_blog->publication_status==1 ||$all_blog->publication_status==2 ){ ?>

                <a class="btn btn-danger" href="{{ \Illuminate\Support\Facades\URL::to('unpublish-blog/'.$all_blog->blog_id)}}" title="Unpublishd">
                    <!-- url e id pass er somoi /(slash) ta always kintu shes e dite hbe jate url e slash dekha jai -->
                    <i class="fa fa-thumbs-down" style="font-size:24px"></i></a>

                   <?php  } ?>


                   <?php   if ($all_blog->publication_status==0 ||$all_blog->publication_status==2 ){ ?>

                <a class="btn btn-success" href="{{ \Illuminate\Support\Facades\URL::to('publish-blog/'.$all_blog->blog_id)}}" title="Publish">
                    <i class="fa fa-thumbs-up" style="font-size:24px"></i></a>

                   <?php } ?>

                   <?php   if ($all_blog->publication_status==0 ||$all_blog->publication_status==1 ){ ?>

                <a class="btn btn-danger"  href="{{ \Illuminate\Support\Facades\URL::to('delete-blog/'.$all_blog->blog_id)}} ?>" title="Delete">

                    <i class="halflings-icon white trash"></i>

                </a>

                   <?php } ?>

                   <?php   if ($all_blog->publication_status==0 ||$all_blog->publication_status==1 ){ ?>


                <a class="btn btn-danger"  href="{{ \Illuminate\Support\Facades\URL::to('harddelete-blog/'.$all_blog->blog_id)}}" onclick="return checkDelete()" title="PermanentDelete">

                    <i class="fa fa-remove" style="font-size:24px"></i>

                </a>


                <a class="btn btn-success" title="Update" href="{{ \Illuminate\Support\Facades\URL::to('edit-blog/'.$all_blog->blog_id)}}"> <!-- This is  update -->
                    <i class="halflings-icon icon-edit"></i></a>

                <?php } ?>








            </td>


            <?php  ?>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

@endsection
