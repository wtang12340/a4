@extends('layouts.master')

@section('content')
    <div class='content'>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
        @foreach($trainers as $trainer)
            <tr>
                <td>{{$trainer->name}}</td>
                <td>{{$trainer->age}}</td>
                <td>{{$trainer->gender}}</td>
            </tr>
        @endforeach
        <table>
    </div>
@endsection
