@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Seluruh Komentar Artikel</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Artikel</th>
                    <th scope="col">Komentar</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ optional($comment->inPost)->title }}</td>
                        <td>{{ $comment->pesan }}</td>
                        <td>{{ $comment->nama_user }}</td>
                        <td>{{ $comment->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ optional($comment->inPost)->slug }}" class="badge bg-success  "><i
                                    class="bi bi-eye-fill"></i></a>

                            <form action="/dashboard/all-comments/{{ $comment->id }}" method="POST" class="d-inline ">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="id" value="{{ $comment->id }}">
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
