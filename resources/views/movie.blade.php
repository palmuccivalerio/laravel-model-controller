@extends('layouts.app');
@section('content')
<div class="d-flex flex-wrap gap-3 justify-content-center">
    
    @foreach ($movies as $movie)

    


    <div class="card col-4" style="width: 18rem;">
        <img class="card-img-top" src="{{$movie['image']}}" alt="Card image cap">
        <div class="card-body">
            <p class="card-text"> <strong>Titolo</strong> : {{$movie['title']}}</p>
            <p class="card-text">{{$movie['original_title']}}</p>
            <p class="card-text">{{$movie['vote']}}/10</p>
        </div>
    </div>

@endforeach
</div>
@endsection