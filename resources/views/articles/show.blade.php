<!-- resources/views/articles/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->title }}</title>
</head>
<body>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <small>Publié par {{ $article->user->name }} le {{ $article->created_at->format('d M Y') }}</small>
    <br>
    <a href="{{ route('articles.index') }}">Retour à la liste</a>
</body>
</html>
