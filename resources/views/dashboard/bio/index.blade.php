@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Biodata</h1>
</div>

<form method="POST" {{-- action="/dashboard/biodata" --}}>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Anak</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3">
    <label for="usia" class="form-label">Tanggal Lahir </label>
    <input type="date" class="form-control" id="usia" name="usia">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Nama Ayah/Bunda</label>
    <input type="number" class="form-control" id="status" name="status">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action=""></form>


@endsection