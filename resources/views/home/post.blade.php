@extends('layouts.app')
@section('title', $posts['title'])
@section('content')
@if($posts['is_new'])
<h1 class="text-center text-primary">{{$posts['title']}}</h1>
<p class="text-center text-success">{{$posts['name']}}</p>
@endif

@isset($posts['has_element'])
    {{$posts['title']}}
@endisset

@unless ($posts['is_new'])
<h1 class="text-center text-primary">{{$posts['title']}}</h1>
<p class="text-center text-success">{{$posts['name']}}</p>
@endunless
@endsection