@extends('layout.main')

@section('title', 'biodata')

@section('container')
    <div class="container">
        <h1>Biodata</h1>
        <p>Nama : {{ $nama }}</p>
        <p>Materi Mengajar</p>
        <ul>
            @foreach($materi as $datamateri)
            <li>{{ $datamateri }}</li>
            @endforeach
        </ul>
    </div>

@endsection
