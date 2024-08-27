@extends('layouts.app')

@section('title', 'Manage MoUs')

@section('content')
    <!-- Display success message if available -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display error message if available -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="manage-container">
        <!-- Form for adding a new MoU -->
        <div class="manage-column">
            <h2>Add New MoU</h2>
            <form action="{{ route('mous.store') }}" method="POST">
                @csrf
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>

                <label for="departments">Departments:</label><br>
                <input type="text" id="departments" name="departments" required><br><br>

                <label for="company_name">Company Name:</label><br>
                <input type="text" id="company_name" name="company_name" required><br><br>

                <label for="type">Type:</label><br>
                <input type="text" id="type" name="type" required><br><br>

                <label for="start_date">Start Date:</label><br>
                <input type="date" id="start_date" name="start_date" required><br><br>

                <label for="end_date">End Date:</label><br>
                <input type="date" id="end_date" name="end_date" required><br><br>

                <label for="recipient_email">Recipient Email:</label><br>
                <input type="email" id="recipient_email" name="recipient_email" required><br><br>

                <button type="submit">Add MoU</button>
            </form>
        </div>

        <!-- Form for deleting an existing MoU -->
        <div class="manage-column">
            <h2>Delete MoU</h2>
            <form action="{{ route('mous.destroy') }}" method="POST">
                @csrf
                @method('DELETE')
                <label for="mou_id">Select MoU to Delete:</label><br>
                <select id="mou_id" name="mou_id" required>
                    @foreach ($mous as $mou)
                        <option value="{{ $mou->id }}">{{ $mou->name }} ({{ $mou->company_name }})</option>
                    @endforeach
                </select><br><br>

                <button type="submit">Delete MoU</button>
            </form>
        </div>
    </div>

@endsection


