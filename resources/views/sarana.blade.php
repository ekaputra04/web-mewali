@extends('layouts/main')

@section('container')
    <main>
        <section class="py-5 text-center container">
            <div class="row " data-aos="fade-up" data-aos-duration="2000">
                <div class="col-md-6 mx-auto align-self-center ">
                    <h1 class="fw-light">Sarana Upacara</h1>
                    <p class="lead text-body-secondary">Website <b>Mewali</b> menyediakan sarana upacara yang lengkap dan
                        langsung terhubung ke penjual.</p>
                    <form action="/sarana" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Sarana..." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-success " type="submit">Cari</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 ">
                    @if ($saranas->count())
                        <div id="carouselExampleCaptions" class="carousel slide ">
                            <div class="carousel-indicators">
                                @foreach ($saranas->take(9) as $sarana)
                                    @if ($loop->iteration == 1)
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                    @else
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="{{ $loop->iteration - 1 }}"
                                            aria-label="Slide {{ $loop->iteration }}"></button>
                                    @endif
                                @endforeach
                            </div>

                            <div class="carousel-inner">
                                @foreach ($saranas->take(9) as $sarana)
                                    @if ($loop->iteration == 1)
                                        <div class="carousel-item active" style="height: 250px">
                                            @if (request()->is('saranas') && !request()->has('category') && !request()->has('author'))
                                                <div class="position-absolute  px-3 py-2 text-white fs-5"
                                                    style="background-color: rgba(4, 74, 4, 0.7); z-index:99;">Semua sarana
                                                </div>
                                            @elseif(request()->is('saranas') && request()->has('category'))
                                                <div class="position-absolute  px-3 py-2 text-white"
                                                    style="background-color: rgba(4, 74, 4, 0.7); z-index:99;"><a
                                                        href="/saranas?category={{ $sarana->category->slug }}"
                                                        class="text-decoration-none text-white fs-5  ">{{ $sarana->category->name }}</a>
                                                </div>
                                            @elseif(request()->is('saranas') && request()->has('author'))
                                                <div class="position-absolute  px-3 py-2 text-white"
                                                    style="background-color: rgba(4, 74, 4, 0.7); z-index:99;"><a
                                                        href="/saranas?category={{ $sarana->author->slug }}"
                                                        class="text-decoration-none text-white fs-5  ">sarana Oleh:
                                                        {{ $sarana->author->name }}</a>
                                                </div>
                                            @endif

                                            <img src="{{ asset('storage/' . $sarana->image) }}"
                                                class="d-block w-100 zoom-in-out" alt="..." data-aos="zoom-out"
                                                data-aos-duration="3000">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3>{{ $sarana->nama_sarana }}</h3>
                                            </div>
                                        </div>
                                    @else
                                        <div class="carousel-item" style="height: 250px;">
                                            <img src="{{ asset('storage/' . $sarana->image) }}"
                                                class="d-block w-100 zoom-in-out" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3>{{ $sarana->nama_sarana }}</h3>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @else
                        <p class="text-center fs-4 align-items-center mt-5 ">Sarana Tidak Tersedia.</p>
                    @endif
                </div>
            </div>
        </section>

        <div class="container px-0 mx-0 ">
            <div class="row my-0 px-0 mx-0 ">
                @foreach ($saranas as $sarana)
                    <div class="col-md-4 mx-0 col-sm-6 px-1 my-2 " data-aos="fade-up" data-aos-duration="2000">
                        <div class="card shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-5 col-sm-12 ">
                                    <div class="d-block "
                                        style="
                                        height: 250px;
                                        overflow: hidden;
                                        position: relative;
                                        background-image: url({{ asset('storage/' . $sarana->image) }});
                                        background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center;">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h6 class="card-title ">{{ $sarana->nama_sarana }}</h6>
                                        <p class="card-text">Rp. {{ number_format($sarana->harga, 0, ',', '.') }}</p>
                                        <p class="card-text">{{ Str::limit($sarana->deskripsi, 60, '...') }}</p>
                                        <div
                                            class="d-flex justify-content-evenly  align-items-center position-absolute bottom-0 mb-3 ">
                                            <form action="" method="get">
                                                <input type="hidden" name="sarana">
                                                <button type="button"
                                                    class="badge bg-success border-0 shadow-lg  detail-button"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                    data-sarana-nama="{{ $sarana->nama_sarana }}"
                                                    data-sarana-image="{{ asset('storage/' . $sarana->image) }}"
                                                    data-sarana-harga="Rp. {{ number_format($sarana->harga, 0, ',', '.') }}"
                                                    data-sarana-toko="{{ $sarana->nama_toko }}"
                                                    data-sarana-deskripsi="{{ $sarana->deskripsi }}"
                                                    data-sarana-no-telepon="{{ $sarana->usaha->no_telepon }}">
                                                    Detail
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3 ">
            {{ $saranas->links() }}
        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 " id="staticBackdropLabel">Detail Sarana</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="w-100 overflow-hidden text-center " height="250">
                            <img src="" alt="Mewali" style="max-width: 100%; max-height: 100%;"
                                class="gambar-sarana">
                        </div>
                        <p class="fw-medium fs-4 nama-sarana mt-2 ">
                        </p>
                        <p class="fw-semibold harga-sarana">
                        </p>
                        <p class="fw-normal nama-toko">
                        </p>
                        <hr>
                        <p style="text-align: justify;" class="deskripsi-sarana">
                        </p>
                        <p class="no-telepon" style="display: none;"></p> 

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <a href="https://wa.me/" class="btn btn-success wa-link" target="_blank">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let detailButtons = document.querySelectorAll('.detail-button');

            detailButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    let modalTitle = document.querySelector('.nama-sarana');
                    let modalImage = document.querySelector('.gambar-sarana');
                    let modalHarga = document.querySelector('.harga-sarana');
                    let modalToko = document.querySelector('.nama-toko');
                    let modalDeskripsi = document.querySelector('.deskripsi-sarana');
                    let modalNoTelepon = document.querySelector('.no-telepon'); // Tambahan

                    modalTitle.innerText = button.getAttribute('data-sarana-nama');
                    modalImage.src = button.getAttribute('data-sarana-image');
                    modalHarga.innerText = button.getAttribute('data-sarana-harga');
                    modalToko.innerText = button.getAttribute('data-sarana-toko');
                    modalDeskripsi.innerText = button.getAttribute('data-sarana-deskripsi');
                    modalNoTelepon.innerText = button.getAttribute(
                    'data-sarana-no-telepon'); // Tambahan
                    modalNoTelepon.style.display = 'none'; // Tambahan

                    let waLink = document.querySelector('.wa-link');
                    waLink.href = 'https://wa.me/' + modalNoTelepon.innerText; // Tambahan
                });
            });
        });
    </script>
@endsection
