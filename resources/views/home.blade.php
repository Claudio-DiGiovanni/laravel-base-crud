@extends('layouts.base')

@section('content')
<a href="{{ route('comics.create') }}" class="btn btn-primary">CREA NUOVO</a>
<div class="container">
    @foreach ($comics as $comic)
        <h3>{{ $comic->title }}</h3>
        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Info</a>
    @endforeach
</div>
@endsection
