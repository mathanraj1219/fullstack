@extends('layouts/app')
@section('title', 'MoUs')
@section('content')


<style>
    /* Add a bottom border to the table */
    .table-container table {
        border-bottom: 40px solid rgb(72,36,108); /* Adjust color and thickness as needed */
    }
</style>


<div class="table-container">
    <h2>List of MoUs</h2>

    <form action="{{ route('mous.index') }}" method="GET">
        <div class="filters">
            <label for="department">Filter by Department:</label>
            <select name="department" id="department">
                <option value="">All</option>
                @foreach($departments as $department)
                    <option value="{{ $department }}" {{ request('department') == $department ? 'selected' : '' }}>{{ $department }}</option>
                @endforeach
            </select>

            <label for="company_name">Filter by Company Name:</label>
            <select name="company_name" id="company_name">
                <option value="">All</option>
                @foreach($companies as $company)
                    <option value="{{ $company }}" {{ request('company_name') == $company ? 'selected' : '' }}>{{ $company }}</option>
                @endforeach
            </select>


            <button type="submit">Filter</button>
        </div>
    </form>

    <!-- MoUs Table -->
    @if($data->isEmpty())
        <p>No MoUs found under the selected criteria.</p>
    @else
    <table>
        <thead>
            <tr>
                <th>Serial Number</th>
                <th>MOU</th>
                <th>Departments</th>
                <th>Company Name</th>
                <th>PDF</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $mou)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $mou['name'] }}</td>
                <td>{{ $mou['departments'] }}</td>
                <td>{{ $mou['company_name'] }}</td>
                <td>
                    <a href="{{ asset('storage/' . $mou['pdf_file']) }}" target="_blank">View PDF</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection
