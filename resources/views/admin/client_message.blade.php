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
    	<td>Client Id</td>
    	<td>Client Name</td>
    	<td>Client Subject </td>
    	<td>Client Email</td>
    	<td>Client Phone Number</td>
    	<td>Client Message</td>
    	<td>Action</td>
    </tr>
    <?php $all_client_message = DB::table('tbl_contactus')
    	->get();
    	foreach($all_client_message as $v_message){
     ?>
    <tr>
    	<td> {{$v_message->client_id}} </td>
    	<td>{{$v_message->client_name}}</td>
    	<td><textarea>{{$v_message->client_subject}}</textarea></td>
    	<td>{{$v_message->client_email}}</td>
    	<td>{{$v_message->client_phone}}</td>
    	<td><textarea>{{$v_message->client_message}}</textarea></td>
    	<td><a class="btn btn-danger" href="{{URL::to('/delete_message/'. $v_message->client_id)}}">
                                        Delete
                                    </a></td>
    </tr>
    <?php } ?>
  </table>
</div>

</div>

@endsection