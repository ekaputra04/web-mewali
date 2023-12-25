@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Sarana</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/sarana" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_sarana" class="form-label">Nama Sarana</label>
                <input type="text" class="form-control @error('nama_sarana') is-invalid  @enderror" id="nama_sarana" name="nama_sarana"
                    required autofocus value="{{ old('nama_sarana') }}">
                @error('nama_sarana')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid  @enderror" id="slug" name="slug"
                    required autofocus value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama_toko" class="form-label">Nama Toko</label>
                <input type="text" class="form-control @error('nama_toko') is-invalid  @enderror" id="nama_toko" name="nama_toko"
                    required autofocus value="{{ old('nama_toko') }}">
                @error('nama_toko')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telepon" class="form-label">No Telepon</label>
                <input type="text" class="form-control @error('no_telepon') is-invalid  @enderror" id="no_telepon" name="no_telepon"
                    required autofocus value="{{ old('no_telepon') }}">
                @error('no_telepon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid  @enderror" id="harga"
                    name="harga" required value="{{ old('harga') }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Sarana</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid  @enderror" id="deskripsi"
                    name="deskripsi" required value="{{ old('deskripsi') }}">
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Foto Sarana</label>
                <img class="img-preview img-fluid mb-3 col-sm-6 ">
                <input class="form-control @error('image') is-invalid  @enderror" type="file" id="image"
                    name="image" onChange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mb-4 ">Buat Sarana</button>
        </form>
    </div>

    <script>
        const title = document.querySelector("#nama_sarana");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

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
