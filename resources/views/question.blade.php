@extends('layout.app')

@section('title','Quiz')

@section('body')

	@foreach ($question as $display)
	<h4> {{$display->question}}</h4>
	@endforeach

@endsection