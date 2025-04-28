<h1>Top 20 Users (by posts)</h1>
<ul>
@foreach ($leaders as $user)
    <li>{{ $user->username }} - {{ $user->posts_count }} posts</li>
@endforeach
</ul>
