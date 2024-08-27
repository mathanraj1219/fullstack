@extends('layouts/app')
@section('title','Memorandum of Understanding')
@section('content')

    <h4>Live MoUs</h4>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Name of the MoU</th>
                    <th>Departments</th>
                    <th>Company Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livemous as $mou)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $mou['name'] }}</td>
                    <td>{{ $mou['departments'] }}</td>
                    <td>{{ $mou['company_name'] }}</td>
                    <td>{{ $mou['start_date'] }}</td>
                    <td>{{ $mou['end_date'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h4>Expired MoUs</h4>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Name of the MoU</th>
                    <th>Departments</th>
                    <th>Company Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expiredmous as $mou)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $mou['name'] }}</td>
                    <td>{{ $mou['departments'] }}</td>
                    <td>{{ $mou['company_name'] }}</td>
                    <td>{{ $mou['start_date'] }}</td>
                    <td>{{ $mou['end_date'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection