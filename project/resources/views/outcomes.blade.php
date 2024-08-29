@extends('layouts/app')
@section('title', 'MoU - OutComes')
@section('content')

<h4>Placement - MoUs</h4>
<div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Name of the MoU</th>
                    <th>Departments</th>
                    <th>Company Name</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($placementData as $mou)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $mou->name }}</td>
                    <td>{{ $mou->departments }}</td>
                    <td>{{ $mou->company_name }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $mou->pdf_file) }}" target="_blank">View PDF</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

<h4>Internships - MoUs</h4>
<div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Name of the MoU</th>
                    <th>Departments</th>
                    <th>Company Name</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($internshipData as $mou)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $mou->name }}</td>
                    <td>{{ $mou->departments }}</td>
                    <td>{{ $mou->company_name }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $mou->pdf_file) }}" target="_blank">View PDF</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection


