<div class="container" data-aos="fade-up" data-aos-duration="1500">
    <footer class="py-5">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/#home" class="nav-link p-0 text-body-secondary">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/posts" class="nav-link p-0 text-body-secondary">Artikel</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/sarana" class="nav-link p-0 text-body-secondary">Sarana Upacara</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/paket" class="nav-link p-0 text-body-secondary">Paket Upacara</a>
                    </li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Kategori Artikel</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/posts?category=dewa-yadnya" class="nav-link p-0 text-body-secondary">Dewa Yadnya</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/posts?category=rsi-yadnya" class="nav-link p-0 text-body-secondary">Rsi Yadnya</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/posts?category=pitra-yadnya" class="nav-link p-0 text-body-secondary">Pitra Yadnya</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/posts?category=manusa-yadnya" class="nav-link p-0 text-body-secondary">Manusa
                            Yadnya</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/posts?category=bhuta-yadnya" class="nav-link p-0 text-body-secondary">Bhuta Yadnya</a>
                    </li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Media Sosial</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Instagram</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Facebook</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-body-secondary">Youtube</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 mb-3">
                <h5>Hubungi Kami</h5>
                <p>Dapatkan Penawaran Menarik</p>
                <form action="/contact" method="POST">
                    @csrf
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid  @enderror" id="email"
                            name="email" required value="{{ old('email') }}"
                            @auth placeholder="{{ auth()->user()->email }}"
                          @else
                          placeholder="putu@gmail.com" @endauth>
                        @error('email')
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
                    <button class="btn btn-success " type="submit">Kirim</button>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between border-top">
            <p>&copy; 2023 Mewali, Inc. All rights reserved.</p>
        </div>
    </footer>
</div>
