@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <form class="user" method="POST" enctype="multipart/form-data" action="{{ url('admin/jadwal_dokter') }}">
        @csrf
        <div class="row">
        <div class="col-lg-6">
            <h3 class="mb-3">Tambah Data Jadwal Dokter</h3>
        @php
        $ar_hari = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
        @endphp
        <div class="form-group">
            <label for="">Hari</label>
            <select class="form-control text-center" name="hari">
                @foreach($ar_hari as $h)
                @if(old('hari') == $h)
                <option value="{{ $h }}" selected>{{ $h }}</option>   
                @else
                <option value="{{ $h }}">{{ $h }}</option>
                @endif
                @endforeach
              </select>
        </div>
        <div class="form-group">
            <label for="">Dokter</label>
            <select class="form-control text-center" name="dokter">
                @foreach($dokter as $d)
                @if(old('dokter') == $d->id)
                <option value="{{ $d->id }}" selected>{{ $d->name }}</option>   
                @else
                <option value="{{ $d->id }}">{{ $d->name }}</option>
                @endif
                @endforeach
              </select>
        </div>
        <div class="form-group">
            <label for="">Jam Mulai</label>
            <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" name="jam_mulai">
            @error('jam_mulai')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Jam Selesai</label>
            <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" name="jam_selesai">
            @error('jam_selesai')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group"><button type="submit" class="btn btn-primary btn-user px-5">Tambah</button></div>
        </div>
        </div>
    </form>
</div>
@endsection