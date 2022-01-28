@extends('layouts.main-layout')
@section('content')

<h3>List:</h3>
<ul>
    
    @foreach ($comics as $comic)

    <li>
        <a href="{{ route('comic', $comic -> id) }}">
        {{ $comic -> title }}
    </a>
     - {{ $comic -> release_date }}</li>
        
    @endforeach
</ul>
    
@endsection