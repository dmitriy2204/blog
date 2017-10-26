@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
	<div class="content push-down-10">
		@yield('center-column')
	</div>
@endsection

@section('footer')
	@include('parts.footer')    
@endsection

@section('footer_copyrights')
	@include('parts.footer_copyrights')    
@endsection
