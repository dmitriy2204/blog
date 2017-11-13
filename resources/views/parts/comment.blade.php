<div class="comment">
    <p>Автор: <a href="#">{{ $comment->user->profile->name }}</a></p>
    <p>{{ $comment->text }}</p>
    <p>{{ $comment->created_at}}</p>
    <hr>    
</div>
