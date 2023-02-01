@extends('layouts.app')

@php
  $title = 'Nuovo post';
@endphp

@section('title', $title)

@section('content')
  <h1>{{ $title }}</h1>

  {{-- Se abbiamo degli errori di validazione, mostriamo un alert con questi errori
    $errors->any() - Ritorna un booleano
    $errors->all() - Ritorna un array numerico di strighe, dove ogni stringa è un errore
    --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      I dati inseriti non sono validi:

      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- Form per la creazione --}}
  <form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf()

    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text"
        class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
        name="title" value="{{ $errors->has('title') ? '' : old('title') }}">

      {{-- Se tra gli errori c'è ne uno per il title, mostra il div invalid-feedback --}}
      @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @elseif(old('title'))
        {{-- altrimenti se c'è un valore old per title, mostra un valid-feedback --}}
        <div class="valid-feedback">
          Ottimo lavoro!
        </div>
      @enderror

      {{--
        Questo è quello che fa la direttiva @error()
        @if ($errors->has('title'))

        @endif
      --}}
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

    <div class="mb-3 form-check form-switch">
      <input class="form-check-input" type="checkbox" role="switch" id="switch_public" name="public"
        {{ old('public', 1) ? 'checked' : '' }} value="1">
      <label class="form-check-label" for="switch_public">Post publico</label>
    </div>

    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Annulla</a>
    <button class="btn btn-primary">Salva</button>
  </form>

@endsection
