<div class="boxed push-down-45">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="post">
                <h2>Новый пост</h2>
                <form action="{{ route('public.post.addPost') }}" method="POST" class="add_post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12">                            
                            <label for="category">Категория статьи:</label>
                            <select name="section">
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @endforeach
                            </select>
                            <input type="file" name="file">
                            <ul>
                                <li 
                                     @if($errors->has('title')) : 
                                        class = "error"
                                     @endif; 
                                >
                                    <div class="post_add_form col-xs-12">
                                        <input type="text" placeholder="Заголовок поста" name="title" value="{{ old('title') }}">
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
                                    <div class="post_add_form col-xs-12">
                                        <input type="text" placeholder="Теглайн" name="tagline" value="{{ old('tagline') }}">
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
                                    <div class="post_add_form col-xs-12">
                                        <textarea rows="3" type="text" placeholder="Анонс" name="announce">{{ old('announce') }}</textarea>
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
                                    <div class="post_add_form col-xs-12">    
                                        <textarea rows="6" type="text" placeholder="Текст статьи" name="fulltext">{{ old('fulltext') }}</textarea>
                                        @if ($errors->has('fulltext'))
                                            <div>
                                                <p class="form_error">{{ $errors->first('fulltext') }}</p>
                                            </div>
                                        @endif
                                </li>
                            </ul>         
                            <button type="submit" class="btn btn-primary">Добавить</button> 
                        </div>     
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>