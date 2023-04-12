@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h5>Progetto di {{$project->author}}</h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$project->title}}</h5>
                <p class="card-text">{{$project->description}}</p>
                <a href="{{route('projects.index')}}" class="btn btn-primary">Ritorna indietro</a>
            </div>
        </div>
@endsection


