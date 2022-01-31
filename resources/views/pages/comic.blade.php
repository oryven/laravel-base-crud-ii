@extends('layout.main-layout')

@section('content')

<h1>Comic</h1>

<h2>{{$comic -> title }}</h2>

<p>{{$comic -> release_date}}, {{$comic -> author }}, {{$comic -> pages}}</p>  
        
@endsection