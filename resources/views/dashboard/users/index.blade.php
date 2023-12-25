@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Semua Pengguna</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive small">
        <a href="/dashboard/users/create" class="btn btn-success mb-3 ">Buat Akun Pengguna Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">isAdmin</th>
                    <th scope="col">Tanggal Bergabung</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>{{ $user->is_admin }}</td> --}}
                        <td>
                            @if ($user->is_admin)
                                <div class="d-inline badge bg-success "><i class="bi bi-check2"></i></div>
                            @else
                                <div class="d-inline badge bg-danger  "><i class="bi bi-x"></i></div>
                            @endif
                        </td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning  "><i
                                    class="bi bi-pencil-square"></i></a>

                            <form action="/dashboard/users/{{ $user->id }}" method="POST" class="d-inline ">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <button class="badge bg-danger border-0 "
                                    onclick="return confirm('Yakin Menghapus Data?')"><i
                                        class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
