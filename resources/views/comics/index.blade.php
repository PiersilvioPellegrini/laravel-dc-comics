@extends('layouts.app')

@section('title', 'Lista Comics DB')

@section('content')
    <h1 class="text-center text-primary">Lista Comics Disponibili nel DB-Comics</h1>

    <div class="row">
        @foreach ($comics as $singleComics)
            <div class="col-3">
                <div class="card">
                    <img src="{{ $singleComics->thumb }}" alt="">
                    <h3>{{ $singleComics->title }}</h3>
                    <p>{{ $singleComics->description }}</p>
                    <p>{{ $singleComics->price }}</p>
                    <p>{{ $singleComics->series }}</p>
                    <a href="{{ route('comics.edit', $comics->id) }}" class="btn btn-primary"><i class="fas fa-pencil"></i>Edit Comics</a>
                    <a href="{{ route('comics.show', $comics->id) }}" class="btn btn-info"><i class="fas fa-eye"></i>Show Comics</a>
        
                </div>
            </div>
        @endforeach
    </div>

@endsection
