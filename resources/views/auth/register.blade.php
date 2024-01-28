@extends('layout.app')
@section('title', 'Dashboard - Page')

@section('content')
<form action="{{route('store')}}" method="POST">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" id="name"><br>
    <label for="">Email</label>
    <input type="text" name="email" id="email"><br>
    <label for="">Password</label>
    <input type="text" name="password" id="password"><br>
    <label for="">Password</label>
    <input type="text" name="password_confirmation" id="password_confirmation"><br>
    <input type="submit" value="Register">
</form>
@endsection