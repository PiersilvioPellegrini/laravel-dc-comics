@extends('layouts.app')

@php
    $title = 'Modifica Comics #' . $comics->id;
@endphp

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    {{-- Form per la creazione --}}
    <form action="{{ route('comics.update', $comics->id) }}" method="POST">
        @csrf()
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" value="{{ $comics->title }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" cols="30" rows="5" class="form-control">{{ $comics->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine di copertina</label>
            <input type="text" class="form-control" name="thumb" value="{{ $comics->thumb }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" value="{{ $comics->price }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Series</label>
            <input type="text" class="form-control" name="series" value="{{ $comics->series }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Data vendita</label>
            <input type="text" class="form-control" name="sale_date" value="{{ $comics->sale_date }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipologia</label>
            <input type="text" class="form-control" name="type" value="{{ $comics->type }}">
        </div>


        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Annulla</a>
        <button class="btn btn-primary">Salva</button>
    </form>

@endsection
