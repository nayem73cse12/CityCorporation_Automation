
@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			
			<h4>Submitted Applications for Building Construction</h4>
			
			<table class="table">
			<tr>
			    <td>SL</td>
				<td>Name</td>
				<td>Location</td>
				<td>Submitted Date</td>
				<td>Status</td>
				<td>Action</td>
			</tr>

			<?php $i=1; ?>
			@foreach($data as $row)
			<tr>
            <td>{{$i++}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->location}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->status}}</td>
            <td>
            	<a href="{{route('buildingDetails', $row->apply_id)}}" class="btn btn-success">Details</a>
            	
            </td>
            </tr>

            @endforeach
      
			</table>
		</div>
	</div>
</div>
@endsection