<div class="sidebar push-down-30">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="widget-categories  push-down-30">
                <div class="widget_title">
                    <i class="fa fa-folder-open"></i>
                    <h6>РАЗДЕЛЫ</h6>
                </div>
                @foreach($sections as $section)
                    <ul>
                        <li>
                            <a href="{{ route('public.post.category', ['id' => $section->id]) }}">
                                {{ $section->name }} 
                                <span class="widget-categories__text">
                                    ( {{ $section->posts_count }} )
                                </span>
                            </a>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>     