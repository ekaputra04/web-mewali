@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $sarana['title'] }}</h2>

                <a href="/dashboard/sarana" class="btn btn-success  "><i class="bi bi-arrow-left"></i> Kembali ke Daftar
                    Sarana</a>
                <a href="/dashboard/sarana/{{ $sarana->slug }}/edit" class="btn btn-warning  "><i
                        class="bi bi-pencil-square"></i> Edit</a>
                <form action="/dashboard/sarana/{{ $sarana->slug }}" method="POST" class="d-inline ">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm('Yakin Menghapus Data?')"><i
                            class="bi bi-x-circle"></i> Delete</button>
                </form>

                <br><br>

                <div class="card mb-3">
                    <div
                        style="height: 300px;
                    overflow: hidden;
                    position: relative;
                    background-image: url({{ asset('storage/' . $sarana->image) }});
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;">

                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Subjek</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Nama Sarana
                                    </td>
                                    <td>
                                        {{ $sarana->nama_sarana }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nama Toko
                                    </td>
                                    <td>
                                        {{ $sarana->nama_toko }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nomor Telepon
                                    </td>
                                    <td>
                                        {{ $sarana->no_telepon }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Harga
                                    </td>
                                    <td>
                                        Rp. {{ number_format($sarana->harga, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Deskripsi
                                    </td>
                                    <td>
                                        {{ $sarana->deskripsi }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
