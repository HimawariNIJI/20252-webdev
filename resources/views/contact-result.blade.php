@extends('base.base')

@section('title', 'Contact Us Result')

@section('content')
    <h2>Hasil Input</h2>
    <p>Nama: {{ session('data.name') }}</p>
    <p>Email: {{ session('data.email') }}</p>
    <p>Package: {{ session('data.package') }}</p>
    <p>Message: {{ session('data.message') }}</p>
@endsection