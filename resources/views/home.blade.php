@extends('layouts.base')

@section('content')
<script>
    function showPopup() {
        document.querySelector(".background").classList.add("d-flex");
    };
    function hidePopup() {
        document.querySelector(".background").classList.remove("d-flex")
    }
</script>
@if (session('success_delete'))
    <div class="alert alert-success">
        Il fumetto dal titolo {{ session('success_delete') }} è stato eliminato correttamente
    </div>
@endif
<a href="{{ route('comics.create') }}" class="btn btn-primary">CREA NUOVO</a>
<div class="container">
    @foreach ($comics as $comic)
        <h3>{{ $comic->title }}</h3>
        <a href="{{ route('comics.show', ['comic' => $comic]) }}" class="btn btn-primary">Info</a> <br>
        <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edita</a>
        <button id="delete" class="btn btn-danger" onclick="showPopup()">Elimina</button>
        <div class="background">
            <div class="popup">
                <h5>Sei sicuro di voler eliminarlo?</h5>
                <form class="form-check form-check-inline" action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Conferma</button>
                </form>
                <button class="btn btn-secondary" id="retry" onclick="hidePopup()">Annulla</button>
            </div>
        </div>
    @endforeach
</div>
{{ $comics->links() }}
@endsection
