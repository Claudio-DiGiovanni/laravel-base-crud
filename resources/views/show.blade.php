@extends('layouts.base')

@section('content')
    <ul>
        <li>ID: {{ $comic->id }}</li>
        <li>Titolo: {{ $comic->title }}</li>
        <li>Prezzo: {{ $comic->price }}</li>
        <li>Disponibile dal: {{ $comic->sale_date }}</li>
        <li>Tipo: {{ $comic->type }}</li>
        <li><img src="{{ $comic->thumb }}" alt=""></li>
    </ul>
    <a href="/" class="btn btn-primary">HOME</a>
@endsection
