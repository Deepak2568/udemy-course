@extends('layout.app')
@section('title', 'Dashboard - Page')

@section('content')
<h1>Welcome {{auth()->student()->name}} !</h1>
<a href="{{route('logout')}}">Logout</a>
@endsection