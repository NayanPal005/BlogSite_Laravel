
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

 <!--   <form class="form-horizontal" method="post" action="{{url('save-category')}}"> -->
     {!! Form::open(['url' => 'edited-category','method'=>'post','class'=>'form-horizontal']) !!}

        @csrf


        <fieldset>
            <h1 style="text-align: center">Edit Category </h1>
            <hr style="color: dodgerblue;">

            <input type="hidden" id="custId" name="category_id" value="<?php echo $all_data->category_id?>">
            <div class="control-group">
                <label class="control-label" for="typeahead">Category Name</label>
                <div class="controls">

                    <input type="text" class="span6 typeahead" id="typeahead" name="category_name" value="<?php echo $all_data->category_name?>"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Category Description </label>
                <div class="controls">
                    <textarea type="text"  class="span6 typeahead" id="typeahead"   name="category_description"   data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                  <?php echo $all_data->category_description?> </textarea>


                </div>
            </div>
            <!--
            <div class="control-group">
                <label class="control-label" for="selectError3">Choose Status</label>
                <div class="controls">
                    <select id="selectError3" name="category_status">
                        <option value="1">Publish</option>
                        <option value="0">Unpublish</option>

                    </select>
                </div>
            </div>
            -->
            <!--

            <div class="control-group">
                <label class="control-label">Active</label>
                <div class="controls">
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox1" value="active"> Active
                    </label>

                </div>
            </div>
-->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
   <!-- </form> -->
     {!! Form::close() !!}

</div>

    @endsection