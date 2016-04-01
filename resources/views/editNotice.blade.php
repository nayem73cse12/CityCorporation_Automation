@extends('layouts.master')

@section('content')
<div class="container">
<form action="{{route('noticeUpdate',$data->tender_id)}}" method="post" class="form-horizontal">

    <input type="hidden" name="_token" value="{{csrf_token()}}">


  <fieldset>

    <legend>Tender Notice/Edit</legend>

    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Tender Title:</label>
      <div class="col-lg-4">
        <input class="form-control" value="{{$data->tender_title}}" name="tenderTitle" type="text" placeholder="Enter Tender Title" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-lg-2 control-label">Category:</label>
      <div class="col-lg-3">
        <input class="form-control" value="{{$data->tender_category}}" name="tenderCategory" type="text" placeholder="Enter Tender Category" required>
      </div>
    </div>

    
      <div class="form-group">
      <label class="col-lg-2 control-label">Created Date:</label>
      <div class="col-lg-2">
        <input class="form-control" value="{{$data->tender_createdDate}}" name="createdDate" type="date" placeholder="YYYY-MM-DD" required>
      </div>
    </div>


     <div class="form-group">
      <label class="col-lg-2 control-label">Expired Date:</label>
      <div class="col-lg-2">
        <input class="form-control" value="{{$data->tender_lastIssueDate}}" name="lastIssueDate" type="date" placeholder="YYYY-MM-DD" required>
      </div>
    </div>

    
    <div class="form-group">
      <label class="col-lg-2 control-label">Tender Details:</label>
      <div class="col-lg-7">
        <textarea class="form-control" rows="6" value="{{$data->tender_description}}" name="tanderDetails" required> 
        </textarea>
      </div>
    </div>

    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </div>

  </fieldset>

</form>
</div>
@endsection