@extends('admin_layout')
@section('content')

<div style="border-color: red; padding: 20px">
<table border="1px">
	<th>
	<tr>
		<td>Slider_id</td>
		<td>Slider_Image</td>
		<td>Slider_publication_status</td>
		<td>Slider_Action</td>
	</tr>
	</th>
	@foreach($all_slider_info as $v_slider)
	<tbody>
	<tr>
		<td>{{$v_slider->slider_id}}</td>
		<td><img src="{{URL::to($v_slider->slider_image)}}" style= "width: 100px; height: 100px"></td>
		
		<td>@if($v_slider->publication_status == 1)
			<span class="label label-success">Active</span>
			@else 
			<span class="label label-danger">
				Deactive

			</span>	
			@endif
		</td>
		<td>
			@if($v_slider->publication_status==1)
									<a class="btn btn-success" href="{{URL::to('/unactive_slider/'.$v_slider->slider_id)}}">
										<i class="halflings-icon white thumbs-down">Deactive</i>  
									</a>
									@else
									<a class="btn btn-danger" href="{{URL::to('/active_slider/'.$v_slider->slider_id)}}">
										<i class="halflings-icon white thumbs-up">Active</i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit-slider/'.$v_slider->slider_id)}}">
										<i class="halflings-icon white edit">Edit</i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete_slider/'.$v_slider->slider_id)}}" id="deslete">
										<i class="halflings-icon white trash">Delete</i> 
									</a>
								</td>
		</td>
	</tr>	
	
	</tbody>
	@endforeach

</table>

</div>
@endsection