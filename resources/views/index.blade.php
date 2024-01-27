@extends('layouts.app')
@section('title', 'Employee Mangement System - Index Page')
@section('content')
<div class="row">
    <div class="col-12 text-center mt-3">
        <h3>Employee Management System</h3>
    </div>
    <div class="col-8">
        
    </div>
    <div class="col-4">
        <a href="{{route('employee.create')}}" class="btn btn-success add_details"><i class="fa fa-plus"></i> Add Details</a>
    </div>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
<table class="table table-bordered mt-2">
    <thead>
        <th>S No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Designation</th>
        <th>Company Name</th>
        <th>Salary</th>
        <th>Experience</th>
        <th>Status</th>
        <th colspan =3>Action</th>
    </thead>
    @forelse ($employees as $key => $emp)
    <tbody>
        <td>{{$emp->id}}</td>
        <td>{{$emp->first_name.' '.$emp->last_name}}</td>
        <td>{{$emp->email}}</td>
        <td>{{$emp->mobile_number}}</td>
        <td>{{$emp->designation}}</td>
        <td>{{$emp->company_name}}</td>
        <td>{{$emp->salary}}</td>
        <td>{{$emp->experience}}</td>
        <td>{!! $emp->is_active == 1 ? '<button class="btn btn-success btn-sm">Active</button>' : '<button class="btn btn-danger btn-sm">Inactive</button>' !!}</td>
        <td><a href="{{route('employee.show',$emp->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Show</a></td>
        <td><a href="{{route('employee.edit',$emp->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a></td>
        <form action="{{route('employee.destroy',$emp->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <td><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></td>
        </form>
    </tbody> 
    @empty
    <tbody>
       <td colspan="10" class="text-center">No Data Found !</td>
    </tbody> 
    @endforelse
</table>
<div>
    {{$employees->links()}}
</div>
@endsection