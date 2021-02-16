@extends('admin_layout')
@section('content')
<div id="content" class="span10" style="padding: 20px">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">edit product</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>edit product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/update-product',$product_info->product_id)}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
						  <fieldset>
							<p class="alert-success">
								<?php
								$message = Session::get('message');
								if($message){
									echo "product add success";
									Session::put('message', NULL);
								}

								?>
 
							</p>
							<div class="control-group">
							  <label class="control-label" for="date01">product Name</label>
							  <div class="controls">
								<input type="text" class="" name="product_name" value="{{$product_info->product_name}}">
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError1">Categories Name</label>
								<div class="controls">
								  <select id="selectError1" name="manufacture_id" multiple data-rel="chosen">
									<option>seletect Categories</option>
													<?php 
                     $all_published_categories = DB::table('tbl_categories')
                                ->where('publication_status', 1)
                                ->get();
                     foreach ($all_published_categories as $v_categories ) {
                                    # code...
                                           

                                
                                ?>
								<option value="{{$v_categories->categories_id}}">{{$v_categories->categories_name}}</option>
									
								<?php } ?>
								  </select>
								</div>
							  </div>

								
							  <div class="control-group">
								<label class="control-label" for="selectError1">manufacture Name</label>
								<div class="controls">
								  <select id="selectError1" name="manufacture_id" multiple data-rel="chosen">
									<option>seletect manufacture</option>
													<?php 
                     $all_published_manufacture = DB::table('tbl_manufactures')
                                ->where('publication_status', 1)
                                ->get();
                     foreach ($all_published_manufacture as $v_manufacture ) {
                                    # code...
                                           

                                ?>
                                ?>
								<option value="{{$v_manufacture->manufacture_id}}">{{$v_manufacture->manufacture_name}}</option>
									
								<?php } ?>
								  </select>
								</div>
							  </div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">product Short Description</label>
							  <div class="controls">
							  	<?php 
							  	$all_published_product = DB::table('tbl_products')
							  		->where('publication_status', 1)
							  		->get();
							  		foreach ($all_published_product as  $v_product) {
							  			# code...
							  		
							  	?>
								<textarea class="cleditor" name="product_short_description" required="" rows="3" value = "{{$product_info->product_short_description}}">{{$v_product->product_short_description}}</textarea>
							  </div>
							</div>          
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">product Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_long_description" required="" rows="3">{{$v_product->product_long_description}}</textarea>
							  </div>
							</div>
								<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">product price</label>
							  <div class="controls">

							  	<input type="text" name="product_price"  value="{{$v_product->product_price}}" required="">

							  </div>
							</div>
								<div class="control-group">
								<label class="control-label" for="fileInput">image</label>
								<img src="{{URL::to($v_product->product_image)}} " style="height: 80px; width: 80px;">
								<div class="controls">
								  <input type="file" id="fileInput" name="product_image">
								</div>
							  </div>

								<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">product size</label>
							  <div class="controls">

							  	<input type="text" name="product_size"  value="{{$v_product->product_size}}">

							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">product colour</label>
							  <div class="controls">

							  	<input type="text" name="product_colour"  value="{{$v_product->product_colour}}">

							  </div>
							</div>
							<?php }?>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">

							  	<input type="checkbox" name="publication_status"  value="1">

							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add product </button>
							  <button type="reset" class="btn">Cancel</button>
							</div>

						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


@endsection
