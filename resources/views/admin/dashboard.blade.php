@extends('layouts.app')
@php
    $users=Auth::user();
@endphp
@section('content')
<div class="container">
    <h1 class="mt-5 text-white">Benvenuto 
        {{Auth::user()->name}}
      
   </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 bg-success text-white">
                <div class="card-header fw-bold">{{ __('I Tuoi Dati') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table text-white">
                        <thead class="text-warning">
                          <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                         
                          </tr>
                        </thead>
                        <tbody class="fw-bold">
                         
                            <tr>
                              <td>{{Auth::user()->id }}</td>
                              <td> {{Auth::user()->name}}</td>
                              <td> {{Auth::user()->email}}</td>
                              
                       
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
