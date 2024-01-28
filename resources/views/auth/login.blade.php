@extends('layout.app')
@section('title', 'Dashboard - Page')

@section('content')
<form action="" method="POST">
    @csrf
    <label for="">Email</label>
    <input type="text" name="email" id=""><br>
    <label for="">Password</label>
    <input type="text" name="password" id=""><br>
    <input type="submit" value="Login">
</form>
@endsection