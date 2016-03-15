
@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			
    <legend>Tender Details </legend>
    <div class="form-group">
      <label class="col-lg-2 control-label">Tender ID:</label>
      <div class="col-lg-10">
        <p>{{$data->tender_id}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Title:</label>
      <div class="col-lg-10">
        <p>{{$data->tender_title}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Category:</label>
      <div class="col-lg-10">
        <p>{{$data->tender_category}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Last Issue Date:</label>
      <div class="col-lg-10">
        <p>{{$data->tender_lastIssueDate}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Tender Details:</label>
      <div class="col-lg-10">
        <p>{{$data->tender_description}}</p>
      </div>
    </div>

		</div>
	</div>
</div>
@endsection
