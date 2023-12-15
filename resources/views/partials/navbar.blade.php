<nav class="navbar navbar-expand-lg navbar-dark bg-success bg-gradient fixed-top d-block ">
    <div class="container">
        <a class="navbar-brand" href="/">Mewali</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page"
                      href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'sarana' ? 'active' : '' }}" href="/sarana">Sarana Upacara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'paket' ? 'active' : '' }}" href="/paket">Paket Upacara</a>
                </li>                
            </ul>
            {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input
                type="search"
                class="form-control "
                placeholder="Search..."
                aria-label="Search"
              />
            </form> --}}

            {{-- <div class="text-end">
              <a href="/login">
                <button type="button" class="btn btn-outline-light me-2">
                  Login
                </button>
              </a>
              <a href="/register">
                <button type="button" class="btn btn-warning">Sign-up</button>
              </a>
            </div> --}}

            <ul class="navbar-nav ms-auto ">
              @auth
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle active " href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Selamat Datang, {{ auth()->user()->name }}
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                  My Dashboard</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li>
                              <form action="/logout" method="POST">
                                  @csrf
                                  <button type="submit" class="dropdown-item">
                                      <i class="bi bi-box-arrow-right "></i> Logout
                                  </button>
                              </form>
                          </li>
                      </ul>
                  </li>
              @else
                  <li class="nav-item ">
                      <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }} "><i
                              class="bi bi-box-arrow-in-right "></i> Login</a>
                  </li>
              @endauth
          </ul>
        </div>
    </div>
</nav>
