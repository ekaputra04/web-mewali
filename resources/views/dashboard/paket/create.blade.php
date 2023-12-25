@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Paket Upacara</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/paket" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_paket" class="form-label">Nama Paket</label>
                <input type="text" class="form-control @error('nama_paket') is-invalid  @enderror" id="nama_paket" name="nama_paket"
                    required autofocus value="{{ old('nama_paket') }}">
                @error('nama_paket')
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
                <label for="usaha_id" class="form-label">Nama Toko</label>
                <select class="form-select" name="usaha_id">
                    @foreach ($usahas as $usaha)
                        @if (old('usaha_id') == $usaha->id)
                            <option value="{{ $usaha->id }}" selected>{{ $usaha->name }}</option>
                        @else
                            <option value="{{ $usaha->id }}">{{ $usaha->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
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
                <label for="exampleFormControlTextarea3" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid  @enderror" id="exampleFormControlTextarea3" rows="3"
                    placeholder="Deskripsi" required id="deskripsi" name="deskripsi"></textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Includes</label>
                <textarea class="form-control @error('includes') is-invalid  @enderror" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Keterangan tambahan" required id="includes" name="includes"></textarea>
                @error('includes')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea2" class="form-label">Notes</label>
                <textarea class="form-control @error('notes') is-invalid  @enderror" id="exampleFormControlTextarea2" rows="3"
                    placeholder="Notes tambahan" required id="notes" name="notes"></textarea>
                @error('notes')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Foto paket</label>
                <img class="img-preview img-fluid mb-3 col-sm-6 ">
                <input class="form-control @error('image') is-invalid  @enderror" type="file" id="image"
                    name="image" onChange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mb-4 ">Buat paket</button>
            <a href="/dashboard/paket" class="btn btn-warning  mb-4">Batal</a>
        </form>
    </div>

    <script>
        const title = document.querySelector("#nama_paket");
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
