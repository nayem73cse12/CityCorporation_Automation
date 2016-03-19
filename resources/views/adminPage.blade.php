
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
              <a href="" class="btn btn-warning">Edit</a>
              <a href="" class="btn btn-danger">Delete</a>
            </td>
            </tr>

            @endforeach
      
      </table>
    </div>
           <a href="{{route('addNotice')}}" class="btn btn-success">Add New</a>
            <a href="{{route('logout')}}" class="btn btn-danger">Log Out</a>
  </div>
@endsection
