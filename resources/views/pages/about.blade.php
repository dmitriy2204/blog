@extends('layouts.two-column')

@section('left-column')
    @include('parts.about-content')
@endsection

@section('right-column')
    @include('widgets.me')
    @include('parts.sidebar')
@endsection 
 

