@extends('layouts.app')
@section('title', 'Foreach Concept')
@section('content')
<table class="table table-bordered">
    <tr>
        <th>S No</th>
        <th>Title</th>
        <th>Name</th>
        <th>DOB</th>
    </tr>
{{-- foreach loop --}}
@foreach ($data as $key => $post)
<tr>
    {{-- @break($key == 2)
    @continue($key == 2) --}}
    <td>{{$key}}</td>
    <td>{{$post['title']}}</td>
    <td>{{$post['name']}}</td>
    <td>{{$post['dob']}}</td>
</tr>
@endforeach
</table>

@for($i=1;$i<=10;$i++)
The value of the count is {{$i}} <br/>
@endfor
{{$done = false}}
@while(!$done)
<p>I am not done</p>
@if(random_int(0 ,1) === 1) {{$done = true}}
@endif
@endwhile
@endsection