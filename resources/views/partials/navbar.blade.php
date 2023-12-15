<nav class="navbar navbar-expand-lg navbar-dark bg-success bg-gradient fixed-top d-block mb-5">
    <div class="container">
        <a class="navbar-brand" href="/"><img style="width: 3em;" src="{{ asset('img/LOGO MEWALI.png') }}" alt="Logo Mewali"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    {{-- <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page"
                      href="/">Home</a> --}}
                    <a class="nav-link " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a> --}}
                    <a class="nav-link " aria-current="page" href="/posts">Artikel</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blog</a> --}}
                    <a class="nav-link " aria-current="page" href="/sarana">Sarana Upacara</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a> --}}
                    <a class="nav-link " aria-current="page" href="/paket">Paket Upacara</a>
                </li>                
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input
                type="search"
                class="form-control "
                placeholder="Search..."
                aria-label="Search"
              />
            </form>

            <div class="text-end">
              <a href="/login">
                <button type="button" class="btn btn-outline-light me-2">
                  Login
                </button>
              </a>
              <a href="/register">
                <button type="button" class="btn btn-warning">Sign-up</button>
              </a>
            </div>
        </div>
    </div>
</nav>
