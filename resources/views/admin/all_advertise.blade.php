@extends('admin_layout')
@section('content')


			<div id="content" class="span10">

			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>








					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
						  	<p class="alert-success">
								<?php
								$message = Session::get('message');
								if($message){
									echo "categories Unactive success";
									Session::put('message', NULL);
								}

								?>
							</p>
							  <tr>
								  <th>Advertise ID</th>
								  <th>Advertise Name</th>
								  <th>Advertise image</th>
								  <th>Short Description/th>
								  <th>Long Description</th>
								  <th>categories Name</th>
								  <th>manufacture Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						   
						  <tbody>
							<tr border="1px">@foreach($all_advertise_info as $v_advertise)
							<td>{{$v_advertise->advertise_id}}</td>
							<td>{{$v_advertise->advertise_name}}</td>
							<td><img src="{{URL::to($v_advertise->advirtise_image)}}" width="80px" height="80px" ></td>
							<td>{{$v_advertise->advirtise_short_description}}</td>
							<td>{{$v_advertise->advirtise_long_description}}</td>
							<td>{{$v_advertise->categories_name}}</td>
							<td>{{$v_advertise->manufacture_name}}</td>
							<td class="center">
									@if($v_advertise->publication_status == 1)
									<span class="label label-success"> Active</span>
									@else
									<span class="label label-danger">Decative</span>
									@endif
								</td>
								
									<td class="center">
									@if($v_advertise->publication_status==1)
									<a class="btn btn-success" href="{{URL::to('/unactive_advertise/'.$v_advertise->advertise_id)}}">
										<i class="halflings-icon white thumbs-down">Deactive</i>  
									</a>
									@else
									<a class="btn btn-danger" href="{{URL::to('/active_advertise/'.$v_advertise->advertise_id)}}">
										<i class="halflings-icon white thumbs-up">Active</i>  
									</a>
									@endif
								</td>
							@endforeach	
							</tr>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


@endsection