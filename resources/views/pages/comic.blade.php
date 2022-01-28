@extends('layouts.main-layout')
@section('content')

<h1>{{$comic -> title}}</h1>
<h4>{{$comic -> subtitle}}</h4>

<p> {{$comic -> release_date}}</p>
    
@endsection