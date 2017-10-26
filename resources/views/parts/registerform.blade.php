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
	            <div class="form-group">
	                <label for="input_name" class="col-sm-3">Имя/Никнейм</label>
	                <div class="col-sm-9">
	                    <input type="text" class="form-control" name="name" placeholder="Ваш никнейм">
	                    @if ($errors->has('name'))
            				<div class="form_error">
            					{{ $errors->first('name') }}
            				</div>
						@endif
	                </div>
	            </div>

	            <div class="form-group">
	                <label for="input_email" class="col-sm-3">E-mail</label>
	                <div class="col-sm-9">
	                    <input type="text" class="form-control" id="input_email" name="email" placeholder="user@domain.ru">
	                    @if ($errors->has('email'))
            				<div class="form_error">
            					{{ $errors->first('email') }}
            				</div>
						@endif
	                </div>
	            </div>

	            <div class="form-group">
	                <label for="input_pass" class="col-sm-3 control-label">Пароль</label>
	                <div class="col-sm-9">
	                    <input type="password" class="form-control" id="input_pass" name="password" placeholder="Придумайте пароль">
	                    @if ($errors->has('password'))
            				<div class="form_error">
            					{{ $errors->first('password') }}
            				</div>
						@endif
	                </div>
	            </div>

	             <div class="form-group">
	               <label for="input_pass_2" class="col-sm-3 control-label">Подтвердите пароль</label>
	                <div class="col-sm-9">
	                    <input type="password" class="form-control" id="input_pass_2" name="password2" placeholder="Подтверждение пароля">
	                    @if ($errors->has('password2'))
            				<div class="form_error">
            					{{ $errors->first('password2') }}
            				</div>
						@endif
	                </div>
	            </div>

	            <div class="form-group">
	                <label for="input_phone" class="col-sm-3 control-label">Номер телефона</label>
	                <div class="col-sm-9">
	                    <input type="text" class="form-control" id="input_phone" name="phone" placeholder="8 (987) 654-32-10">
	                    @if ($errors->has('phone'))
            				<div class="form_error">
            					{{ $errors->first('phone') }}
            				</div>
						@endif
	                </div>
	            </div>

	            <div class="form-group">
	                <div class="col-sm-offset-3 col-sm-5">
	                    <div class="checkbox">
	                        <label>
	                            <input type="checkbox" name="is_confirmed">Согласен с условиями сайта</label>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="col-sm-offset-3 col-sm-10">
	                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>&nbsp;&nbsp;&nbsp;&nbsp;
	                    <button type="reset" class="btn btn-primary">Очистить</button>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>	
