<div class="sidebar push-down-30">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="tags  push-down-30">
                <div class="widget_title">
                    <i class="fa fa-folder-open"></i>
                    <h6>ТЭГИ</h6>
                </div>
                @foreach($tags as $tag)
                    <a href="{{ route('public.post.tag', ['id' => $tag->id]) }}">
                        {{ $tag->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>     