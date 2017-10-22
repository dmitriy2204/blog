@extends('layouts.two-column')

@section('left-column')
    @include('parts.feedback-content')
@endsection

@section('right-column')
    @include('widgets.me')
    @include('parts.sidebar')
@endsection 
 

