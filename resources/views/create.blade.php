@extends('layouts.app')

@section('content')
<form method = "post" action="{{ route('store')}}">
    @csrf
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" placeholder="Enter email">
  </div>
  <div class="form-group">
  <label for="subject">subject</label>
    <input type="text" class="form-control" placeholder="Enter email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection