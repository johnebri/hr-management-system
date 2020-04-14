@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Employees</div>

                <div class="card-body"> 

                        <a href="/employees" class="btn btn-primary"> + New Employee</a> 
            
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{$employee->firstname}} {{$employee->lastname}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->gender}}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            @endforeach                            

                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
