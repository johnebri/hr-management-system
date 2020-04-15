<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employees;

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

        $employee = Employees::create($data);

        return redirect('/showemployees');
    }

    public function edit(Employees $employee) 
    {
        return view('employee.edit', compact('employee'));
    }

    public function update(Employees $employee) 
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

        $res = $employee->update($data);
        
        if($res == 1) {
            $responseMessage = 'Employee Edited successfully';
            return redirect('/showemployees');
        } else {
            $responseMessage = 'An error occurred editing employee. Please try again';
            return redirect('/showemployees');
        }
    }

    public function delete(Employees $employee)
    {
        return view('employee.delete', compact('employee'));
    }

    public function destroy(Employees $employee) 
    {
        $employee->delete();
        return redirect('/showemployees');
    }
}

