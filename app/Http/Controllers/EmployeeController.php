<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function showAll() {
        $employees = \App\Employees::all();
        return view('employee.showall', compact('employees'));
    }

    public function create() 
    {
        return view('employee.create');
    }

    public function store() 
    {
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'date_of_employment' => 'required'
        ]);

        $employee = \App\Employees::create($data);

        return redirect('/showemployees');
    }
}

