
@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			
			<h4>Tender Notice Page</h4>
			
			<table class="table">
			<tr>
			    <td>SL</td>
				<td>Tender Title</td>
				<td>Last Date</td>
				<td>Action</td>
			</tr>

			<?php $i=1; ?>
			@foreach($data as $row)
			<tr>
            <td>{{$i++}}</td>
            <td>{{$row->tender_title}}</td>
            <td>{{$row->tender_lastIssueDate}}</td>
            <td>
            	<a href="" class="btn btn-success">Details</a>
            	<a href="" class="btn btn-danger">Apply</a>
            </td>
            </tr>

            @endforeach
      
			</table>
		</div>
	</div>
</div>
@endsection
