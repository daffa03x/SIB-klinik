@extends('landingpage.layouts.main')

@section('content')
    <section class="py-xxl-10 pb-0">
      <div class="bg-holder bg-size" style="background-image:url({!! asset('assets/img/gallery/hero-bg.png') !!});background-position:top center;background-size:cover;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row min-vh-xl-100 min-vh-xxl-25">
          <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100"
              src="{!! asset('assets/img/home.png') !!}" alt="hero-header" /></div>
          <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
            <h1 class="fw-light font-base fs-6 fs-xxl-7">Sistem Informasi <strong>Klinik
              </strong></h1>
            <p class="fs-1 mb-3">Memberikan kemudahan dalam pendaftaran pasien, melihat jadwal dokter, melihat dokter kami dan melihat poliklinik yang ada di klinik ini.</p><a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Lakukan Pendaftaran</a>
          </div>
        </div>
    </section>

    <section class="pb-0" id="about">

      <div class="container">
        <div class="row">
          <div class="col-12 py-3">
            <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-us.png);background-position:top center;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <h1 class="text-center">ABOUT US</h1>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <section class="py-5">
      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-bg.png);background-position:top center;background-size:contain;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="{!! asset('images/ilustrasi/ilustration2.png') !!}" alt="..." /></div>
          <div class="col-md-6 text-center text-md-start">
            <h2 class="fw-bold mb-4">Kami mengembangkan sistem pelayanan
               <br class="d-none d-sm-block" />kesehatan untuk Anda</h2>
            <p>Kami berpikir bahwa setiap orang harus memiliki akses <br class="d-none d-sm-block" />mudah ke perawatan kesehatan yang sangat baik. Tujuan kami <br class="d-none d-sm-block" />adalah membuat prosedur sesederhana mungkin bagi pasien kami dan <br class="d-none d-sm-block" />menawarkan perawatan di mana pun mereka berada — secara langsung atau sesuai kenyamanan mereka. </p>
            <div class="py-3">
              <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Learn more </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">

      <div class="container">
        <div class="row">
          <div class="col-12 py-3">
            <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/bg-departments.png);background-position:top center;background-size:contain;">
            </div>
        <h1 class="text-center mt-5">OUR DEPARTMENTS</h1>
          </div>
        </div>
        <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly mt-4 mb-5">
          <div class="col-auto col-md-4 col-lg-auto text-xl-start">
            <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/neurology.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/img/icons/neurology.svg" alt="..." />
                  <p class="fs-1 fs-xxl-2 text-center">Neurology</p>
                </a></div>
            </div>
          </div>
          <div class="col-auto col-md-4 col-lg-auto text-xl-start">
            <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/eye-care.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/img/icons/eye-care.svg" alt="..." />
                  <p class="fs-1 fs-xxl-2 text-center">Eye care</p>
                </a></div>
            </div>
          </div>
          <div class="col-auto col-md-4 col-lg-auto text-xl-start">
            <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/cardiac.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/img/icons/cardiac.svg" alt="..." />
                  <p class="fs-1 fs-xxl-2 text-center">Cardiac care</p>
                </a></div>
            </div>
          </div>
          <div class="col-auto col-md-4 col-lg-auto text-xl-start">
            <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/heart.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/img/icons/heart.svg" alt="..." />
                  <p class="fs-1 fs-xxl-2 text-center">Heart care</p>
                </a></div>
            </div>
          </div>
          <div class="col-auto col-md-4 col-lg-auto text-xl-start">
            <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/osteoporosis.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/img/icons/osteoporosis.svg" alt="..." />
                  <p class="fs-1 fs-xxl-2 text-center">Osteoporosis</p>
                </a></div>
            </div>
          </div>
          <div class="col-auto col-md-4 col-lg-auto text-xl-start">
            <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/ent.png" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/img/icons/ent.svg" alt="..." />
                  <p class="fs-1 fs-xxl-2 text-center">ENT</p>
                </a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
      @endsection