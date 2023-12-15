@extends('layouts/main')

@section('container')
    <main class="container p-0  pt-5 ">
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom"><a href="/posts?category={{ $post->category->slug }}"
                        class="text-black ">{{ $post->category->name }}</a></h3>

                <article class="blog-post ">
                    <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
                    <p class="blog-post-meta">
                        {{ $post->created_at->diffForHumans() }} by <a
                            href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    </p>


                    <div class="p-0 m-0 w-100  d-flex justify-content-center  ">

                        @if ($post->image)
                            <div
                                style="max-height: 600px; justify-content: center; align-items: center; overflow: hidden;" class="mb-3 ">
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid my-3"
                                    alt="{{ $post->category->name }}">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}"
                                class="card-img-top img-fluid my-3" alt="{{ $post->category->name }}">
                        @endif

                        {{-- <img src="https://source.unsplash.com/500x500?balinese" alt="Balinese" srcset=""> --}}
                    </div>

                    <div style="text-align: justify; margin: 0; " class="mb-3 ">
                        {!! $post['body'] !!}
                    </div>
                </article>


                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
                </nav>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">
                            Customize this section to tell your visitors a little bit about
                            your publication, writers, content, or something else entirely.
                            Totally up to you.
                        </p>
                    </div>

                    <div>
                        <h4 class="fst-italic">Recent posts</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Example blog post title</h6>
                                        <small class="text-body-secondary">January 15, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">This is another blog post title</h6>
                                        <small class="text-body-secondary">January 14, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">
                                            Longer blog post title: This one has multiple lines!
                                        </h6>
                                        <small class="text-body-secondary">January 13, 2023</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
