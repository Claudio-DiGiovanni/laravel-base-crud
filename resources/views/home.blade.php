@extends('layouts.base')

@section('content')
@if (session('success_delete'))
    <div class="alert alert-success">
        Il fumetto dal titolo {{ session('success_delete') }} è stato eliminato correttamente
    </div>
@endif
<a href="{{ route('comics.create') }}" class="btn btn-primary">CREA NUOVO</a>
<div class="container">
    @foreach ($comics as $comic)
        <h3>{{ $comic->title }}</h3>
        <a href="{{ route('comics.show', ['comic' => $comic]) }}" class="btn btn-primary">Info</a>
        <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edita</a>
        <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Elimina</button>
        </form>
    @endforeach
</div>
{{ $comics->links() }}
@endsection
