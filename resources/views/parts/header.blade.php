<header class="header boxed push-down-45">
	<div class="container">
		<div class="logo col-md-3"><a href="/"><img src="/upload/welcome_to_my_blog.png" alt=""></a></div>
	
		<nav class="header-menu col-md-9">
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
		<h5>Привет, {{ Auth::user()->name }}!</h5>
	@else 
		<h5>Привет, {{ $userName }}!</h5>
	@endif	
</div>
</div>