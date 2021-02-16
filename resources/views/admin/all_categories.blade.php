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
    	<td>Categories Id</td>
    	<td>Categories Name</td>
    	<td>Categories Description </td>
    	<td>Publication Status </td>
    	<td>Action </td>
    </tr>
    @foreach($all_categories_info as $v_categories)
    <tr>
    	<td>{{$v_categories->categories_id}} </td>
    	<td>{{$v_categories->categories_name}} </td>
    	<td> {{$v_categories->categories_description}} </td>
    	<td> 
    		@if($v_categories->publication_status == 1)
    		<span class="label label-success">Active</span>
    		@else
    		<span class="label label-danger"> Deactive</span>
    		@endif
    	 </td>
    	<td>
    		@if($v_categories->publication_status==1)
                                    <a class="btn btn-success" href="{{URL::to('/unactive_categories/'.$v_categories->categories_id)}}">
                                        <i class="halflings-icon white thumbs-down">Deactive</i>  
                                    </a>
                                    @else
                                    <a class="btn btn-danger" href="{{URL::to('/active_categories/'.$v_categories->categories_id)}}">
                                        <i class="halflings-icon white thumbs-up">Active</i>  
                                    </a>
                                    @endif
                                    <a class="btn btn-danger" href="{{URL::to('/delete_categories/'. $v_categories->categories_id)}}">
                                        Delete
                                    </a>
                                    <a class="btn btn-warning" href="{{URL::to('/edit_categories/'. $v_categories->categories_id)}}">
                                        Edit
                                    </a>
    	</td>

    </tr>
    @endforeach
  </table>
</div>

</div>

@endsection