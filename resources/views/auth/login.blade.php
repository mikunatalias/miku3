@extends('base')
@section('styles')
	@parent
		<link href='/media/bootstrap/css/bootstrap.min.css' rel="stylesheet">
@section('content')
@include('templates\errors')
<form action={{asset('auth/login')}} method="POST"> {!!csrf_field()!!}

  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  
  <button name="button" type="submit" class="btn btn-default">Submit</button>
  
</form>

@stop
