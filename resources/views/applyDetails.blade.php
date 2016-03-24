
@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			
    <legend>Application Details </legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Created Date:</label>
      <div class="col-lg-10">
        <p>{{$data->created_at}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Apply id:</label>
      <div class="col-lg-10">
        <p>{{$data->apply_id}}</p>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Tender ID:</label>
      <div class="col-lg-10">
        <p>{{$data->tender_id}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Title:</label>
      <div class="col-lg-10">
        <p>{{$data->company_name}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Category:</label>
      <div class="col-lg-10">
        <p>{{$data->contact_no}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Address:</label>
      <div class="col-lg-10">
        <p>{{$data->contact_address}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Experience:</label>
      <div class="col-lg-10">
        <p>{{$data->experience}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Why he eligible:</label>
      <div class="col-lg-10">
        <p>{{$data->eligibility}}</p>
      </div>
    </div>


		</div>
	</div>
</div>
@endsection
