@extends('admin_dashboard')
@section('main_content')

<?php
echo "<pre>";
//print_r($all_category);
//exit();
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
                <td style="color: slateblue"><?php echo $all_category->category_status   ?></td>



        </tr>

  <?php endforeach; ?>

    </tbody>

</table>

@endsection
