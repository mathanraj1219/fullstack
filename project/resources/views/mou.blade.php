@extends('layouts/app')
@section('title','MoUs')
@section('content')

    <div class="table-container">
        <table>
            <thead>
                <th> MOU </th>
                <th> Type </th>    
            </thead>
            <tbody>
                @foreach ($data as $mou)
                <tr>
                    <td>{{ $mou['name'] }}</td>
                    <td>{{ $mou['type'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection