@extends('layouts.base')

@section('content')
    <form method="post" action="{{ route('comics.store') }}">
        @csrf()
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="any" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Disponibile da</label>
            <input type="date" class="form-control" id="date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
