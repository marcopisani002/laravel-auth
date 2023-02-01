@extends('layouts.app')

@section('title', 'Lista Post')

@section('content')
  <h1>Lista post</h1>

  <table class="table text-white">
    <thead class="text-warning text-center">
      <tr>
        <th>Id</th>
        <th>Cover</th>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>GITHUB</th>
        <th></th>
      </tr>

    </thead>
    <tbody class="text-center">
      @foreach ($posts as $post)
        <tr>
          <td>{{ $post->id }}</td>
          <td><img src="{{ $post->cover_img }}" alt="" style="width: 60px"></td>
          <td>{{ $post->name }}</td>
          <td>{{ $post->description }}</td>
          <td><img src="https://kinsta.com/wp-content/uploads/2018/04/what-is-github-1-1-1024x512.png" class="my-with-a"><a href="www.github.com"></a></td>
          <td>
      
            <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-info"><i class="fas fa-eye"></i>Show</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
