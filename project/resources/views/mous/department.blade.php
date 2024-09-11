@extends('layouts.app')
@section('title', 'MoUs - ' . strtoupper($department))
@section('content')

    <div class="table-container">
        <h2>Eligible MoUs for {{ strtoupper($department) }}</h2>

        @if ($mous->isEmpty())
            <p>No eligible MoUs found for this department.</p>
        @else
            <table class="mou-table" id="mou-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Company</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>PDF</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mous as $mou)
                        <tr>
                            <td>{{ $mou->name }}</td>
                            <td>{{ $mou->type }}</td>
                            <td>{{ $mou->company_name }}</td>
                            <td>{{ $mou->start_date }}</td>
                            <td>{{ $mou->end_date }}</td>
                            <td><a href="{{ asset('storage/' . $mou->pdf_file) }}" target="_blank">View PDF</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <a href="{{ url('/types/department-mou') }}" class="back-button">Back to Departments</a>
    </div>

    <script>
        $(document).ready(function() {
            $('#mou-table').DataTable({
                "paging": true,
                "pageLength": 15,
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


