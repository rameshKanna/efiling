@extends('layouts.blog')

@section('content') 

  <h2><center>Submit eTDS Details:</center></h2>
<div class="col-md-8 col-md-offset-2">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Submit Date</th>
        <th>Quarter</th>
        <th>Entries</th>
        <th>Filing type</th>
        <th>Status</th>
        <th>Ack</th>
        <th>Form27A</th>
        <th>Form16/16A</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($tds as $post)
      <tr>
        <td>{{$post->created_at}}</td>
        <td>{{$post->quarter}}</td>
        <td>{{$post->entries}}</td>
        <td>{{$post->filing_type}}</td>
        <td>{{$post->status}}</td>
        <td><center><a href="#"><img src="images/images.jpeg" width="28" height="26"></a></center></td>
        <td><center><a href="#"><img src="images/images.jpeg" width="28" height="26"></a></center></td>
        <td><center><a href="#"><img src="images/images.jpeg" width="28" height="26"></a></center></td>
      </tr>
    
 @endforeach
    </tbody>
  </table>

</div>

@endsection