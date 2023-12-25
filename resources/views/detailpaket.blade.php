@extends('layouts/main')

@section('container')
    <main class="m-0 p-0 ">
        <div
            style="background-color: white; overflow: hidden; display: flex; align-items: center; justify-content: center; ">
            <img src="{{ asset('img/melasti 2.jpg') }}" class="d-block img-fluid"
                style="object-fit: cover; width: 100%; height: 300px;" data-aos="fade-up" data-aos-duration="1500"
                alt="...">
        </div>

        <div class="card mt-3 ">
            <div class="card-header">
                Deskripsi Paket
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p style="text-align: justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi illo officia ullam quia corrupti modi
                        iusto eius consectetur quo, dignissimos aliquam qui et asperiores fugit necessitatibus harum!
                        Consectetur ab fugit atque nihil at error, doloribus illo aspernatur cupiditate vero totam
                        reprehenderit. Maiores, libero. Cum tempore recusandae nemo minus ad quod! Laudantium maiores maxime
                        incidunt ea dolorem voluptate magni, recusandae ad. Nam doloremque maiores aliquid veniam mollitia
                        at deserunt repudiandae cumque possimus itaque nesciunt magnam enim perspiciatis numquam
                        exercitationem cum atque qui dolores vel voluptatum, tenetur ratione dolor. Impedit dignissimos,
                        totam earum sed ea velit hic nostrum repellat possimus ipsam quasi. Aliquid dolores sequi nemo
                        corporis pariatur exercitationem, minus omnis ipsum aliquam doloribus obcaecati accusantium veniam
                        molestias hic corrupti quia enim? Ipsam, dolor eos possimus totam aliquid expedita praesentium omnis
                        sunt. Voluptatum saepe necessitatibus laboriosam tempore quos alias a temporibus, nemo mollitia
                        veniam. Fuga consequuntur omnis repellat hic, soluta maxime itaque atque, blanditiis perferendis
                        corporis consectetur possimus nemo eveniet illum, quod labore cum. Sunt, nobis esse? Enim,
                        excepturi? Magni repudiandae, assumenda dolores dicta vero inventore provident modi eveniet
                        praesentium nisi, optio quae deleniti ea nam eligendi animi quia aut quo? Blanditiis placeat culpa
                        distinctio esse voluptate quibusdam corrupti iste soluta earum.</p>
                </blockquote>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Include</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notes</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-3">
            <h5 class="card-header">UD. Rahayu</h5>
            <div class="card-body">
                <h5 class="card-title">Metatah Silver</h5>
                <h1>Rp 2500000</h1>
                <a href="#" class="btn btn-primary mt-2"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
            </div>
        </div>


        {{-- <div>
            <h1 class="mt-3">Paket Metatah</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/melasti 2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Metatah Gold</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-primary btn-sm">Detail Paket</button>
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
                            <button type="button" class="btn btn-primary btn-sm">Detail Paket</button>
                        </div>
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
                            <button type="button" class="btn btn-primary btn-sm">Detail Paket</button>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">UD. Bhuana</small>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

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
