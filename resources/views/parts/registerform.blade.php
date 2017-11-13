<div class="boxed">	
	<div class="row">
	   <div class="col-md-6  col-md-offset-3">
	   		<div class="registerform_title">
	   			<h2>Регистрация</h2>
	       	 	<p>Для регистрации заполните все поля</p>
	   		</div>
	        
	        <form class="registerform" method="POST" action="{{ route('public.user.registerPost') }}">
	            {{ csrf_field() }}
	            @if ($errors->has('is_confirmed'))
            		<div>
            			<p class="confirm_error">{{ $errors->first('is_confirmed') }}</p>
            		</div>
				@endif
				<ul>
					<li 
						@if($errors->has('email')) : 
							class = "error"
						 @endif; 
					>
			            <div class="form-group">
			                <label for="input_email" class="col-sm-3">E-mail</label>
			                <div class="col-sm-9">
			                    <input type="text" class="form-control" id="input_email" name="email" value = "{{ old('email') }}" placeholder="user@domain.ru">
			                    @if ($errors->has('email'))
		            				<p class="form_error">
		            					{{ $errors->first('email') }}
		            				</p>
								@endif
			                </div>
			            </div>
					</li>
					<li 
						@if($errors->has('password')) : 
							class = "error"
						 @endif; 
					>
			            <div class="form-group">
			                <label for="input_pass" class="col-sm-3 control-label">Пароль</label>
			                <div class="col-sm-9">
			                    <input type="password" class="form-control" id="input_pass" name="password" placeholder="Придумайте пароль">
			                    @if ($errors->has('password'))
		            				<p class="form_error">
		            					{{ $errors->first('password') }}
		            				</p>
								@endif
			                </div>
			            </div>
					</li>
					<li 
						@if($errors->has('password_confirm')) : 
							class = "error"
						 @endif; 
					>
			             <div class="form-group">
			              	<label for="input_pass_2" class="col-sm-3 control-label">Подтвердите пароль</label>
			                <div class="col-sm-9">
			                    <input type="password" class="form-control" id="input_pass_2" name="password_confirm" placeholder="Подтверждение пароля">
			                    @if ($errors->has('password_confirm'))
		            				<p class="form_error">
		            					{{ $errors->first('password_confirm') }}
		            				</p>
								@endif
			                </div>
			            </div>
					</li>   
	            </ul>

	            <div class="form-group">
	                <div class="col-sm-offset-3 col-sm-5">
	                    <div class="checkbox">
	                        <label>
	                            <input type="checkbox" name="is_confirmed">Согласен с условиями сайта
	                        </label>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="col-sm-offset-3 col-sm-10">
	                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>&nbsp;
	                    <button type="reset" class="btn btn-primary">Очистить</button>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>	
