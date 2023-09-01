
@extends ("layouts.master")

@section("contenu")
<div class="row">
    <div class="col-12 p-4">
        <div class="jumbotron">
            <h1 class="display-3">Bienvenue! <strong> {{auth()->user()->nom}} {{auth()->user()->prenom}} </strong></h1>
            @foreach(auth()->user()->roles as $role)
            <p>{{$role->nom}}</p>
            @endforeach
            <p class="lead">This is a simple example </p>
            <hr class="my-4">
            <p>It uses classes and spaces</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn More</a>
            </p>
        </div>
    </div>
</div>
@endsection

