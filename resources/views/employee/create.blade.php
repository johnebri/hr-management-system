@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Employee</div>

                <div class="card-body">

                    <form method="post" action="/employees">

                        @csrf
                        
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" value="{{ old('firstname') }}">
                            @error('firstname')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" value="{{ old('lastname') }}">
                            @error('lastname')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}">
                            @error('date_of_birth')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="date_of_employment">Date of Employment</label>
                            <input type="date" class="form-control" name="date_of_employment" id="date_of_employment" value="{{ old('date_of_employment') }}">
                            @error('date_of_employment')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Create Employee</button>
                        </div>

                    </form>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
