@extends('base')
@section('styles')
	@parent
		<link href={{asset('media/css/style2.css')}} rel="stylesheet" type="text/css">
	@stop
@section('content')

  <div id="body_area">
        <h2>All news</h2>
		@foreach($text as $one)
		<a href='{{asset($one->url)}}'>
		{{$one->name}}
		</a>
		<hr/>		
		@endforeach
		@stop