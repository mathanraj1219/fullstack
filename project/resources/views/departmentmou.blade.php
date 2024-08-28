@extends('layouts/app')
@section('title','Departments - MoU')
@section('content')

<div class="dept">
    <a href="{{ url('/department-mou/aids') }}">AIDS</a>
    <a href="{{ url('/department-mou/aiml') }}">AIML</a>
    <a href="{{ url('/department-mou/bm') }}">BM</a>
    <a href="{{ url('/department-mou/bt') }}">BT</a>
    <a href="{{ url('/department-mou/csbs') }}">CSBS</a>
    <a href="{{ url('/department-mou/csd') }}">CSD</a>
    <a href="{{ url('/department-mou/cse') }}">CSE</a>
    <a href="{{ url('/department-mou/ct') }}">CT</a>
    <a href="{{ url('/department-mou/ece') }}">ECE</a>
    <a href="{{ url('/department-mou/eee') }}">EEE</a>
    <a href="{{ url('/department-mou/eie') }}">EIE</a>
    <a href="{{ url('/department-mou/fd') }}">FD</a>
    <a href="{{ url('/department-mou/it') }}">IT</a>
    <a href="{{ url('/department-mou/tt') }}">TT</a>
</div>

@endsection


