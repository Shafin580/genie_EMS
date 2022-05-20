@extends('layouts.app')

@section('content')

<div class="w-50 m-auto">
    <div class="container">
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="shafin123" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="shafin@gmail.com" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Add Employee</button>
        </form>
    </div>
</div>

@endsection
