@extends('layout.base')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-12">
        <h1>MOVIES</h1>
    </div>
    @foreach ($movies as $movie)
    
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title">{{$movie ->title}}</h2>
                    <h4 class="card-text">{{$movie ->original_title}}</h4>
                    <p>{{$movie ->nationality}}</p>
                    <p>{{$movie ->date}}</p>
                    <p>{{$movie ->vote}}</p>
                </div>
            </div>
        </div>
    
    @endforeach
</div>
</div>
    
@endsection