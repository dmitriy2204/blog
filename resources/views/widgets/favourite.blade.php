<div class="push-down-30 col-xs-offset-1">
	<div class="widget-categories  push-down-30">
		<div class="widget_title">
			<i class="fa fa-thumbs-o-up"></i>
			<h6>ИЗБРАННЫЙ ПОСТ</h6>
		</div>
		@if ($favouritePost->image)
	    	<img class="widget-favourite" src="/{{ $favouritePost->image }}" alt="">
	    @endif
	    <h4><a href="{{ route('public.post.one', ['id' => $favouritePost->id]) }}">{{ $favouritePost->title }}</a></h4>       	 
	    <p>{{ $favouritePost->tagline }}</p>
	   </div> 
</div>
