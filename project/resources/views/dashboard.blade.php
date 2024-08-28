@extends('layouts/app')
@section('title', 'Memorandum of Understanding')
@section('content')

<h4>Live MoUs</h4>
<div class="table-container">
    @if($livemous->isEmpty())
        <p>No live MoUs found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Name of the MoU</th>
                    <th>Departments</th>
                    <th>Company Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livemous as $mou)
                <tr>
                    <td>{{ $loop->iteration + ($livemous->currentPage() - 1) * $livemous->perPage() }}</td>
                    <td>{{ $mou->name }}</td>
                    <td>{{ $mou->departments }}</td>
                    <td>{{ $mou->company_name }}</td>
                    <td>{{ $mou->start_date }}</td>
                    <td>{{ $mou->end_date }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $mou->pdf_file) }}" target="_blank">View PDF</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<h4>Expired MoUs</h4>
<div class="table-container">
    @if($expiredmous->isEmpty())
        <p>No expired MoUs found.</p>
    @else
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
                    <td>{{ $loop->iteration + ($expiredmous->currentPage() - 1) * $expiredmous->perPage() }}</td>
                    <td>{{ $mou->name }}</td>
                    <td>{{ $mou->departments }}</td>
                    <td>{{ $mou->company_name }}</td>
                    <td>{{ $mou->start_date }}</td>
                    <td>{{ $mou->end_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection


