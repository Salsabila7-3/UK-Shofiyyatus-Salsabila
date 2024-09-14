<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->title }}</title>
</head>
<body>
    <nav>Navbar</nav>
    <h1>{{ $article->title }}</h1>
    <p>By {{ $article->user->name }} on {{ $article->created_at->format('d-m-Y') }}</p>
    <div>{{ $article->content }}</div>
    <h3>Related Products</h3>
    <ul>
        @foreach($relatedProducts as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul>
    <footer>Footer</footer>
</body>
</html>
