@extends('layouts.app')

@section('content')
<div class="container pt-5">
        <h2>Projects</h2>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    <a href="{{route('projects.create')}}" class="btn btn-secondary mb-3">Aggiungi Progetto</a>
                </div>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITOLO</th>
                        <th scope="col">DESCRIZIONE</th>
                        <th scope="col">AUTORE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id}}</th>
                            <td>{{ $project->title}}</td>
                            <td>{{ $project->description}}</td>
                            <td>{{ $project->author}}</td>
                        </tr>

                        @empty
                        <h2>Non ci sono Progetti</h2>
                        @endforelse
                    </tbody>
                </table>
                {{$projects->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
@endsection