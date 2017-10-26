<header class="header boxed push-down-45">
	<div class="container">
		<div class="logo col-xs-9 col-md-3"><a href="/"><img src="/upload/logo.png" alt=""></a></div>
	
		<nav class="navbar col-xs-12 col-md-8">
			<ul class="navigation">
				<li class="header-navbar">
					<a href="/">Главная</a>
				</li>
				<li class="header-navbar">
					<a href="/test">Тест</a>
				</li>
				<li class="header-navbar">
					<a href="/about">Обо мне</a>
				</li>
				<li class="header-navbar">
					<a href="/feedback">Обратная связь</a>
				</li>
				<li class="header-navbar">
					<a href="/user/register">Регистрация</a>
				</li>
				
				<li class="header-navbar">
					@if (Auth::check())
						<a href="/user/logout">Выход</a>
					@else 
						<a href="/user/login">Вход</a>
					@endif	
				</li>
			</ul>
		</nav>
	</div>
</header>
<div class="greeting boxed">
	@if (Auth::check())
		Привет, {{ Auth::user()->name }}!
	@else 
		Привет, {{ $userName }}!
	@endif	
</div>
</div>