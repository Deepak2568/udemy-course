<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index",['employees' => Employee::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'first_name' => 'required|min:5|max:25',
            'last_name'=> 'required|min:5|max:25',
            'email' => 'required|unique:employees,email',
            'mobile_number' => 'required'
        ]);
        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->mobile_number = $request->mobile_number;
        $employee->designation = $request->designation;
        $employee->company_name = $request->company_name;
        $employee->salary = $request->salary;
        $employee->experience = $request->experience;
        $employee->is_active = $request->is_active;
        $employee->save();
        return redirect()->route('employee.index')->with("success","Employee details created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $employee = Employee::find($id);
       return view("edit",["editemp"=> $employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request);
        // $request->validate([
        //     'first_name' => 'required|min:5|max:25',
        //     'last_name'=> 'required|min:5|max:25',
        //     'email' => 'required|unique:employees,email,'.$request->id.'',
        //     'mobile_number' => 'required',
        //     'designation'=> 'required',
        //     'company_name'=> 'required',
        //     'salary' => 'required',
        //     'experiecne' => 'required',
        //     'is_active' => 'required'
        // ]);
        $employee = Employee::find($id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->mobile_number = $request->mobile_number;
        $employee->designation = $request->designation;
        $employee->company_name = $request->company_name;
        $employee->salary = $request->salary;
        $employee->experience = $request->experience;
        $employee->is_active = $request->is_active;
        $employee->save();
        return redirect()->route('employee.index')->with("success","Employee details updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index')->with("success","Employee details deleted successfully");
    }
}
