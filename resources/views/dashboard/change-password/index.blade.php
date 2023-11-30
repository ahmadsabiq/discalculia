@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Ganti Password</h1>
</div>

@if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

<form method="POST" action="/dashboard/ganti-password">
    @csrf
  <div class="mb-3">
    <label for="current_password" class="form-label">Password Lama</label>
    <input type="password" name="current_password" class="form-control @error ('current_password') is-invalid @enderror" id="current_password" required>
    @error('current_password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="new_password" class="form-label">Password Baru</label>
    <input type="password" name="new_password" class="form-control @error ('new_password') is-invalid @enderror" id="new_password" required>
    @error('new_password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
    <input type="password" name="password_confirmation" class="form-control @error ('password_confirmation') is-invalid @enderror" id="password_confirmation" required>
    @error('password_confirmation')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action=""></form>


@endsection