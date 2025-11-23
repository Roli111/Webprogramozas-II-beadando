@extends('front.layout.pages-layout2')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Parkok listája')
@section('content')

@if(auth()->user()->role == 1)
    <h2>Ezt csak akkor láthatod, ha admin vagy :)</h2>
    <h1>Regisztrált felhasználók:</h1>
    @foreach($users as $user)
        <p>{{ $user->name }} - {{ $user->email }} - 
            @if( $user->role ==1) 
                Admin 
            @else    
                Felhasználó
            @endif
        </p>
    @endforeach
@else
    <h2>Nincs jogosultságod az oldal megtekintéséhez.</h2>
    
@endif

@endsection