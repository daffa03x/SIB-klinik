@extends('landingpage.layouts.main')
@section('content')
<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url({!! asset('vendor/assets/img/gallery/hero-bg.png') !!});background-position:top center;background-size:cover;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <h1 class="text-gray-800 text-center">Detail</h1>
        <div class="row">
            <div class="h3 text-between">No Antrian ke - {{ $data->no_antrian }}</div>
            <div class="h3">Tanggal Daftar : {{ $data->tgl_pendaftaran }}</div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-5">
                <div class="card mb-5">
                    <img style="max-height: 350px" class="card-img-top img-thumbnail" src="{{ asset($data->image_poli) }}" alt="">
                    <div class="card-body">
                        <div class="h4 card-text">Poliklinik : {{ $data->poli }}</div>
                        <div class="card-text">Deskripsi : {{ $data->deskripsi }}</div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <img style="max-height: 350px" class="card-img-top img-thumbnail" src="{{ asset($data->image_dokter) }}" alt="">
                    <div class="card-body">
                        <div class="h4 card-text">Dokter : {{ $data->dokter }}</div>
                        <div class="card-text">Jadwal Praktek : {{ $data->jam_mulai }} - {{ $data->jam_selesai }}</div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
@endsection