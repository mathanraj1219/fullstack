@extends('layouts/app')
@section('title','MoUs')
@section('content')

    <div class="table-container">
        <h2>List of MoUs</h2>
        <table>
            <thead>
                <th> Serial Number </th>
                <th> MOU </th>
                <th> Departments </th>
                <th> Company Name </th>
                <th> PDF </th>   
            </thead>
            <tbody>
                @foreach ($data as $mou)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $mou['name'] }}</td>
                    <td>{{ $mou['departments'] }}</td>
                    <td>{{ $mou['company_name'] }}</td>
                    <td>
                        <a href="{{ asset('storage/'.$mou['pdf_file']) }}" target="_blank">View PDF</a> <!-- New Link -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection