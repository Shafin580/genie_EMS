@extends('layouts.app')

@section('content')
    <div class="w-50 m-auto">
        <div class="container">
            <a href="/entry"><button class="btn btn-success mb-3">Back</button></a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Check in</th>
                        <th scope="col">Check out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entries as $entry)
                        <tr>
                            <td>{{ $entry->date }}</td>
                            <td>{{ $entry->checkin }}</td>
                            <td>{{ $entry->checkout }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
