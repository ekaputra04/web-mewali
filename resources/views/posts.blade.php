@extends('layouts/main')

@section('container')
    <main class="container p-0 mt-3 ">
        <div id="carouselExampleCaptions" class="carousel slide">

            <div class="carousel-indicators">
                @foreach ($posts->take(8) as $post)
                    @if ($loop->iteration == 1)
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    @else
                        <button type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="{{ $loop->iteration - 1 }}"
                            aria-label="Slide {{ $loop->iteration }}"></button>
                    @endif
                @endforeach
            </div>

            <div class="carousel-inner">
                @foreach ($posts->take(8) as $post)
                    @if ($loop->iteration == 1)
                        <div class="carousel-item active" style="height: 500px">
                            @if (request()->is('posts') && !request()->has('category') && !request()->has('author'))
                                <div class="position-absolute  px-3 py-2 text-white fs-5"
                                    style="background-color: rgba(4, 74, 4, 0.7); z-index:99;">Semua Post
                                </div>
                            @elseif(request()->is('posts') && request()->has('category'))
                                <div class="position-absolute  px-3 py-2 text-white"
                                    style="background-color: rgba(4, 74, 4, 0.7); z-index:99;"><a
                                        href="/posts?category={{ $post->category->slug }}"
                                        class="text-decoration-none text-white fs-5  ">{{ $post->category->name }}</a>
                                </div>
                            @elseif(request()->is('posts') && request()->has('author'))
                                <div class="position-absolute  px-3 py-2 text-white"
                                    style="background-color: rgba(4, 74, 4, 0.7); z-index:99;"><a
                                        href="/posts?category={{ $post->author->slug }}"
                                        class="text-decoration-none text-white fs-5  ">Post Oleh: {{ $post->author->name }}</a>
                                </div>
                            @endif

                            <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100 zoom-in-out"
                                alt="..." style="margin-top: -100px;" data-aos="zoom-out" data-aos-duration="3000">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>{{ $post->title }}</h3>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item" style="height: 500px;">
                            @if (request()->is('posts') && !request()->has('category') && !request()->has('author'))
                                <div class="position-absolute  px-3 py-2 text-white fs-5"
                                    style="background-color: rgba(4, 74, 4, 0.7); z-index:99;">Semua Post
                                </div>
                            @elseif(request()->is('posts') && request()->has('category'))
                                <div class="position-absolute  px-3 py-2 text-white"
                                    style="background-color: rgba(4, 74, 4, 0.7); z-index:99;"><a
                                        href="/posts?category={{ $post->category->slug }}"
                                        class="text-decoration-none text-white fs-5  ">{{ $post->category->name }}</a>
                                </div>
                            @elseif(request()->is('posts') && request()->has('author'))
                                <div class="position-absolute  px-3 py-2 text-white"
                                    style="background-color: rgba(4, 74, 4, 0.7); z-index:99;"><a
                                        href="/posts?category={{ $post->author->slug }}"
                                        class="text-decoration-none text-white fs-5  ">Post Oleh: {{ $post->author->name }}</a>
                                </div>
                            @endif
                            <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100 zoom-in-out"
                                alt="..." style="margin-top: -100px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>{{ $post->title }}</h3>
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

        @if ($posts->count())
            <div class="container px-0 mx-0 my-3 ">
                <div class="row my-3 px-0 mx-0 my-3 py-3 ">
                    <div class="col-md-3 mx-0 px-1 col-sm-6 my-sm-2 card-kecil">
                        <div
                            style="height: 300px;
                                        overflow: hidden;
                                        position: relative;
                                        background-image: url({{ asset('storage/' . $posts[0]->image) }});
                                        background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center;">
                            <div class="text-white p-3 z-3 " style="position: absolute; margin-bottom:10px;">
                                <h5 class="card-title fw-medium "><a href="/posts/{{ $posts[0]->slug }}"
                                        class="text-decoration-none text-white ">{{ $posts[0]->title }}</a></h5>
                                <p class="card-text my-1"><a href="/posts?category={{ $posts[0]->category->slug }}"
                                        class="text-decoration-none text-white">{{ $posts[0]->category->name }}</a>
                                </p>
                                <p class="card-text my-1">Oleh: <a href="/posts?author={{ $posts[0]->author->username }}"
                                        class="text-decoration-none text-white">{{ $posts[0]->author->name }}</a>
                                </p>
                                <p class="card-text"><small>{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                            </div>
                        </div>
                    </div>

                    @if (isset($posts[1]))
                        <div class="col-md-3 mx-0 px-1 col-sm-6 my-sm-2 card-kecil">
                            <div
                                style="height: 300px;
                                        overflow: hidden;
                                        position: relative;
                                        background-image: url({{ asset('storage/' . $posts[1]->image) }});
                                        background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center;">
                                <div class="text-white p-3 z-3 " style="position: absolute; margin-bottom:10px;">
                                    <h5 class="card-title fw-medium "><a href="/posts/{{ $posts[1]->slug }}"
                                            class="text-decoration-none text-white ">{{ $posts[1]->title }}</a></h5>
                                    <p class="card-text my-1"><a href="/posts?category={{ $posts[1]->category->slug }}"
                                            class="text-decoration-none text-white">{{ $posts[1]->category->name }}</a>
                                    </p>
                                    <p class="card-text my-1">Oleh: <a
                                            href="/posts?author={{ $posts[1]->author->username }}"
                                            class="text-decoration-none text-white">{{ $posts[1]->author->name }}</a>
                                    </p>
                                    <p class="card-text"><small>{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (isset($posts[2]))
                        <div class="col-md-3 mx-0 px-1 col-sm-6 my-sm-2 card-kecil">
                            <div
                                style="height: 300px;
                                        overflow: hidden;
                                        position: relative;
                                        background-image: url({{ asset('storage/' . $posts[2]->image) }});
                                        background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center;">
                                <div class="text-white p-3 z-3 " style="position: absolute; margin-bottom:10px;">
                                    <h5 class="card-title fw-medium "><a href="/posts/{{ $posts[2]->slug }}"
                                            class="text-decoration-none text-white ">{{ $posts[2]->title }}</a></h5>
                                    <p class="card-text my-1"><a href="/posts?category={{ $posts[2]->category->slug }}"
                                            class="text-decoration-none text-white">{{ $posts[2]->category->name }}</a>
                                    </p>
                                    <p class="card-text my-1">Oleh: <a
                                            href="/posts?author={{ $posts[2]->author->username }}"
                                            class="text-decoration-none text-white">{{ $posts[2]->author->name }}</a>
                                    </p>
                                    <p class="card-text"><small>{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (isset($posts[3]))
                        <div class="col-md-3 mx-0 px-1 col-sm-6 my-sm-2 card-kecil">
                            <div
                                style="height: 300px;
                                        overflow: hidden;
                                        position: relative;
                                        background-image: url({{ asset('storage/' . $posts[3]->image) }});
                                        background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center;">
                                <div class="text-white p-3 z-3 " style="position: absolute; margin-bottom:10px;">
                                    <h5 class="card-title fw-medium "><a href="/posts/{{ $posts[3]->slug }}"
                                            class="text-decoration-none text-white ">{{ $posts[3]->title }}</a></h5>
                                    <p class="card-text my-1"><a href="/posts?category={{ $posts[3]->category->slug }}"
                                            class="text-decoration-none text-white">{{ $posts[3]->category->name }}</a>
                                    </p>
                                    <p class="card-text my-1">Oleh: <a
                                            href="/posts?author={{ $posts[3]->author->username }}"
                                            class="text-decoration-none text-white">{{ $posts[3]->author->name }}</a>
                                    </p>
                                    <p class="card-text"><small>{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="container px-0 mx-0">
                <div class="row my-3 px-0 mx-0 ">
                    @foreach ($posts->skip(4) as $post)
                        <div class="col-md-6 mx-0 px-1 ">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-5"
                                        style="height: 340px;
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

                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <p>Oleh: <a href="/posts?author={{ $post->author->username }}"
                                                    class="text-decoration-none">{{ $post->author->name }}</a>
                                            </p>
                                            <p class="card-text">{{ $post->excerpt }}</p>
                                            <p class="card-text"><small
                                                    class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
                                            </p>
                                            <a href="/posts/{{ $post->slug }}" class="badge bg-success  ">Baca
                                                Selengkapnya...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center fs-4">No post Found.</p>
        @endif
        <div class="d-flex justify-content-center ">

            {{ $posts->links() }}
        </div>
    </main>

@endsection
