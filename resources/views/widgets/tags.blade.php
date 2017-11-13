<div class="sidebar push-down-30">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="widget-categories  push-down-30">
                <h6>РАЗДЕЛЫ</h6>
                @foreach($tags as $tag)
                    <ul>
                        <li>
                            <a href="{{ route('public.post.category', ['id' => $tag->id]) }}">
                                {{ $tag->name }} 
                                <span class="widget-categories__text">
                                    ( {{ $tag->posts_count }} )
                                </span>
                            </a>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>     