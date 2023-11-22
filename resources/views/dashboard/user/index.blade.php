@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">User</h1>
</div>

<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Username</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href="/dashboard/user/{{ $user->id }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
            <a href="/dashboard/user/{{ $user->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
            <a href="/dashboard/user/{{ $user->id }}" class="btn btn-danger"><i class="bi bi-backspace"></i>
            </a>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection