@extends('layouts/app')
@section('title','Types - MoU')
@section('content')

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

@endsection