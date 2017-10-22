@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
	<div class="container">
		@section('center-column')
		@show
	</div>
@endsection

@section('footer')
	@include('parts.footer')    
@endsection

@section('footer_copyrights')
	@include('parts.footer_copyrights')    
@endsection
