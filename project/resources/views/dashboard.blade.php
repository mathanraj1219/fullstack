@extends('layouts/app')
@section('title', 'Memorandum of Understanding')
@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<h4>Live MoUs</h4>
<div class="table-container">
    @if($livemous->isEmpty())
       <p>No live MoUs found.</p>
   @else
       <table id="live-mous-table">
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
                   <td>{{ $loop->iteration }}</td>
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
        <table id="expired-mous-table">
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
                   <td>{{ $loop->iteration }}</td>
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


<script>
$(document).ready(function() {
    $('#live-mous-table').DataTable({
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


    $('#expired-mous-table').DataTable({
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


<style>

.table-container table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table-container thead{
    background-color: rgb(72, 36, 108);
    color: white;
    font-weight: bold;
    text-align: left;
    padding: 10px;
}
.table-container tbody td{
    padding: 10px;
    text-align: left;
    background-color: lavender;
}

.table-container th {
    background-color: rgb(72, 36, 108);
    color: white;
    font-weight: bold;
    text-align: left;
    padding: 10px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 5px 10px;
    margin: 0 2px;
    border: 1px solid rgb(72, 36, 108);
    background-color: lavender;
    color: rgb(72, 36, 108);
    cursor: pointer;
    border-radius: 4px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    padding: 5px 10px;
    margin: 0 2px;
    border: 1px solid rgb(72, 36, 108);
    background-color: lavender;
    color: lavender;
    cursor: pointer;
    border-radius: 4px;
}

</style>

@endsection