@extends('layouts/app')
@section('title', 'MoU - OutComes')
@section('content')

<h4>Placements - MoUs</h4>
<div class="table-container">
        <table id="placement">
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
        <table id="internship">
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

<script>
$(document).ready(function() {
    $('#placement').DataTable({
        "paging": true,
        "pageLength": 5,
        "lengthChange": false,
        "searching": false,
        "info": false,
        "ordering": false,
        "language": {
            "paginate": {
                "previous": "<",
                "next": ">"
            }
        }
    });


$('#internship').DataTable({
        "paging": true,
        "pageLength": 5,
        "lengthChange": false,
        "searching": false,
        "info": false,
        "ordering": false,
        "language": {
            "paginate": {
                "previous": "<",
                "next": ">"
            }
        }
    });
});
</script>

@endsection


