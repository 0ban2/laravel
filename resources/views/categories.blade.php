<!DOCTYPE html>
<html>
<head>
	<title>{{ $article->title }}</title>
</head>
<body>
	<h1>{{ $article->title }}</h1>
	<p>{{$article->content}}</p>
	<h2>
		
		@foreach ($article->tags as $tag)
		{{$tag->name}}
		@endforeach
	</h2>
</body>
</html>