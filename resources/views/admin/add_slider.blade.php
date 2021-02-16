@extends('admin_layout')
@section('content')

     <div id="content" class="span10">
      <ul class="breadcrumb">
        <li>
          <i class="icon-home"></i>
          <a href="index.html">Home</a>
          <i class="icon-angle-right"></i> 
        </li>
        <li>
          <i class="icon-edit"></i>
          <a href="#">Add slider</a>
        </li>
      </ul>
      
      <div class="row-fluid sortable">
        <div class="box span12">
          <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add slider</h2>
            <div class="box-icon">
              <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
              <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
              <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
          </div>
          <div class="box-content">
            <form class="form-horizontal" action="{{url('/save-slider')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <fieldset>
              <p class="alert-success">
                <?php
                $message = Session::get('message');
                if($message){
                  echo "slider add success";
                  Session::put('message', NULL);
                }

                ?>
 
              </p>
              
                
              
                <div class="control-group">
                <label class="control-label" for="fileInput">image</label>
                <div class="controls">
                  <input type="file" id="fileInput" name="slider_image">
                </div>
                </div>

              <div class="control-group hidden-phone">
                <label class="control-label" for="textarea2">Publication Status</label>
                <div class="controls">

                  <input type="checkbox" name="publication_status"  value="1" required="">

                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-primary">Add slider </button>
                <button type="reset" class="btn">Cancel</button>
              </div>

              </fieldset>
            </form>   

          </div>
        </div><!--/span-->

      </div><!--/row-->
                


@endsection
