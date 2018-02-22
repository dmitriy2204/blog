<div class="article boxed push-down-45">
    @if ($post->image)
        <a href="{{ route('public.post.one', ['id' => $post->id]) }}">
            <img class="article_image" src="/{{ stripos($post->image, 'upload') !== false ? $post->image : config('blog.userImagesPath').$post->image }}" alt="">
        </a>
    @endif
    <div class="row">
        <div class="col-xs-12  col-sm-10  col-sm-offset-1">
            <div class="row">
                <div class="views_count col-xs-12  col-sm-8">
                    <i class="fa fa-eye"> {{ $post->views_count }}</i>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <span class="article_date">
                        <i class="fa fa-calendar"> {{ $post->created_at }}</i>
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
                @if (isset($post->tagline))
                    <h4>
                        {{ $post->tagline }}
                    </h4>
                @endif
                @if(isset($post->announce))
                    <p>
                        {{ $post->announce }}
                    </p>
                @endif
            </div>
            <div class="read-more">
                <a href="{{ route('public.post.one', ['id' => $post->id]) }}">
                    Читать далее
                </a>
                <div class="comment_counter panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" href="#commentsCollapse" class="panel-title">
                                Комментарии:
                                <i class="fa fa-comments-o"></i>
                                <span>{{ $post->comments_count }}</span>
                            </a>
                        </div>               
                        <div id="commentsCollapse" class="panel-collapse collapse">
                            <ul class="list-group">
                                @forelse ($post->comments as $comment)
                                    <li class="list-group-item">
                                        @include('parts.comment')
                                        @empty
                                        <p>Для этой статьи пока нет ни одного комментария. Будьте первым!</p>
                                    </li>
                                @endforelse
                            </ul>
                        </div>    
                    </div> 
                </div>
            </div>
            @can('edit', App\Models\Post::class)
                <div class="admin_panel">
                    <p><a href="{{ route('public.post.edit', ['id' => $post->id]) }}">Редактировать пост</a></p>
                </div>   
            @endcan
            @can('delete', App\Models\Post::class)    
                <p><a href="{{ route('public.post.delete', ['id' => $post->id]) }}">Удалить пост</a></p>
            @endcan    
        </div>
    </div>
</div>