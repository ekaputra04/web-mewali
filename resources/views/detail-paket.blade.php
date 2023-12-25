@extends('layouts/main')

@section('container')
    <main class="m-0 p-0 ">
        <div
            style="background-color: white; overflow: hidden; display: flex; align-items: center; justify-content: center; ">
            <img src="{{ asset('storage/' . $paket->image) }}" class="d-block img-fluid"
                style="object-fit: cover; width: 100%; height: 400px;" data-aos="fade-up" data-aos-duration="2000"
                alt="...">
        </div>

        <div class="card mt-3 " data-aos="fade-up" data-aos-duration="2000">
            <div class="card-header">
                Deskripsi Paket
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p style="text-align: justify">{{ $paket->deskripsi }}</p>
                </blockquote>
            </div>
        </div>

        <div class="row mt-3" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Include</h5>
                        <ul class="list-group list-group-flush">
                            @foreach ($includes as $include)
                                <li class="list-group-item">{{ $include }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notes</h5>
                        <ul class="list-group list-group-flush">
                            @foreach ($notes as $note)
                                <li class="list-group-item">{{ $note }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-3" data-aos="fade-up" data-aos-duration="2000">
            <h5 class="card-header">{{ $paket->usaha->name }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ $paket->nama_paket }}</h5>
                <h1>Rp. {{ number_format($paket->harga, 0, ',', '.') }}</h1>
                <a href="https://wa.me/{{ $paket->usaha->no_telepon }}" class="btn btn-success mt-2"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
            </div>
        </div>
    </main>
@endsection
