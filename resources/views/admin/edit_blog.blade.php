
@extends('admin_dashboard')
@section('main_content')
    <?php
    //echo '<pre>';
    //print_r($all_data);


    ?>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="box-content">


        {!! Form::open(['url' => 'update-blog','method'=>'post','class'=>'form-horizontal']) !!}

        @csrf


        <fieldset>
            <h1 style="text-align: center">Edit Blog </h1>
            <hr style="color: dodgerblue;">

            <input type="hidden" id="custId" name="blog_id" value="<?php echo $all_data->blog_id?>">
            <div class="control-group">
                <label class="control-label" for="typeahead">Blog Title</label>
                <div class="controls">

                    <input type="text" class="span6 typeahead" id="typeahead" name="blog_title" value="<?php echo $all_data->blog_title?>"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                </div>
            </div>
            <input type="hidden" id="custId" name="author_name" value="<?php echo $all_data->author_name?>">
            <div class="control-group">
                <label class="control-label" for="typeahead">Author Name</label>
                <div class="controls">

                    <input type="text" class="span6 typeahead" id="typeahead" name="blog_title" value="<?php echo $all_data->author_name?>"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Blog Short Description </label>
                <div class="controls">
                    <textarea type="text"  class="span6 typeahead" id="typeahead"   name="blog_short_description"   data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                  <?php echo $all_data->blog_short_description?> </textarea>


                </div>
            </div>

    <div class="control-group">
        <label class="control-label" for="typeahead">Blog Long Description </label>
        <div class="controls">
                    <textarea type="text"  class="span6 typeahead" id="typeahead"   name="blog_long_description"   data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                  <?php echo $all_data->blog_long_description?> </textarea>


        </div>
    </div>
            <label for="description"><b>Blog Image</b></label>
            <input type="file" placeholder="Choose Image  "  name="blog_image" >

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
        <!-- </form> -->
        {!! Form::close() !!}

    </div>

@endsection