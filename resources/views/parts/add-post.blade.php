<div class="boxed push-down-45">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="contact">
                <h2>Новый пост</h2>
                <form action="{{ route('public.post.addPost') }}" method="POST">
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
                            <input type="text" placeholder="Заголовок поста" name="title" value="{{ old('title') }}">
                        </div>
                        <div class="col-xs-12">
                            <input type="text" placeholder="Теглайн" name="tagline" value="{{ old('tagline') }}">
                        </div>
                        <div class="col-xs-12">
                            <textarea rows="3" type="text" placeholder="Анонс" name="announce">{{ old('announce') }}</textarea>
                            <textarea rows="6" type="text" placeholder="Текст статьи" name="fulltext">{{ old('fulltext') }}</textarea>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>