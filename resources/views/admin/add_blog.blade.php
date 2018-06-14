@extends('admin_dashboard')
@section('main_content')

    <?php
//    echo '<pre>';
//    print_r($all_category);
//    exit();

    ?>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="box-content">

        {!! Form::open(['url' => 'save-blog','method'=>'post', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}

        @csrf

        <div class="container">
                <h1 style="text-align: center">Add Blog </h1>
                <hr>
                <label for="name"><b>Blog Title</b></label>
                <input type="text" placeholder="Enter Blog Title" name="blog_title"  required>

            <label  for="selectError3"><b>Blog Category</b></label>

            <select name="category_id" id="selectError3">

                <?php foreach ($all_category as $all_category): ?>
                <option value="<?php echo $all_category->category_id ?>"><?php echo $all_category->category_name?></option>

                <?php endforeach; ?>

            </select>


            <label for="name"><b>Author Name</b></label>
                <input type="text" placeholder="Enter Blog Author Name" name="author_name"  required>

                <label for="description"><b>Blog Short Description</b></label>
               <input type="text" placeholder="Enter Blog Short Description "  name="blog_short_description" required>

                <label for="description"><b>Blog Long Description</b></label>
                <input type="text" placeholder="Enter Blog Long Description "  name="blog_long_description" >


            <label  for="selectError3"><b>Publication Status</b></label>

                        <select name="publication_status" id="selectError3">
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>

                        </select>



                <label for="description"><b>Blog Image</b></label>
                <input type="file" placeholder="Choose Image  "  name="blog_image" >

                <label for="description"><b>Top Blog</b></label>
                <input type="checkbox"  name="top_product" >

                <div class="clearfix">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-dark">ADD</button>
                </div>
            </div>

        {!! Form::close() !!}

    </div>


    @endsection