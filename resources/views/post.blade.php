@extends('layouts/main')

@section('container')
    <main class="container p-0  pt-5 ">
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom"><a href="/posts?category={{ $post->category->slug }}"
                        class="text-black text-decoration-none ">{{ $post->category->name }}</a></h3>

                <article class="blog-post ">
                    <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
                    <p class="blog-post-meta">
                        {{ $post->created_at->diffForHumans() }} by <a
                            href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    </p>

                    <div class="p-0 m-0 w-100  d-flex justify-content-center  ">
                        @if ($post->image)
                            <div style="max-height: 600px; justify-content: center; align-items: center; overflow: hidden;"
                                class="mb-3 ">
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid my-3"
                                    alt="{{ $post->category->name }}">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}"
                                class="card-img-top img-fluid my-3" alt="{{ $post->category->name }}">
                        @endif
                    </div>

                    <div style="text-align: justify; margin: 0; " class="mb-3 ">
                        {!! $post['body'] !!}
                    </div>
                </article>


                <nav class="blog-pagination" aria-label="Pagination">
                    @if (isset($older_slug))
                        <a class="btn btn-outline-primary rounded-pill" href="/posts/{{ $older_slug }}">Older</a>
                    @else
                        <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Older</a>
                    @endif
                    @if (isset($newer_slug))
                        <a class="btn btn-outline-primary rounded-pill" href="/posts/{{ $newer_slug }}">Newer</a>
                    @else
                        <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
                    @endif
                </nav>

                <hr>

                <p class="fs-4 fw-bolder fst-italic ">Tinggalkan Komentar</p>
                <div class="card mt-3 p-3 ">
                    <form action="/posts/comment" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="mb-3">
                            <label for="nama_user" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama_user') is-invalid  @enderror"
                                id="nama_user" name="nama_user" required autofocus value="{{ old('nama_user') }}"
                                @auth placeholder="{{ auth()->user()->name }}"
                                @else
                                placeholder="Putu Bagus" @endauth>
                            @error('nama_user')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email_user" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email_user') is-invalid  @enderror" id="email_user"
                                name="email_user" required autofocus value="{{ old('email_user') }}"
                                @auth placeholder="{{ auth()->user()->email }}"
                                @else
                                placeholder="putu@gmail.com" @endauth>
                            @error('email_user')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                            <textarea class="form-control @error('pesan') is-invalid  @enderror" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Tinggalkan pesan..." required id="pesan" name="pesan"></textarea>
                            @error('pesan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mb-4 ">Kirim</button>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">{{ $post->category->name }}</h4>
                        <p class="mb-0">
                            {{ $post->category->deskripsi }}
                        </p>
                    </div>

                    <div>
                        <h4 class="fst-italic">Post Terkait</h4>
                        <ul class="list-unstyled">
                            @foreach ($posts->take(5) as $post)
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="/posts/{{ $post->slug }}">
                                        <div
                                            style="height: 100px;
                                    width: 100px;
                                    overflow: hidden;
                                    position: relative;
                                    background-image: url({{ asset('storage/' . $post->image) }});
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    background-position: center;">
                                        </div>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">{{ $post->title }}</h6>
                                            <small
                                                class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
