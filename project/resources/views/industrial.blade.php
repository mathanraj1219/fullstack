@extends('layouts/app')
@section('title','Industrial - MoU')
@section('content')

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Name of the MoU</th>
                    <th>Company Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th> PDF </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $mou)
                <tr>
                    <td> {{ $mou['name'] }}</td>
                    <td> {{ $mou['company_name'] }} </td>
                    <td> {{ $mou['start_date'] }} </td>
                    <td> {{ $mou['end_date'] }} </td>
                    <td>
                        <a href="{{ asset('storage/'.$mou['pdf_file']) }}" target="_blank">View PDF</a> <!-- New Link -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection