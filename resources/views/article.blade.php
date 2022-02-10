@extends('layouts.main')

@section('container')
<article class="mb-5">
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->content }}</p>
</article>
<a href="/articles" class="btn btn-danger">Back to List</a>
@endsection
