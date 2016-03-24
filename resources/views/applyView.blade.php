
@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			
			<h4>Submitted applications</h4>
			
			<table class="table">
			<tr>
			    <td>SL</td>
				<td>Tender ID</td>
				<td>Applied Company</td>
				<td>Action</td>
			</tr>

			<?php $i=1; ?>
			@foreach($data as $row)
			<tr>
            <td>{{$i++}}</td>
            <td>{{$row->tender_id}}</td>
            <td>{{$row->company_name}}</td>
            <td>
            	<a href="{{route('applyDetails', $row->apply_id)}}" class="btn btn-success">Details</a>
            	
            </td>
            </tr>

            @endforeach
      
			</table>
		</div>
	</div>
</div>
@endsection
