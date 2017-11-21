<div class="boxed  push-down-45">
    @if ($post->image)
        <div class="one-post">
            <img class="wp-post-image col-xs-offset-1" src="../{{ $post->image }}" alt="">
        </div>
    @endif
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="post-content--front-page">
                <h2 class="front-page-title">
                    {{ $post->title }}                
                </h2>
                @if ($post->tagline)
                    <h3>
                        {{ $post->tagline }}
                    </h3>
                @endif    
                <p>
                    {{ $post->fulltext }}
                </p>
            </div>
            <a href="#">
                <div class="comment-icon-counter">
                    Комментарии:
                    <span class="glyphicon glyphicon-comment comment-icon"></span>
                    <span class="comment-counter">{{ $post->comments_count }}</span>
                </div>
            </a>        
            <div class="comments">
                @forelse ($post->comments as $comment)
                    @include('parts.comment')
                @empty
                    <p class="advice">Для этой статьи пока нет ни одного комментария. Будьте первым!</p>
                @endforelse
            
                @if (Auth::check())
                    <div class="row">
                        <div class="col-xs-10  col-xs-offset-1">
                            <div class="comment">
                                <h4>Добавить комментарий</h4>
                                <form action="{{ route('public.post.addComment', $post->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input type="hidden" name="user_id" value="{{ $activeUser->id }}">
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <textarea rows="3" type="text" placeholder="Комментарий" name="text">{{ old('text') }}</textarea>
                                            <button type="submit" class="btn btn-primary">Добавить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <span><a href="/user/login">Войдите</a>, чтобы добавить новый комментарий!</span>      
                @endif 
            </div>       
        </div>
    </div>
</div>