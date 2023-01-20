@extends('layouts.base')

@section('content')
    <form method="post" action="{{ route('comic.store') }}">
        @csrf()
        <div class="mb-3">
            <label for="city" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="city" name="title">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Descrizione</label>
            <input type="number" class="form-control" id="price" name="description">
        </div>
        <div class="mb-3">
            <label for="street" class="form-label">thumb</label>
            <input type="text" class="form-control" id="street" name="thumb">
        </div>
        <div class="mb-3">
            <label for="free_from" class="form-label">Disponibile da</label>
            <input type="date" class="form-control" id="free_from" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="rooms" class="form-label">Tipo</label>
            <input type="number" class="form-control" id="rooms" name="type">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
