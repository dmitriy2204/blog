@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				@section('left-column')
				@show
			</div>
			<div class="col-xs-12 col-md-4">
				@section('right-column')
				@show
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

</body>

</html>
