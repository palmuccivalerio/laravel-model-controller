@extends('layout.app');
<ul>
    @foreach ($movies as $movie)
    <li>{{ $movie }}</li>
    @endforeach
</ul>