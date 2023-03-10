@extends('layouts.base')

@section('content')
    <form method="post" action="{{ route('comics.update', ['comic' => $comic]) }}">
        @csrf()
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
             <textarea class="form-control" id="description" name="description" rows="3">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="any" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Disponibile da</label>
            <input type="date" class="form-control" id="date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
