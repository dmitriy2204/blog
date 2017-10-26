@extends('layouts.two-column')

@section('left-column')
    @include($page)
@endsection

@section('right-column')
	@include('widgets.me')
	@include('parts.sidebar')
@endsection
