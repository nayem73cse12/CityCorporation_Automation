
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
            	<a href="{{route('noticeDetails', $row->tender_id) }}" class="btn btn-success">Details</a>
            	<a href="{{route('tenderApplyPage',$row->tender_id)}}" class="btn btn-danger">Apply</a>
            </td>
            </tr>

            @endforeach
      
			</table>
		</div>
	</div>
</div>

</body>
</html>
