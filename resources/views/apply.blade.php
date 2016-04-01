<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sylhet City Corporation</title>

  {!! Html::style('bootstrap/bootstrap.min.css') !!}

  {!! Html::script('bootstrap/js/jquery.js') !!}

  <!-- Fonts -->
  

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

   

</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <h2>Sylhet City Corporation</h2>
      </div>
    </div>
  </nav>
     

  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

  <div class="container">

<form action="{{route('tenderApplyComplete')}}" method="post" class="form-horizontal">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    

  <fieldset>

    <legend>Tender Submission</legend>

    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Tender Id:</label>
      <div class="col-lg-1">
        <input class="form-control" type="text" value="{{$id}}" name="tenderId" required>
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

</body>
</html>



