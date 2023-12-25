@extends('layouts/main')

@section('container')
    <main class="m-0 p-0 ">
        <h1 class="mt-3" data-aos="fade-up" data-aos-duration="2000">{{ $title }}</h1>

        <div class="row  g-4 mt-2">
            @foreach ($pakets as $paket)
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card ">
                        <img src="{{ asset('storage/' . $paket->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $paket->nama_paket }}</h5>
                            <p class="card-text">{{ Str::limit($paket->deskripsi, 100, '...') }}</p>
                            <a href="/paket/{{ $paket->slug }}"><button type="button"
                                    class="btn btn-success btn-sm">Detail
                                    Paket</button></a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">{{ $paket->usaha->name }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5 " data-aos="fade-up" data-aos-duration="2000">
            {{ $pakets->links() }}
        </div>
    </main>
@endsection
