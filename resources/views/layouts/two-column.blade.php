@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
	<div class="content">		
			<div class="row">
				<div class="col-xs-12 col-md-8">
					@yield('left-column')
				</div>
				<div class="col-xs-12 col-md-4">
					@yield('right-column')
				</div>				
			</div>	
	</div>
@endsection

@section('footer')
	@include('parts.footer')    
@endsection

@section('footer_copyrights')
	@include('parts.footer_copyrights')    
@endsection
