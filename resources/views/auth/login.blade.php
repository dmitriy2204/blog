<div class="boxed"> 
    <div class="row push-down-30">
        <div class="col-md-6  col-md-offset-3">
            <div class="authform">
                <h2>Авторизация</h2>
                <p>Для продолжения необходимо ввести логин и пароль</p>
            </div>  
            <form method="POST" action="">
                {{ csrf_field() }}

                @if (session('authError'))
                    <div class="auth_error">
                        <p>{{ session('authError') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="input_email" class="col-sm-3 control-label">Логин</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="input_email" placeholder="Email" name="email">
           
                    </div>
                </div>
                <div class="form-group">
                    <label for="input_password" class="col-sm-3 control-label">Пароль</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="input_password" placeholder="Пароль" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember">Запомнить меня</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </div>
                </div>
            </form>
            <div class="authform">
                <p>Еще не зарегистрированы? <a href="/user/register">Зарегистрироваться</a></p>
            </div>
        </div>
    </div>
</div>  
