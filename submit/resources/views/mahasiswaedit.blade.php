@extends('layout.main')

@section('title', 'mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">
                Edit Mahasiswa
            </h1>

        <form method="post" action="/mahasiswaeq/{{$mahasiswaeqmodel->id}}">
                @method('patch')
                {{csrf_field()}}
                <div class="form-group">
                  <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$mahasiswaeqmodel->nama}}">
                  @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="nim">nim</label>
                  <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{$mahasiswaeqmodel->nim}}">
                  @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$mahasiswaeqmodel->email}}">
                  @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="jurusan">jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{$mahasiswaeqmodel->jurusan}}">
                  @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" class="form-control" id="nim">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan">
                  </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
