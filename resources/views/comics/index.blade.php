@extends('layouts.app')

@section('title', 'Lista Comics DB')

@section('content')
    <h1 class="text-center text-primary mb-5">Lista Comics Disponibili nel DB-Comics</h1>

    <a href="{{ route('comics.create') }}" class="btn btn-danger mb-5"><i class="fas fa-eye"></i>Crea un nuovo Comics</a>


    <div class="row gap-5">
        @foreach ($comics as $singleComics)
            <div class="col-3">
                <div class="card p-4">
                    <img src="{{ $singleComics->thumb }}" alt="">
                    <h3>{{ $singleComics->title }}</h3>
                    <p>{{ $singleComics->description }}</p>
                    <p>{{ $singleComics->price }}</p>
                    <p>{{ $singleComics->series }}</p>
                    <a href="{{ route('comics.edit', $singleComics->id) }}" class="btn btn-primary mb-2"><i
                            class="fas fa-pencil"></i>Edit Comics</a>

                    <a href="{{ route('comics.show', $singleComics->id) }}" class="btn btn-info mb-2"><i
                            class="fas fa-eye"></i>Show Comics</a>

                    <form action="{{ route('comics.destroy', $singleComics->id) }}" method="POST" class="delete-form">

                        @csrf()
                        @method('delete')
                        <button class=" btn btn-danger mb-3">XDELETEX</button>
                    </form>

                </div>
            </div>
        @endforeach
    </div>

@endsection
