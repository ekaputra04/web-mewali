@extends('layouts/main')

@section('container')
    <main class="container p-0 mt-3 ">
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="20em" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                        <image href="{{ asset('img/melasti 2.jpg') }}" width="100%" height="55em" style="margin-top: -50px;"/>
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Upacara Melasti</h1>
                            <!-- <p class="opacity-75">
                                Some representative placeholder content for the first slide of
                                the carousel.
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">Sign up today</a>
                            </p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="20em" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                        <image href="{{ asset('img/mepandes 2.jpg') }}" width="100%" height="100%" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Mepandes</h1>
                            <!-- <p>
                                Some representative placeholder content for the second slide
                                of the carousel.
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="20em" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                        <image href="{{ asset('img/pawiwahan 2.jpg') }}" width="100%" height="100%" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Pawiwahan</h1>
                            <!-- <p>
                                Some representative placeholder content for the third slide of
                                this carousel.
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">Browse gallery</a>
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Marketing messaging and featurettes
    ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <!-- <div class="container marketing">
            
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>
                        Some representative placeholder content for the three columns of
                        text below the carousel. This is the first column.
                    </p>
                    <p>
                        <a class="btn btn-secondary" href="#">View details &raquo;</a>
                    </p>
                </div>
               
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>
                        Another exciting bit of representative placeholder content. This
                        time, we've moved on to the second column.
                    </p>
                    <p>
                        <a class="btn btn-secondary" href="#">View details &raquo;</a>
                    </p>
                </div>
               
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>
                        And lastly this, the third column of representative placeholder
                        content.
                    </p>
                    <p>
                        <a class="btn btn-secondary" href="#">View details &raquo;</a>
                    </p>
                </div>
               
            </div> -->
            

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">
                        Tradisi Ritual Pembakaran Jenazah di Bali
                    </h2>
                    <span class="text-body-secondary">13 Desember 2023</span>
                    <p class="lead">
                        Ngaben adalah upacara pembakaran jenazah umat Hindu di Bali. Upacara ngaben merupakan suatu ritual yang dilaksanakan untuk mengembalikan roh leluhur ke tempat asalnya.
                        Ngaben dalam Bahasa Bali berkonotasi halus yang sering disebut palebon.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="#">Baca Selengkapnya</a>
                    </p>
                </div>
                <div class="col-md-5">
                    <img width="500" height="250" src="{{ asset('img/ngaben.jpg') }}" alt="Logo Mewali">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
                        <image href="{{ asset('img/ngaben.jpg') }}" width="100%" height="20em" />
                    </svg> -->
                </div>

            </div>

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">
                        Tradisi Penyucian Diri Menjelang Hari Raya Nyepi
                    </h2>
                    <span class="text-body-secondary">13 Desember 2023</span>
                    <p class="lead">
                        Upacara Melasti merupakan salah satu dari rangkaian perayaan Nyepi yang berlangsung sebelum hari raya Nyepi.
                        Upacara ini bisa diartikan sebagai ritual menghanyutkan kotoran alam menggunakan air kehidupan.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="#">Baca Selengkapnya</a>
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                <img width="500" height="250" src="{{ asset('img/melasti.jpg') }}" alt="Logo Mewali">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
                        <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">
                            500x500
                        </text>
                    </svg> -->
                </div>
            </div>

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">
                        Upacara Untuk Meningkatkan Ketajaman Pikiran
                    </h2>
                    <span class="text-body-secondary">13 Desember 2023</span>
                    <p class="lead">
                        Tumpek landep merupakan hari raya pemujaan kepada Ida Bhatara Sang Hyang Siwa Pasupati sebagai dewanya taksu. Hari raya Tumpek Landep sendiri merupakan rentetan setelah hari raya saraswati.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="#">Baca Selengkapnya</a>
                    </p>
                </div>
                <div class="col-md-5">
                <img width="500" height="250" src="{{ asset('img/tumpek landep.jpg') }}" alt="Logo Mewali">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
                        <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">
                            500x500
                        </text>
                    </svg> -->
                </div>
            </div>

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">
                        Upacara Potong Gigi di Bali
                    </h2>
                    <span class="text-body-secondary">13 Desember 2023</span>
                    <p class="lead">
                        Metatah atau Mepandes atau Mesangih adalah suatu prosesi keagamaan yang dilaksanakan sebagai penanda peralihan ke suatu tahapan kehidupan yang lebih berbahaya.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="#">Baca Selengkapnya</a>
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                <img width="500" height="250" src="{{ asset('img/mepandes.jpg') }}" alt="Logo Mewali">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
                        <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">
                            500x500
                        </text>
                    </svg> -->
                </div>
            </div>

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">
                        Tradisi Pernikahan Adat Hindu Di Bali
                    </h2>
                    <span class="text-body-secondary">13 Desember 2023</span>
                    <p class="lead">
                    Dalam umat Hindu Bali, dikenal istilah pawiwahan. Pawiwahan sejatinya merupakan ikatan suci dan komitmen sepanjang hidup menjadi suami dan istri,
                    serta merupakan ikatan sosial yang paling kuat yang ada antara laki-laki dan perempuan.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="#">Baca Selengkapnya</a>
                    </p>
                </div>
                <div class="col-md-5">
                <img width="500" height="250" src="{{ asset('img/pawiwahan.jpg') }}" alt="Logo Mewali">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
                        <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">
                            500x500
                        </text>
                    </svg> -->
                </div>
            </div>

            <hr class="featurette-divider" />

            <!-- /END THE FEATURETTES -->
        </div>
        <!-- /.container -->
    </main>
@endsection
