@extends('layouts.app')


@section('title', "Aggiungi Canzone")


@section('content')
    <div class="container mt-5">
        {{-- @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{old('title')}}">
            </div>

            
            <div class="mb-3">
                <label for="author" class="form-label">Autore</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Nome Autore" value="{{old('author')}}">
            </div>
            
            <div class="mb-3">
                <label for="album" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrizione">{{old('description')}}</textarea>
            </div>

            <button class="btn btn-secondary">Aggiungi</button>
        </form>


           
    </div>
    
@endsection