@extends('layouts.app')

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
            <input type="text"
                class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                name="title" value="{{ $errors->has('title') ? '' : old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione Comics</label>
            <textarea name="description" cols="30" rows="5"
                class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine di copertina</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" value="{{ old('thumb') }}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Series</label>
            <input type="text" class="form-control" name="series">
        </div>
        <div class="mb-3">
            <label class="form-label">sale_date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>



        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Annulla</a>
        <button class="btn btn-primary">Salva</button>
    </form>
@endsection
