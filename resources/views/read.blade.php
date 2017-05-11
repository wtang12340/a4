@extends('layouts.master')

@section('content')
    <div class='content'>
        <table>
            <tr>
                <th>Name</th>
                <th>Type1</th>
                <th>Type2</th>
                <th>Level</th>
                <th>Trainer</th>
            </tr>
        @foreach($monsters as $monster)
            <tr>
                <td>{{$monster->name}}</td>
                <td>{{$monster->type1}}</td>
                <td>{{$monster->type2}}</td>
                <td>{{$monster->level}}</td>
                <td>{{$monster->trainer->name}}</td>
            </tr>
        @endforeach
        <table>
    </div>
@endsection
