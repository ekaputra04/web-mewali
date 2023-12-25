@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $paket['title'] }}</h2>

                <a href="/dashboard/paket" class="btn btn-success  "><i class="bi bi-arrow-left"></i> Kembali ke Daftar
                    Paket</a>
                <a href="/dashboard/paket/{{ $paket->slug }}/edit" class="btn btn-warning  "><i
                        class="bi bi-pencil-square"></i> Edit</a>

                <form action="/dashboard/paket/{{ $paket->slug }}" method="POST" class="d-inline ">
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
                    background-image: url({{ asset('storage/' . $paket->image) }});
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
                                        Nama paket
                                    </td>
                                    <td>
                                        {{ $paket->nama_paket }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nama Toko
                                    </td>
                                    <td>
                                        {{ $paket->usaha->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nomor Telepon
                                    </td>
                                    <td>
                                        {{ $paket->usaha->no_telepon }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Harga
                                    </td>
                                    <td>
                                        Rp. {{ number_format($paket->harga, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Deskripsi
                                    </td>
                                    <td>
                                        {{ $paket->deskripsi }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Includes
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach ($includes as $include)
                                            <li>{{ $include }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Notes
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach ($notes as $note)
                                            <li>{{ $note }}</li>
                                            @endforeach
                                        </ul>
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
