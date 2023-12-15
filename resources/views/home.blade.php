@extends('layouts/main')

@section('container')
    
    <main class="container mt-4 ">
        <div class="p-0  mb-4 rounded align-items-end" id="thumbnail-home" data-aos="fade-up" data-aos-duration="1500"
            id="home">
            <div class="col-lg-6 mt-5 p-5 fs-3">
                <h1 class="display-4 fst-italic text-white fw-bold">
                    Mewali
                </h1>
                <p class="lead my-3 text-white fw-semibold">
                    Platform Penyedia Informasi dan Sarana Upacara Agama Hindu Bali.
                </p>
                <p class="lead mb-0">
                    <a href="#" class="text-white text-decoration-none ">Jelajahi Website...</a>
                </p>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500">
            <a href="/posts" class="text-decoration-none text-black ">
                <p class="fs-3 fw-medium ">
                    Post
                </p>
            </a>
        </div>

        <div class="row mb-2" data-aos="fade-up" data-aos-duration="1500">
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                        <div class="col p-4 d-flex flex-column position-static w-50 ">
                            <strong
                                class="d-inline-block mb-2 text-primary-emphasis">Tes Kategori</strong>
                            <h3 class="mb-0">Tes Judul</h3>
                            <div class="my-1 text-body-secondary">Tes Tanggal</div>
                            <p class="card-text mb-auto">
                                Upacara Mepandes merupakan salah satu ritus sakral dalam agama Hindu di Bali yang menandai
                                inisiasi atau pembaptisan anak-anak dalam kepercayaan Hindu.
                            </p>
                            <a href="/post" class="icon-link gap-1 icon-link-hover stretched-link">
                                Lanjutkan Membaca
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="col-auto d-lg-block w-50 h-100 overflow-hidden ">
                            <img src="https://source.unsplash.com/500x750?balinese" alt="Balinese"
                                class="overflow-hidden img-fluid ">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                        <div class="col p-4 d-flex flex-column position-static w-50 ">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">Manusa Yadnya</strong>
                            <h3 class="mb-0">Upacara Mepandes</h3>
                            <div class="my-1 text-body-secondary">Nov 12</div>
                            <p class="card-text mb-auto">
                                Upacara Mepandes merupakan salah satu ritus sakral dalam agama Hindu di Bali yang menandai
                                inisiasi atau pembaptisan anak-anak dalam kepercayaan Hindu.
                            </p>
                            <a href="/post" class="icon-link gap-1 icon-link-hover stretched-link">
                                Lanjutkan Membaca
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="col-auto d-lg-block w-50 h-100 overflow-hidden ">
                            <img src="https://source.unsplash.com/500x750?balinese" alt="Balinese"
                                class="overflow-hidden img-fluid ">
                        </div>
                    </div>
                </div>

        </div>

        <div data-aos="fade-up" data-aos-duration="1500">
            <a href="/posts" class="text-decoration-none text-black ">
                <p class="fs-3 fw-medium ">
                    Sarana Upacara
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </span>
                </p>
            </a>
        </div>

        <div class="row mb-2" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Manusa Yadnya</strong>
                        <h3 class="mb-0">Banten Otonan</h3>
                        <div class="my-1 text-body-secondary">UD Yadnya Kerthi</div>
                        <p class="card-text mb-auto">
                            Otonan asal katanya adalah “pawetuan”, yaitu peringatan hari lahir, di mana menurut tradisi
                            agama Hindu di Bali otonan didasarkan pada Sapta wara, Panca wara, dan Wuku. Berbeda dengan hari
                            ulang tahun pada umumnya. Dalam kalender Bali, otonan dirayakan tiap 210 hari (setiap 6 bulan
                            Bali).
                        </p>
                        <a href="/sarana" class="icon-link gap-1 icon-link-hover stretched-link">
                            Cek Detail Sarana
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-lg-block w-50 h-100 overflow-hidden ">
                        <img src="https://source.unsplash.com/500x750?balinese" alt="Balinese"
                            class="overflow-hidden img-fluid ">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Manusa Yadnya</strong>
                        <h3 class="mb-0">Banten Otonan</h3>
                        <div class="my-1 text-body-secondary">UD Yadnya Kerthi</div>
                        <p class="card-text mb-auto">
                            Otonan asal katanya adalah “pawetuan”, yaitu peringatan hari lahir, di mana menurut tradisi
                            agama Hindu di Bali otonan didasarkan pada Sapta wara, Panca wara, dan Wuku. Berbeda dengan hari
                            ulang tahun pada umumnya. Dalam kalender Bali, otonan dirayakan tiap 210 hari (setiap 6 bulan
                            Bali).
                        </p>
                        <a href="/sarana" class="icon-link gap-1 icon-link-hover stretched-link">
                            Cek Detail Sarana
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-lg-block w-50 h-100 overflow-hidden ">
                        <img src="https://source.unsplash.com/500x750?balinese" alt="Balinese"
                            class="overflow-hidden img-fluid ">
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500">
            <a href="/posts" class="text-decoration-none text-black ">
                <p class="fs-3 fw-medium ">
                    Paket Upacara
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </span>
                </p>
            </a>
        </div>

        <div class="row mb-2" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Manusa Yadnya</strong>
                        <h3 class="mb-0">Paket Mepandes</h3>
                        <div class="my-1 text-body-secondary">Taman Prakerti Bhuana</div>
                        <p class="card-text mb-auto">
                            Gedung serbaguna megah dengan arsitektur bali modern yang telah dilengkapi dengan beragam
                            fasilitas pendukung seperti lighting, dekorasi, sound system dan projector screen besar untuk
                            mendukung resepsi pernikahan yang mewah, maupun beragam event lainnya.
                        </p>
                        <a href="/paket" class="icon-link gap-1 icon-link-hover stretched-link">
                            Cek Detail Paket
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-lg-block w-50 h-100 overflow-hidden ">
                        <img src="https://source.unsplash.com/500x750?balinese" alt="Balinese"
                            class="overflow-hidden img-fluid ">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Manusa Yadnya</strong>
                        <h3 class="mb-0">Paket Mepandes</h3>
                        <div class="my-1 text-body-secondary">Taman Prakerti Bhuana</div>
                        <p class="card-text mb-auto">
                            Gedung serbaguna megah dengan arsitektur bali modern yang telah dilengkapi dengan beragam
                            fasilitas pendukung seperti lighting, dekorasi, sound system dan projector screen besar untuk
                            mendukung resepsi pernikahan yang mewah, maupun beragam event lainnya.
                        </p>
                        <a href="/paket" class="icon-link gap-1 icon-link-hover stretched-link">
                            Cek Detail Paket
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-lg-block w-50 h-100 overflow-hidden ">
                        <img src="https://source.unsplash.com/500x750?balinese" alt="Balinese"
                            class="overflow-hidden img-fluid ">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
