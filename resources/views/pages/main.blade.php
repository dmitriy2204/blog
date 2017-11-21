@if (isset($postsBySection))
	@forelse ($postsBySection as $post)
	    @include('parts.content')
	@empty
		<p>Нет постов для отображения</p>
	@endforelse
@else		
	@forelse ($posts as $post)
	    @include('parts.content')
	@empty
	    <p>Нет постов для отображения</p>
	@endforelse
@endif

