<header class="header boxed push-down-45">
	<div class="wrapper">
		<div class="logo col-md-3"><a href="/"><img src="/upload/welcome_to_my_blog.png" alt=""></a></div>
	
		<nav class="header-menu col-md-9">
			<ul class="navigation">
				<li class="header-navbar">
					<a href="/">Главная</a>
				</li>
				<li class="header-navbar">
					<a href="/about">Обо мне</a>
				</li>
				<li class="header-navbar">
					<a href="/feedback">Обратная связь</a>
				</li>
				@can('create', App\Models\Post::class)
					<li class="header-navbar">
						<a href="/post/add">Новый пост</a>
					</li>
				@endcan	
				<li class="header-navbar">
					@if (Auth::check())
						<a href="{{ route('public.user.profile', ['id' => $activeUser->id]) }}">Профиль</a>	
					@else 
						<a href="/user/register">Регистрация</a>
					@endif
					
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
	<div class="wrapper">
		@if (session('message'))
			<h5>{{ session('message') }}</h5>
		@elseif (isset($activeUser->profile->name)) 
			<h5>Добро пожаловать, {{ $activeUser->profile->name }}!</h5>
		@else
			 <h5>Добро пожаловать!</h5>	
		@endif
	</div>	
</div>
</div>