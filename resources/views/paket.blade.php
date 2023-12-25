@extends('layouts/main')

@section('container')
    <main class="m-0 p-0 ">
        {{-- <div style="background-color: white; overflow: hidden; display: flex; align-items: center; justify-content: center; ">
            <img src="{{ asset('img/melasti 2.jpg') }}" class="d-block img-fluid" style="object-fit: cover; width: 100%; height: 300px;" data-aos="fade-up" data-aos-duration="1500" alt="...">
        </div> --}}

        <div>
            <h1 class="mt-3">Paket Metatah</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/melasti 2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Metatah Gold</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                           <a href="/detailpaket"><button type="button" class="btn btn-primary btn-sm">Detail Paket</button></a> 
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">UD. Rahayu</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/melasti 2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Metatah Silver</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                                <a href="/detailpaket"><button type="button" class="btn btn-primary btn-sm">Detail Paket</button></a>                         </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">UD. Berkah Sejati</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/melasti 2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Metatah Bronze</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                                <a href="/detailpaket"><button type="button" class="btn btn-primary btn-sm">Detail Paket</button></a>                         </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">UD. Bhuana</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row container ">
            <div
                style="width: 1000px; height: 100px
                                    overflow: hidden;
                                    position: relative;
                                    background-image: url({{ asset('img/melasti 2.jpg') }});
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    background-position: center; z-index:99;">
                <div class="text-white p-3 z-3 " style="position: absolute; margin-bottom:10px;">
                    <h5 class="card-title fw-medium "><a href="/posts/" class="text-decoration-none text-white ">Metatah</a>
                    </h5>
                </div>
            </div>
        </div> --}}

        {{-- <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Thumbnail</title>
                <image href="{{ asset('img/melasti 2.jpg') }}" class="d-block" style="margin-top: -100px;" alt="...">
            </svg>
        </div> --}}


    </main>
@endsection
