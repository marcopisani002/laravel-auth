@extends('layouts.app')



@section('content')
    <h1>NUOVO POST</h1>




    <form action="{{ route('admin.posts.store') }}" method="POST" class="text-white m-auto px-5">
        @csrf()

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text"
                class="form-control  @error('name') is-invalid @elseif(old('name')) is-valid @enderror"
                name="name">


            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror


        </div>

        <div class="mb-3">
            <label class="form-label">Contenuto</label>
            <textarea name="content" cols="30" rows="5" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Immagine di copertina</label>
            <input type="file" class="form-control  @error('cover_img') is-invalid @enderror" name="cover_img"  id="formFile"
                value="{{ old('cover_img') }}">
            @error('cover_img')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="text-center">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-danger">Annulla</a>
            <button class="btn btn-success">Salva Post</button>
        </div>
    </form>
@endsection
