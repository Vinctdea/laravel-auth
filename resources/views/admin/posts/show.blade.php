@extends('layouts.app')

@section('content')
    <h1>Dettagli post</h1>
    <ul>
        <li>Titolo: {{ $post->title }}</li>
        <li>Contenuto: {{ $post->content }}</li>
        <li>tempo di lettura: {{ $post->reading_time }}</li>
    </ul>

    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Torna all' elenco</a>
@endsection
