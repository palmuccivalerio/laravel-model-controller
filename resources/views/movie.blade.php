@extends('layouts.app');
@section('content')
<div class="d-flex flex-wrap gap-3 justify-content-center">

    @foreach ($movies as $movie)
        @include ('partials/card')
    @endforeach
</div>
@endsection