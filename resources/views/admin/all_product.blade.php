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
								  <th>product ID</th>
								  <th>product Name</th>
								  <th>product image</th>
								  <th>product price</th>
								  <th>categories Name</th>
								  <th>manufacture Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  @foreach($all_product_info as $v_product)  
						  <tbody>
							<tr>
								<td class="center">{{$v_product->product_id}}</td>
								<td class="center">{{$v_product->product_name}}</td>

								<td><img src="{{URL::to($v_product->product_image)}} " style="height: 80px; width: 80px;"></td>
								
								<td class="center">
									{{$v_product->product_price}}</td>
								<td class="center">{{$v_product->categories_name}}</td>
								<td class="center">{{$v_product->manufacture_name}}</td>
								<td class="center">
									@if($v_product->publication_status == 1)
									<span class="label label-success"> Active</span>
									@else
									<span class="label label-danger">Decative</span>
									@endif
								</td>
								<td class="center">
									@if($v_product->publication_status==1)
									<a class="btn btn-success" href="{{URL::to('/unactive_product/'.$v_product->product_id)}}">
										<i class="halflings-icon white thumbs-down">Deactive</i>  
									</a>
									@else
									<a class="btn btn-danger" href="{{URL::to('/active_product/'.$v_product->product_id)}}">
										<i class="halflings-icon white thumbs-up">Active</i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit-product/'.$v_product->product_id)}}">
										<i class="halflings-icon white edit">Edit</i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-product/'.$v_product->product_id)}}" id="delete">
										<i class="halflings-icon white trash">Delete</i> 
									</a>
								</td>
							</tr>
							@endforeach
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


@endsection