@extends('layouts.app')

@php
    $title = 'Post #' . $comics->id;
@endphp

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    <div class="card">
        {{-- Se cover_img esiste, mostra un tag img, altrimenti nulla --}}

        <img src="{{ $comics->cover_img }}" alt="" class="card-img-top">


        <div class="card-body">
            <div class="card-title">{{ $comics->title }}</div>
            <p class="card-text">{{ $comics->description }}</p>
            <p class="card-text">{{ $comics->series }}</p>
            <p class="card-text">{{ $comics->price }}</p>

        </div>
    </div>

@endsection
