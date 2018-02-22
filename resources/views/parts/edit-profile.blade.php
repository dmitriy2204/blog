<div class="boxed">	
	<div class="row">
	   <div class="col-md-6  col-md-offset-3">
	   		<div class="profile_title">
	   			<h2>Личный кабинет</h2>
	   		</div>
	        
	        <form class="profile" method="POST" action="{{ route('public.user.profilePost', ['id' => $user->id]) }}">
	            {{ csrf_field() }}
				<ul>
					<li 
						 @if($errors->has('name')) : 
							class = "error"
						 @endif; 
					>
			            <div class="form-group">
			                <label for="input_name" class="col-sm-3">Имя/Никнейм</label>
			                <div class="col-sm-9">
			                    <input type="text" class="form-control" id="input_name" name="name" value = "{{ old('name') ?? $user->profile->name }}" placeholder="Ваш никнейм">
			                    @if ($errors->has('name'))
		            				<p class="form_error">
		            					{{ $errors->first('name') }}
		            				</p>
								@endif
			                </div>
			            </div>
					</li>
					<li 
						@if($errors->has('email')) : 
							class = "error"
						 @endif; 
					>
			            <div class="form-group">
			                <label for="input_email" class="col-sm-3">E-mail</label>
			                <div class="col-sm-9">
			                    <input type="text" class="form-control" id="input_email" name="email" value = "{{ old('email') ?? $user->email }}" placeholder="user@domain.ru">
			                    @if ($errors->has('email'))
		            				<p class="form_error">
		            					{{ $errors->first('email') }}
		            				</p>
								@endif
			                </div>
			            </div>
					</li>
					<li 
						@if($errors->has('birthdate')) : 
							class = "error"
						 @endif; 
					>
			            <div class="form-group">
			                <label for="input_birthdate" class="col-sm-3">Дата рождения</label>
			                <div class="col-sm-9">
			                    <input type="text" class="form-control" id="input_birthdate" name="birthdate" value = "{{ old('birthdate') ?? (isset($user->profile->birthdate) ? $activeUser->profile->birthdate : null) }}" placeholder="гггг-мм-дд">
			                    @if ($errors->has('birthdate'))
		            				<p class="form_error">
		            					{{ $errors->first('birthdate') }}
		            				</p>
								@endif
			                </div>
			            </div>
					</li>
					<li 
						@if($errors->has('phone')) : 
							class = "error"
						 @endif; 
					>
			            <div class="form-group">
			                <label for="input_phone" class="col-sm-3 control-label">Номер телефона</label>
			                <div class="col-sm-9">
			                    <input type="text" class="form-control" id="input_phone" name="phone" value = "{{ old('phone') ?? $user->profile->phone }}" placeholder="+7(987)6543210">
			                    @if ($errors->has('phone'))
		            				<p class="form_error">
		            					{{ $errors->first('phone') }}
		            				</p>
								@endif
			                </div>
			            </div>
					</li>
					<li>
						<button type="submit" class="btn btn-primary">Изменить</button>&nbsp;
	                    <button type="reset" class="btn btn-primary">Очистить</button>
					</li>    
	            </ul>


	        </form>
	    </div>
	</div>
</div>	
