@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Sarana</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive small">
        <a href="/dashboard/sarana/create" class="btn btn-success mb-3 ">Tambahkan Sarana Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Sarana</th>
                    <th scope="col">Nama Toko</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sarana as $srn)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $srn->nama_sarana }}</td>
                        <td>{{ $srn->usaha->name }}</td>
                        <td>{{ $srn->deskripsi }}</td>
                        <td>Rp. {{ number_format($srn->harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="/dashboard/sarana/{{ $srn->slug }}" class="badge bg-success  "><i
                                    class="bi bi-eye-fill"></i></a>

                            <a href="/dashboard/sarana/{{ $srn->slug }}/edit" class="badge bg-warning  "><i
                                    class="bi bi-pencil-square"></i></a>
                                    
                            <form action="/dashboard/sarana/{{ $srn->slug }}" method="POST" class="d-inline ">
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
