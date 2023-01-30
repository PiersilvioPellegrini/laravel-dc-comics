@extends('layouts.admin')

@php
    $title = 'Nuovo Comics';
@endphp

{{-- @section('title', $title) --}}

@section('content')
    <h1>{{ $title }}</h1>

    {{-- Form per la creazione --}}
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf()

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione Comics</label>
            <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine di copertina</label>
            <input type="text" class="form-control" name="thumb">
        </div>

        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label">Series</label>
            <input type="text" class="form-control" name="series">
        </div>
        <div class="mb-3">
            <label class="form-label">sale_date</label>
            <input type="date" class="form-control" name="sale_date">
        </div>
        <div class="mb-3">
            <label class="form-label">Tipologia</label>
            <input type="text" class="form-control" name="type">
        </div>



        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Annulla</a>
        <button class="btn btn-primary">Salva</button>
    </form>
@endsection
