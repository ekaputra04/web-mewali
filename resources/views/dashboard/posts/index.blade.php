@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Artikel Saya</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive small">
        <a href="/dashboard/posts/create" class="btn btn-success mb-3 ">Buat Artikel Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-success  "><i
                                    class="bi bi-eye-fill"></i></a>

                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning  "><i
                                    class="bi bi-pencil-square"></i></a>

                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline ">
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
