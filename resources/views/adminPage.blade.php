
@extends('layouts.master')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10">
</div>
      
      <table class="table">
      <h4>Current Tender Notice</h4>
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
              <a href="{{route('noticeEdit', $row->tender_id) }}" class="btn btn-warning">Edit</a>
              <a href="{{route('deleteNotice',$row->tender_id)}}" class="btn btn-danger">Delete</a>
              <a href="{{route('submittedApplications', $row->tender_id) }}" class="btn btn-primary">Submissions</a>
            </td>
            </tr>

            @endforeach
      
      </table>
    </div>
           <a href="{{route('addNotice')}}" class="btn btn-default">Add New</a>
            <a href="{{route('logout')}}" class="btn btn-default">Log Out</a>
  </div>
@endsection
