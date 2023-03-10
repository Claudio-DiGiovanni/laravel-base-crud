@extends('layouts.base')

@section('content')
    @if (session('success_create'))
        <div class="alert alert-success">
            Il post e' stato creato
        </div>
    @endif
    <ul>
        <li>ID: {{ $comic->id }}</li>
        <li>Titolo: {{ $comic->title }}</li>
        <li>Descrizione: {{ $comic->description }}</li>
        <li>Prezzo: {{ $comic->price }}</li>
        <li>Disponibile dal: {{ $comic->sale_date }}</li>
        <li>Tipo: {{ $comic->type }}</li>
        <li><img src="{{ $comic->thumb }}" alt="cover-page"></li>
    </ul>
    <a href="/" class="btn btn-primary">HOME</a> <br>
    <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edita</a>
    <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">Elimina</button>
    </form>
@endsection
