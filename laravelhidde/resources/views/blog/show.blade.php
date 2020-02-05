@extends('layouts.bloylayout')

@section('title')
    BLOG - {{ $blog->title }}
@endsection

@section('content')
    <h1 class="text-white">{{ $blog->title }}</h1>
    <p class="text-white">{{ $blog->content }}</p>
    <p class="text-white">auteur: <i>{{ $blog->author }}</i></p>
    <a href="/blog/{{ $blog->id }}/edit" class="btn btn-primary text-white">Bewerken</a>
@endsection
