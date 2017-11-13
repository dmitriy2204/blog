@forelse ($posts as $post)
    @include('parts.content')
@empty
    <p>Нет постов для отображения</p>
@endforelse

