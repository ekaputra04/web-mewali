@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Akun Pengguna</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/users/{{ $user->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
            <input type="hidden" name="username" value="{{ $user->username }}">
            <input type="hidden" name="email" value="{{ $user->email }}">
            <input type="hidden" name="password" value="{{ $user->password }}">

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name"
                    name="name" required autofocus value="{{ old('name', $user->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid  @enderror" id="username"
                    name="username" required autofocus value="{{ old('username', $user->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid  @enderror" id="email"
                    name="email" required autofocus value="{{ $user->email }}" disabled>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid  @enderror" id="password"
                    name="password" required autofocus value="********" disabled>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success mb-4 ">Update Akun Pengguna</button>
            <a href="/dashboard/users" class="btn btn-warning  mb-4">Batal</a>

        </form>
    </div>

    <script>
        const name = document.querySelector("#name");
        const username = document.querySelector("#username");

        name.addEventListener("keyup", function() {
            let preusername = name.value;
            preusername = preusername.replace(/ /g, "-");
            username.value = preusername.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        // menampilkan gambar
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
