@extends('admin_dashboard')
@section('main_content')
    <?php

    use Illuminate\Support\Facades\Session;

    ?>


<h1 style="color: deeppink; text-align: center ">Manage Category</h1>

<table class="table table-bordered">
    <thead>

    <tr>
        <th style="color: #97310e">Category ID</th>
        <th style="color: #97310e">Category Name</th>
        <th style="color: palegreen">Category  Des</th>
        <th style="color: indigo">Publication Status</th>
        <th style="color: mediumseagreen">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($all_category as $all_category):
        ?>
        <tr>

            <td style="color: #0e90d2"><?php echo $all_category->category_id?></td>

                <td style="color: #0e90d2"><?php echo $all_category->category_name ?></td>

            <td style="color: #985f0d"><?php echo $all_category->category_description ?></td>

                <td style="color: slateblue">

                    <?php if ($all_category->category_status==1) {

                        echo 'Publish';
                        }

                        else if($all_category->category_status==0) {

                         echo "Not Publish";

                        }
                        else if($all_category->category_status==3){

                        echo "Deleted";

                        }


                        ?>
                </td>
            <td>
                <?php if ($all_category->category_status==1 || $all_category->category_status==3 ) { ?>

                    <a class="btn btn-danger" href="{{\Illuminate\Support\Facades\URL::to('unpublish-category/'.$all_category->category_id)}}" title="Unpublishd">
                        <!-- url e id pass er somoi /(slash) ta always kintu shes e dite hbe jate url e slash dekha jai -->
                        <i class="fa fa-thumbs-down" style="font-size:24px"></i></a>

                    <?php } ?>

                    <?php if ($all_category->category_status==0 || $all_category->category_status==3) { ?>

                <a class="btn btn-success" href="{{\Illuminate\Support\Facades\URL::to('publish-category/'.$all_category->category_id)}}" title="Publish"> <i class="fa fa-thumbs-up" style="font-size:24px"></i></a>

                    <?php } ?>

                    <?php


                        $access_label=Session::get('access_label');

                       // echo $access_label;

                        if ($access_label==1){
                            ?>

                    <?php if ($all_category->category_status==0 || $all_category->category_status==1 || $all_category->category_status!=3  ) { ?>
                    <a class="btn btn-danger"  href="{{\Illuminate\Support\Facades\URL::to('delete-category/'.$all_category->category_id)}}" title="Delete">

                        <i class="halflings-icon white trash"></i>

                    </a>
                    <?php } ?>

                    <?php if ($all_category->category_status==0 || $all_category->category_status==1 ) { ?>
                    <a class="btn btn-success" title="Update" href=""> <!-- This is  update -->
                        <i class="halflings-icon icon-edit"></i></a>
                    <?php } ?>

                <?php   } ?>







            </td>

            <?php  ?>

        </tr>

  <?php endforeach; ?>

    </tbody>

</table>

@endsection
