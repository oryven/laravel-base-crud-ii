@extends('layout.main-layout')

@section('content')

<h1>comics</h1>

<h2><a href="{{route('create')}}">CREATE</a></h2>
<ul>
    
    @foreach ($Comics as $comic)
    <li>
        <a href="{{ route('comic', $comic-> id)}}">{{$comic -> title }}, {{$comic -> author }}, {{$comic -> pages}} {{$comic -> release_date}}</a>
        <a href="{{ route('edit', $comic-> id)}}"> - EDIT - </a>
        <a href="{{ route('delete', $comic-> id)}}"> - DELETE - </a>
    </li>      
    @endforeach
</ul>
        
@endsection