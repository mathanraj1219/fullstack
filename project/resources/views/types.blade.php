<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="{{ asset('images/bit.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memorandum of Understanding</title>
    <link rel="stylesheet" href="{{ asset('css/styleboard.css') }}">
</head>
<body>
    <nav>
        <a href="https://bitsathy.ac.in"><img src="{{ asset('images/bitnav.png') }}" alt="Logo"></a>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/MoUs') }}">MoUs</a></li>
            <li><a href="{{ url('/types') }}">Types</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>
    <div class="types-container">
        <div class="moutype">
           <a href="{{ url('/types/industrial') }}"><img src="{{ asset('images/industry.jpg') }}"><h3>INDUSTRIAL MoU</h3></a>
        </div>
        <div class="moutype">
           <a href="{{ url('/types/intercollege') }}"><img src="{{ asset('images/college.jpg') }}"><h3>INTERCOLLEGE MoU</h3></a>
        </div>
        <div class="moutype">
           <a href="{{ url('/types/department-mou') }}"><img src="{{ asset('images/dept.jpg') }}"><h3>DEPARTMENT MoU</h3></a>
        </div>
    </div>