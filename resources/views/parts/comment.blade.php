<div class="comment">
    <p>Автор: <a href="#">{{ $comment->user->profile->name }}</a></p>
    <p>{{ $comment->text }}</p>
    <p>{{ $comment->created_at}}</p>
    @can('delete', App\Models\Post::class)    
        <p><a href="{{ route('public.comment.delete', ['id' => $comment->id]) }}">Удалить</a></p>
    @endcan 
    <hr>    
</div>
