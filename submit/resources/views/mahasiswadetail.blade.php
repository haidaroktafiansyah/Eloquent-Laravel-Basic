@extends('layout.main')

@section('title', 'mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">
                Detail Mahasiswa
            </h1>

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$mahasiswaeqmodel->nama}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$mahasiswaeqmodel->nim}}</h6>
                  <p class="card-text">{{$mahasiswaeqmodel->email}}</p>
                  <p class="card-text">{{$mahasiswaeqmodel->jurusan}}</p>
                  <a href="{{$mahasiswaeqmodel->id}}/edit" class="btn btn-primary">Edit</a>
                <form action="{{$mahasiswaeqmodel->id}}" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                  <a href="{{ url('mahasiswaeq') }}" class="btn btn-success">Kembali</a>
                </div>
              </div>

        </div>
    </div>
</div>
@endsection
