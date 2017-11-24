@if($popularPost->views_count > 0)
<div class="push-down-30 col-xs-offset-1">
	<div class="widget-categories  push-down-30">
		<div class="widget_title">
			<i class="fa fa-heart-o"></i>
			<h6>ПОПУЛЯРНОЕ</h6>
		</div>	
		@if (isset($popularPost->image))
	    	<img class="widget-favourite" src="/{{ $popularPost->image }}" alt="">
	    @endif
	    <h4><a href="{{ route('public.post.one', ['id' => $popularPost->id]) }}">{{ $popularPost->title }}</a></h4>       	 
	    <p>{{ $popularPost->tagline }}</p>
	   </div> 
</div>
@endif
