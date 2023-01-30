
@extends('layouts.app')

{{-- @php
  $title = 'Modifica post #' . $post->id;
@endphp

@section('title', $title)

@section('content')
  <h1>{{ $title }}</h1>

  {{-- Form per la creazione --}}
  {{-- <form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf()
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text" class="form-control" name="title" value="{{ $post->title }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Contenuto</label>
      <textarea name="content" cols="30" rows="5" class="form-control">{{ $post->content }}</textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Immagine di copertina</label>
      <input type="text" class="form-control" name="cover_img" value="{{ $post->cover_img }}">
    </div>

    <div class="mb-3 form-check form-switch">
      <input class="form-check-input" type="checkbox" role="switch" id="switch_public" name="public"
        {{ $post->public ? 'checked' : '' }}>
      <label class="form-check-label" for="switch_public">Post publico</label>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Annulla</a>
    <button class="btn btn-primary">Salva</button>
  </form> --}}

{{-- @endsection --}} 