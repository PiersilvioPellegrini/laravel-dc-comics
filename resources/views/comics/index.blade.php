@extends('layouts.app')

@section('title', 'Lista Comics DB')

@section('content')
  <h1>Lista Comics Disponibili nel DB-Comics</h1>

  {{-- <table class="table"> --}}
    {{-- <thead>
      <tr>
        <th>Id</th>
        <th>Cover</th>
        <th>Titolo</th>
        <th>Publico</th>
        <th>Stato</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <td>{{ $post->id }}</td>
          <td><img src="{{ $post->cover_img }}" alt="" style="width: 60px"></td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->public ? 'Si' : 'No' }}</td>
          <td>{{ $post->status }}</td>
          <td>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary"><i class="fas fa-pencil"></i>E</a>
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info"><i class="fas fa-eye"></i>S</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table> --}}
@endsection