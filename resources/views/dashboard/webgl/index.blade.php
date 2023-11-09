@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Latihan</h1>
</div>

<div class="card mb-3 mt-3">
  <img src="img/Saklar.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ayo kita nyalakan lampunya ya!</h5>
    <p class="card-text">ikuti ukuran lampu yang menyala </p>
    <a href="/webgl" class="btn btn-primary">Latihan Sekarang</a>
  </div>
</div>
<div class="card mb-3 mt-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ayo kita pakai sepatunya ya!</h5>
    <p class="card-text">Menyesuaikan ukuran sepatu</p>
    <a href="/webgl" class="btn btn-primary">Latihan Sekarang</a>
  </div>
</div>
<div class="card mb-3 mt-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bantu Ibu Belanja Buah yuk!</h5>
    <p class="card-text">Belanja sesuai jumlah yang diberikan</p>
    <a href="/webgl" class="btn btn-primary">Latihan Sekarang</a>
  </div>
</div>

@endsection