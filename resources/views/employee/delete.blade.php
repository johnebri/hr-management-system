@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Delete Confirmation</div>

                <div class="card-body"> 

                    <h4>Are you sure you want to delete employee {{$employee->firstname}} {{$employee->lastname}} ?</h4>

                    

                    <form method="post" action="/employees/{{$employee->id}}/delete" >
                        @method('DELETE')
                        @csrf
                        <a href="/showemployees" class="btn btn-primary"> No, Cancel</a> 
                        <button class="btn btn-danger"> Yes, Delete</button> 
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
