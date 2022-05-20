@extends('layouts.app')

@section('content')
    <div class="w-50 m-auto">
        <div class="container">
            <a href="/home"><button class="btn btn-success mb-3">Back</button></a>
            <form action="{{ route('entry.index') }}" method="GET">
                @csrf
                <input type="date" name="date" class="form-control">
                <button type="submit" class="btn btn-success mt-2">Search</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Check in</th>
                        <th scope="col">Check out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entries as $entry)
                        <tr>
                            <td><a href="/entry/{{ $entry->name }}">{{ $entry->name }}</a></td>
                            <td>{{ $entry->checkin }}</td>
                            <td>{{ $entry->checkout }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
