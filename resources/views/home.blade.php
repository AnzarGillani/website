@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="container">
  <h2>Events Table</h2>
  <a class = "btn btn-primary" href = "{{route('create')}}" >Add New</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
      <tr>
        <td>{{$event->id}}</td>
        <td>{{$event->email}}</td>
        <td>{{$event->subject}}</td>
        <td>
            <a class = "btn btn-info" href = "{{route('delete',[$event->id])}}" >Delete</a>
        </td>
        <td>
            <a class = "btn btn-primary" href = "#" >Update</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
