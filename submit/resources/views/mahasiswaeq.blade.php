@extends('layout.main')

@section('title', 'mahasiswa')

@section('container')
<div class="container mb-4">
    <div class="row">
        <h1 class="mt-3">
            Daftar Mahasiswa
        </h1>
        <br>
        <div class="mt-2 mb-2">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="col-12">

            <a href="tambahmahasiswa" class="btn btn-info mt-3 mb-3">tambah</a>


            @foreach($mahasiswa as $mahasiswa)
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$mahasiswa->nama}}
                  <a href="/mahasiswaeq/{{$mahasiswa->id}}" class="badge badge-info">detail</a>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection
