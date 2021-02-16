@extends('admin_layout')
@section('content')
<div style="padding: 20px">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><p class="alert-success">
								<?php
								$message = Session::get('message');
								if($message){
									echo "Manufacture Unactive success";
									Session::put('message', NULL);
								}

								?>
							</p></div>

  
  <table class="table">
    <tr>
    	<td>Manufacture Id</td>
    	<td>Manufacture Name</td>
    	<td>Manufacture Description </td>
    	<td>Manufactrue Status </td>
    	<td>Action </td>
    </tr>
    @foreach($all_manufacture_info as $v_manufacture)
    <tr>
    	<td>{{$v_manufacture->manufacture_id}} </td>
    	<td>{{$v_manufacture->manufacture_name}} </td>
    	<td> {{$v_manufacture->manufacture_description}} </td>
    	<td> 
    		@if($v_manufacture->publication_status == 1)
    		<span class="label label-success">Active</span>
    		@else
    		<span class="label label-danger"> Deactive</span>
    		@endif
    	 </td>
    	<td>
    		@if($v_manufacture->publication_status==1)
                                    <a class="btn btn-success" href="{{URL::to('/unactive_manufacture/'.$v_manufacture->manufacture_id)}}">
                                        <i class="halflings-icon white thumbs-down">Deactive</i>  
                                    </a>
                                    @else
                                    <a class="btn btn-danger" href="{{URL::to('/active_manufacture/'.$v_manufacture->manufacture_id)}}">
                                        <i class="halflings-icon white thumbs-up">Active</i>  
                                    </a>
                                    @endif
                                    <a class="btn btn-danger" href="{{URL::to('/delete_manufacture/'. $v_manufacture->manufacture_id)}}">
                                        Delete
                                    </a>
                                    <a class="btn btn-warning" href="{{URL::to('/edit_manufacture/'. $v_manufacture->manufacture_id)}}">
                                        Edit
                                    </a>
    	</td>

    </tr>
    @endforeach
  </table>
</div>

</div>

@endsection