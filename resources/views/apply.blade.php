@extends('layouts.master')

@section('content')


<div class="container">

<form action="{{route('tenderApplyComplete')}}" method="post" class="form-horizontal">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    

  <fieldset>

    <legend>Tender Submission</legend>

    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Tender Id:</label>
      <div class="col-lg-1">
        <input class="form-control" name="tenderId" type="text" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Company name:</label>
      <div class="col-lg-4">
        <input class="form-control" name="companyName" type="text" required>
      </div>
    </div>
    

      <div class="form-group">
      <label class="col-lg-2 control-label">Contact no:</label>
      <div class="col-lg-4">
        <input class="form-control" name="contactNo" required>
      </div>
    </div>


     <div class="form-group">
      <label class="col-lg-2 control-label">Contact address:</label>
      <div class="col-lg-4">
        <textarea class="form-control" rows="4" name="contactAddress" required> 
        </textarea>
      </div>
    </div>

    
    <div class="form-group">
      <label class="col-lg-2 control-label">Share your experience level:</label>
      <div class="col-lg-7">
        <textarea class="form-control" rows="6" name="experience" required> 
        </textarea>
      </div>
    </div>
     
     <div class="form-group">
      <label class="col-lg-2 control-label">Why your company is eligible:</label>
      <div class="col-lg-7">
        <textarea class="form-control" rows="6" name="eligibility" required> 
        </textarea>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </fieldset>

</form>
</div>
@endsection