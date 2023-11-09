@extends('layouts.main')

@section('container')

{{-- Top Heroes --}}
    <div class="container col-xxl-8 px-4 py-5">
        {{-- Top Heroes --}}
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="/img/Anak Bermain.png" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Selamat Datang di Calculico</h1>
            <p class="lead">Tempat belajar-mengajar untuk anak usia pra-sekolah dengan risiko Diskalkulia</p>
          </div>
        </div>
    </div>

{{-- Featured --}}
      <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">Kerjasama</h2>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 g-4 py-5">
          <div class="col d-flex align-items-start">
            <img src="/img/binus.png" class="d-block mx-lg-auto img-fluid"  loading="lazy">
            {{-- <div class="ms-2">
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Binus University</h3>
              </div> --}}
          </div>
          <div class="col d-flex align-items-start">
            <img src="/img/nbp.png" class="d-block mx-lg-auto img-fluid"  loading="lazy">
            {{-- <div class="ms-2">
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">NBP Center</h3>
              </div> --}}
          </div>
          <div class="col d-flex align-items-start">
            <img src="/img/indigrow.png" class="d-block mx-lg-auto img-fluid"  loading="lazy">
            {{-- <div class="ms-4">
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Indigrow Child Development</h3>
              </div> --}}
          </div>
          
        </div>
      </div>

{{-- About --}}
<div class="px-4 pt-5 my-5 text-center border-top">
    <h1 class="display-4 fw-bold text-body-emphasis">APA ITU CALCULICO?</h1>
    <div class="col-lg-9 mx-auto">
      <p class="mb-4 fs-16px">Calculico adalah alat bantu belajar-mengajar numerasi berbasis web untuk anak usia pra-sekolah dengan risiko diskalkulia. Di dalam website ini akan disuguhkan materi-materi numerasi dari dasar seperti pengenalan angka hingga anak tidak merasa kesulitan saat dihadapkan dengan angka dan matematika. Kami berharap web ini memudahkan para pendamping/orangtua dan melengkapi aplikasi yang sudah ada.</p>
    </div>
    <div class="row align-items-center">
      <div class="container px-5">
        <img src="/img/What.png" class="d-block mx-lg-auto img-fluid" width="300" height="200" loading="lazy">
      </div>
    </div>
  </div>

{{-- Login --}}
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Mulai Sekarang</h1>
        <p class="col-lg-10 fs-4">Login terlebih dahulu di sini, apabila belum memiliki akun klik tombol register di bawah ini</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="/login" method="POST">
            @csrf

            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          <hr class="my-4">
          <small class="text-body-secondary">By clicking Login, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>

{{-- Footer --}}
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>
  
      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
  
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
      </ul>
    </footer>
  </div>
@endsection
        
