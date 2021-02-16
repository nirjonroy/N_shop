@extends('admin_layout')
@section('content')

<div id="content" class="span10" style="padding: 20px;">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Update categories</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update categories</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/update-categories',$categories_info->categories_id)}}" method="post">
							{{csrf_field()}}
						  <fieldset>
							<p class="alert-success">
								<?php
								$message = Session::get('message');
								if($message){
									echo "categories add success";
									Session::put('message', NULL);
								}

								?>

							</p>
							<div class="control-group">
							  <label class="control-label" for="date01">categories Name</label>
							  <div class="controls">
								<input type="text" class="" name="categories_name" value="{{$categories_info->categories_name}}"  >
							  </div>
							</div>

							          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">categories Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="categories_description" rows="3">
									
									{{$categories_info->categories_description}}
								</textarea>
							  </div>
							</div>

						

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">save categories </button>
							  							</div>

						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection
