@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Usaha</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive small">
        <a href="/dashboard/usaha/create" class="btn btn-success mb-3 ">Tambahkan Usaha Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Usaha</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usahas as $usaha)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $usaha->name }}</td>
                        <td>{{ $usaha->email }}</td>
                        <td>{{ $usaha->no_telepon }}</td>
                        <td>{{ $usaha->alamat }}</td>
                        <td>
                            <a href="/dashboard/usaha/{{ $usaha->slug }}/edit" class="badge bg-warning  "><i
                                    class="bi bi-pencil-square"></i></a>
                                    
                            <form action="/dashboard/usaha/{{ $usaha->slug }}" method="POST" class="d-inline ">
                                @method('delete')
                                @csrf
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
