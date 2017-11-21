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
                        Комментарии:
                        <span class="glyphicon glyphicon-comment comment-icon"></span>
                        <span>{{ $post->comments_count }}</span>
                    </a>
                </div>
                <div class="comments">
                    @forelse ($post->comments as $comment)
                        @include('parts.comment')
                    @empty
                        <p>Для этой статьи пока нет ни одного комментария. Будьте первым!</p>
                    @endforelse
                </div>
            </div>
            <div class="admin_panel">
                <p><a href="{{ route('public.post.edit', ['id' => $post->id]) }}">Редактировать статью</a></p>
                <p><a href="{{ route('public.post.delete', ['id' => $post->id]) }}">Удалить статью</a></p>
            </div>
        </div>
    </div>
</div>