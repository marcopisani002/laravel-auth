@extends('layouts.app')



@section('content')
  <h1>NUOVO POST</h1>

  {{-- Se abbiamo degli errori di validazione, mostriamo un alert con questi errori
    $errors->any() - Ritorna un booleano
    $errors->all() - Ritorna un array numerico di strighe, dove ogni stringa è un errore
    --}}
  {{-- @if ($errors->any())
    <div class="alert alert-danger">
      I dati inseriti non sono validi:

      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif --}}


  <form action="{{ route('admin.posts.store') }}" method="POST" class="text-white">
    @csrf()

    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text"
        class="form-control @error('name') is-invalid @elseif(old('name')) is-valid @enderror"
        name="name" >

      
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @elseif(old('name'))
        <div class="valid-feedback">
          Ottimo lavoro!
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
      <label class="form-label">Immagine di copertina</label>
      <input type="text" class="form-control  @error('cover_img') is-invalid @enderror" name="cover_img" value="{{ old('cover_img') }}">
      @error('cover_img')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

 

    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Annulla</a>
    <button class="btn btn-primary">Salva</button>
  </form>

@endsection
