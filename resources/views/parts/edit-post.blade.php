<div class="boxed push-down-45">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="post">
                <h2>Редактирование статьи</h2>
                <form action="{{ route('public.post.editPost', $post->id) }}" method="POST" enctype="multipart/form-data" class="edit_post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="edit_post_form col-xs-12">
                            <label for="category">Категория статьи</label>
                            <select name="section">
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <ul>
                            <li 
                                 @if($errors->has('title')) : 
                                    class = "error"
                                 @endif; 
                            >
                                <div class="edit_post_form col-xs-12">
                                    <input type="hidden" name="user_id" value="{{ $activeUser->id }}">
                                    <input type="text" placeholder="Заголовок поста" name="title" value="{{ old('title') ?? $post->title }}">
                                    @if ($errors->has('title'))
                                        <div>
                                            <p class="form_error">{{ $errors->first('title') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </li>
                            <li 
                                 @if($errors->has('tagline')) : 
                                    class = "error"
                                 @endif; 
                            >    
                                <div class="edit_post_form col-xs-12">
                                    <input type="text" placeholder="Теглайн" name="tagline" value="{{ old('tagline') ?? $post->tagline }}">
                                    @if ($errors->has('tagline'))
                                        <div>
                                            <p class="form_error">{{ $errors->first('tagline') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </li>
                            <li 
                                 @if($errors->has('announce')) : 
                                    class = "error"
                                 @endif; 
                            >    
                                <div class="edit_post_form col-xs-12">
                                    <textarea rows="3" type="text" placeholder="Анонс" name="announce">{{ old('announce') ?? $post->announce }}</textarea>
                                    @if ($errors->has('announce'))
                                        <div>
                                            <p class="form_error">{{ $errors->first('announce') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </li>
                            <li 
                                 @if($errors->has('fulltext')) : 
                                    class = "error"
                                 @endif; 
                            > 
                                <div class="edit_post_form col-xs-12">        
                                    <textarea rows="6" type="text" placeholder="Текст статьи" name="fulltext">{{ old('fulltext') ?? $post->fulltext }}</textarea>
                                    @if ($errors->has('fulltext'))
                                        <div>
                                            <p class="form_error">{{ $errors->first('fulltext') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </li>
                        </ul>
                        <label for="img">Изображение</label>
                        <input type="file" name="file">
                        <div><input type="checkbox" name="file" value="0">&nbsp;Удалить изображение</div>
                        <button type="submit" class="btn btn-primary">Изменить</button>
                        @if($post->image != false) 
                            <div>
                                <img src="/{{ stripos($post->image, 'upload') !== false ? $post->image : config('blog.userImagesPath') . $post->image }}">
                            </div>
                        @endif       
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>