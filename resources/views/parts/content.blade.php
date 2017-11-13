<div class="article boxed push-down-45">
    @if ($post->image)
        <a href="{{ route('public.post.one', ['id' => $post->id]) }}">
            <img class="article_image" src="/{{ $post->image }}" alt="">
        </a>
    @endif
    <div class="row">
        <div class="col-xs-12  col-sm-10  col-sm-offset-1">
            <div class="row">
                <div class="col-xs-12  col-sm-8">
                    <a href="/">Статьи</a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <span class="article_date">
                        {{ $post->created_at }}
                    </span>
                </div>
            </div>
        </div>
    </div>    
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="article_content">
                <h2 class="article_title">
                    <a href="{{ route('public.post.one', ['id' => $post->id]) }}">{{ $post->title }}</a>
                </h2>
                @if ($post->tagline)
                    <h3>
                        {{ $post->tagline }}
                    </h3>
                @endif
                @if($post->announce)    
                    <p>
                        {{ $post->announce }}
                    </p>
                @endif
            </div>
            <div class="read-more">
                <a href="{{ route('public.post.one', ['id' => $post->id]) }}">
                    Читать далее
                </a>
                <div class="comment_counter">
                    <a href="#">
                        <span class="glyphicon glyphicon-comment comment-icon"></span>
                        <span class="comment_counter">0</span>
                    </a>
                </div>
                {{ $post->tags_count }}
            </div>
        </div>
    </div>
</div>