@extends('layouts.app')
@section('title', '- Create Page')
@section('content')
    <div class ="container_create">
        {{-- @if($errors->any())
        <div>
            @foreach ($errors->all() as $error )
                <ul>
                    <li class="text-danger">{{$error}}</li>
                </ul>
            @endforeach
        </div>
        @endif --}}
        <form action="{{route('employee.store')}}" method="POST">
            @csrf
            <h4 class="text-center">Add Employee Details</h4>
            <a href="{{route('employee.index')}}" class="btn btn-danger back_employee"><i class="fa fa-back"></i> Back</a>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" value={{old('first_name')}}>
            @if($errors->has('first_name'))
                <span class="text-danger">{{$errors->first('first_name')}}</span>
            @endif
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" value={{old('last_name')}}>
            @if($errors->has('last_name'))
            <span class="text-danger">{{$errors->first('last_name')}}</span>
            @endif
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value={{old('email')}}>
            @if($errors->has('email'))
            <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
            <label for="mobile_number">Mobile Number</label>
            <input type="tel" id="mobile_number" name="mobile_number" placeholder="Enter your mobile number"  value={{old('mobile_number')}}>
            @if($errors->has('mobile_number'))
            <span class="text-danger">{{$errors->first('mobile_number')}}</span>
            @endif
            <label for="designation">Designation</label>
            <input type="text" id="designation" name="designation" placeholder="Enter your designation" value={{old('designation')}}>

            <label for="company_name">Company Name</label>
            <input type="text" id="company_name" name="company_name" placeholder="Enter your company name" value={{old('company_name')}}>

            <label for="salary">Salary</label>
            <input type="number" id="salary" name="salary" placeholder="Enter your salary" value={{old('salary')}}>

            <label for="experience">Experience</label>
            <select id="experience" name="experience">
                <option value="0-1" {{old('experience' == "0-1" ? 'selected' : '') }}>0-1 years</option>
                <option value="1-3" {{old('experience' == "1-3" ? 'selected' : '') }}>1-3 years</option>
                <option value="3-5" {{old('experience' == "3-5" ? 'selected' : '') }}>3-5 years</option>
                <option value="5+" {{old('experience' == "5+" ? 'selected' : '') }}>5+ years</option>
            </select>

            <label for="is_active">Interested</label>
            <input type="checkbox" id="is_active" name="is_active" value="1" {{old('is_active' == "1" ? 'checked' : '') }}>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
