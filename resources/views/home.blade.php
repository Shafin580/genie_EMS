@extends('layouts.app')

@section('content')
    <div class="w-50 m-auto">
        <div class="container">
            <div class="row">
                @if (Auth::user()->is_admin == 1)
                    <div class="col-md-4">
                        <a href="/admin/create"><button class="btn btn-primary mb-3">Add Employee</button></a>
                    </div>
                    @foreach ($users as $user)
                        <div class="col-md-12">
                            <h4 class="p-1 bg-secondary text-white">{{ $user->name }}</h4>
                        </div>
                    @endforeach

                    <a href="/entry"><button class="btn btn-primary mt-4">Check Entry Report</button></a>
                @else
                    <div class="text-center">
                        <h4>Date: {{ date('Y-m-d') }}</h4>
                        <button type="submit" name="checkin" class="btn btn-success">Check in</button>
                        <button type="submit" name="checkout" class="btn btn-primary">Check out</button>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
