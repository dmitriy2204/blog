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
                <div class="read-more">
                    <div class="comment-icon-counter">
                        <span class="glyphicon glyphicon-comment comment-icon"></span>
                        <span class="comment-counter">0</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>