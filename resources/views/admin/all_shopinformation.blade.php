@extends('admin_layout')
@section('content')
<div style="padding: 20px">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><p class="alert-success">
								<?php
								$message = Session::get('message');
								if($message){
									echo "categories Unactive success";
									Session::put('message', NULL);
								}

								?>
							</p></div>

  
  <table class="table">
    <tr>
    	<td>Shop Id</td>
    	<td>Shop Name</td>
    	<td>Shop Location </td>
    	<td>Shop Hotline </td>
    	<td>Shop Email</td>
    	<td>Shop Description </td>
    	<td>Shop Logo </td>
    	<td>Publication Status</td>
    	<td>Action </td>
    </tr>
    <?php 
    $all_shop_info = DB::table('tbl_shopinformation')->get();
     ?>
    @foreach($all_shop_info as $v_shopinfo)
    <tr>
    	<td>{{$v_shopinfo->shop_id}} </td>
    	<td> {{$v_shopinfo->shop_name}} </td>
    	<td> {{$v_shopinfo->shop_location}} </td>
    	<td> {{$v_shopinfo->shop_hotline}}</td>
    	<td> {{$v_shopinfo->shop_email}}</td>
    	<td> {{$v_shopinfo->shop_description}}</td>
    	<td> <img src="{{URL::to($v_shopinfo->shop_logo)}}" style= "width: 100px; height: 100px"></td> 
    		<td>
    			@if($v_shopinfo->publication_status == 1)
    		<span class="label label-success">Active</span>
    			@else
    		<span class="label label-danger"> Deactive</span>
    		@endif
    	 </td>
    	<td>
    				@if($v_shopinfo->publication_status == 1)

                                    <a class="btn btn-success" href="{{url::to('unactive_shop/' . $v_shopinfo->shop_id)}}">
                                        <i class="halflings-icon white thumbs-down">Deactive</i>  
                                    </a>
                    @else                
                                    <a class="btn btn-danger" href="{{url::to('active_shop/' . $v_shopinfo->shop_id)}}">
                                        <i class="halflings-icon white thumbs-up">Active</i>  
                                   </a>
                    @endif                
                                    <a class="btn btn-danger" href="{{url::to('delete_shop/' . $v_shopinfo->shop_id)}}">
                                        Delete
                                    </a>
                                    <a class="btn btn-warning" href="">
                                        Edit
                                    </a>
    	</td>

    </tr>
    @endforeach
  </table>
</div>

</div>

@endsection