@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article>
                    <h2 class="mb-3">{{ $post['title'] }}</h2>

                    <a href="/dashboard/posts" class="btn btn-success  "><i class="bi bi-arrow-left"></i> Kembali ke daftar artikel</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning  "><i
                            class="bi bi-pencil-square"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline ">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger " onclick="return confirm('Yakin Menghapus Data?')"><i
                                class="bi bi-x-circle"></i> Delete</button>
                    </form>

                    <br><br>

                    <p>{{ $post->category->name }}</p>

                    @if ($post->image)
                    <div style="width: 100%; justify-content: center; align-items: center; overflow: hidden; margin-bottom: 20px" >
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid my-3 w-100 "
                        alt="{{ $post->category->name }}">
                    </div>                        
                    @else
                        <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}"
                            class="card-img-top img-fluid my-3" alt="{{ $post->category->name }}">
                    @endif

                    {{-- tidak include htmlspecialchars --}}
                    <div class="m-0" style="text-align: justify">

                        {!! $post['body'] !!}
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
