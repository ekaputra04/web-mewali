@extends('layouts/main')

@section('container')
    <main class="container mt-3 " id="home">
        <div class="p-0  mb-4 rounded align-items-center position-relative" id="thumbnail-home" data-aos="fade-up" data-aos-duration="1500"
            id="home">

            <div class="position-absolute col-lg-6 p-5 fs-3 align-self-center " style="z-index:99;">
                <h1 class="display-4 fst-italic text-white fw-bold">
                    Mewali
                </h1>
                <p class="lead my-3 text-white fw-semibold">
                    Platform Penyedia Informasi dan Sarana Upacara Agama Hindu Bali.
                </p>
            </div>

            <img src="https://d2mo2a5fvrklap.cloudfront.net/app/uploads/sites/2/2022/07/13183332/uluwatu-moments-balinesesonganddance-desktop-2.jpg" alt="" class="d-block w-100 zoom-in-out">
        </div>

        <div data-aos="fade-up" data-aos-duration="1500">
            <a href="/posts" class="text-decoration-none text-black ">
                <p class="fs-3 fw-medium ">
                    Artikel <i class="bi bi-arrow-right"></i>
                </p>
            </a>
        </div>

        <div class="container px-0 mx-0">
            <div class="row my-3 px-0 mx-0">
                @foreach ($posts as $post)
                    <div class="col-md-6 mx-0 px-1 " data-aos="fade-up" data-aos-duration="1500">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p>Oleh: <a href="/posts?author={{ $post->author->username }}"
                                                class="text-decoration-none">{{ $post->author->name }}</a>
                                        </p>
                                        <p class="card-text">{{ $post->excerpt }}</p>
                                        <p class="card-text"><small
                                                class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
                                        </p>
                                        <a href="/posts/{{ $post->slug }}"
                                            class="badge bg-success text-decoration-none ">Baca
                                            Selengkapnya...</a>
                                    </div>
                                </div>

                                <div class="col-md-6 rounded"
                                    style="height: 370px;
                                overflow: hidden;
                                position: relative;
                                background-image: url({{ asset('storage/' . $post->image) }});
                                background-repeat: no-repeat;
                                background-size: cover;
                                background-position: center;">
                                    <div class="position-absolute  px-3 py-2 text-white"
                                        style="background-color: rgba(4, 74, 4, 0.7)"><a
                                            href="/posts?category={{ $post->category->slug }}"
                                            class="text-decoration-none text-white">{{ $post->category->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500">
            <a href="/sarana" class="text-decoration-none text-black ">
                <p class="fs-3 fw-medium ">
                    Sarana Upacara <i class="bi bi-arrow-right"></i>
                </p>
            </a>
        </div>

        <div class="container px-0 mx-0">
            <div class="row my-3 px-0 mx-0">
                @foreach ($saranas as $sarana)
                    <div class="col-md-6 mx-0 px-1 " data-aos="fade-up" data-aos-duration="1500">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-6 rounded"
                                    style="height: 250px;
                                overflow: hidden;
                                position: relative;
                                background-image: url({{ asset('storage/' . $sarana->image) }});
                                background-repeat: no-repeat;
                                background-size: cover;
                                background-position: center;">
                                </div>

                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $sarana->nama_sarana }}</h5>
                                        <p class="card-text">Rp. {{ number_format($sarana->harga, 0, ',', '.') }}</p>
                                        <p class="card-text">{{ $sarana->deskripsi }}</p>
                                        <a href="/sarana" class="badge bg-success text-decoration-none ">Lihat
                                            Selengkapnya...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500">
            <a href="/paket" class="text-decoration-none text-black ">
                <p class="fs-3 fw-medium ">
                    Paket Upacara <i class="bi bi-arrow-right"></i>
                </p>
            </a>
        </div>

        <div class="container px-0 mx-0">
            <div class="row my-3 px-0 mx-0">
                @foreach ($saranas as $sarana)
                    <div class="col-md-6 mx-0 px-1 " data-aos="fade-up" data-aos-duration="1500">
                        <div class="card mb-3">
                            <div class="row g-0">                                
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $sarana->nama_sarana }}</h5>
                                        <p class="card-text">Rp. {{ number_format($sarana->harga, 0, ',', '.') }}</p>
                                        <p class="card-text">{{ $sarana->deskripsi }}</p>
                                        <a href="/sarana" class="badge bg-success text-decoration-none ">Lihat
                                            Selengkapnya...</a>
                                    </div>
                                </div>

                                <div class="col-md-6 rounded"
                                    style="height: 250px;
                                overflow: hidden;
                                position: relative;
                                background-image: url({{ asset('storage/' . $sarana->image) }});
                                background-repeat: no-repeat;
                                background-size: cover;
                                background-position: center;">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>
@endsection
