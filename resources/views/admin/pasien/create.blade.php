@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ url('admin/pasien') }}">
        @csrf
        <div class="col-lg-6">
            <h3 class="mb-3">Tambah Data Pasien</h3>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail" name="email"
                placeholder="Email Address">
        </div>
        <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="password" name="password" class="form-control"
                    id="exampleInputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="text" class="form-control" id="exampleFirstName" name="nama"
                    placeholder="Nama">
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail" name="HP"
                placeholder="No Hp">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" id="exampleInputEmail" name="tgl_lahir">
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="">Jenis Kelamin</label><br>
                <div class="form-check d-inline">
                    <input class="form-check-input" type="radio" name="jk" value="laki-laki"
                        id="flexRadioDefault1">
                    <label class="form-check-label mr-4" for="flexRadioDefault1">
                        Laki - Laki
                    </label>
                </div>
                <div class="form-check d-inline">
                    <input class="form-check-input" type="radio" name="jk" value="perempuan"
                        id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Perempuan
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-user px-5">Tambah</button>
        </div>
    </form>
</div>
@endsection