<div class="boxed push-down-45">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="contact">
                <h2>Редактирование статьи</h2>
                <form action="{{ route('public.post.editPost', $post->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="category">Категория статьи</label>
                            <select name="section">
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xs-12">
                            <input type="hidden" name="user_id" value="{{ $activeUser->id }}">
                            <input type="text" placeholder="Заголовок поста" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="col-xs-12">
                            <input type="text" placeholder="Теглайн" name="tagline" value="{{ $post->tagline }}">
                        </div>
                        <div class="col-xs-12">
                            <textarea rows="3" type="text" placeholder="Анонс" name="announce">{{ $post->announce }}</textarea>
                            <textarea rows="6" type="text" placeholder="Текст статьи" name="fulltext">{{ $post->fulltext }}</textarea>
                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>