<nav class="navbar navbar-expand-lg navbar-dark bg-success bg-gradient fixed-top d-block mb-3">
    <div class="container">
        <a class="navbar-brand p-0 " href="/"><img style="width: 2.5em;" src="{{ asset('img/logo-mewali.png') }}"
                alt="Logo Mewali"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link  {{ $active === 'home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'sarana' ? 'active' : '' }}" href="/sarana">Sarana Upacara</a>
                </li>
                <li>
                    <div class="btn-group">
                        <a class="nav-link {{ $active === 'paket' ? 'active' : '' }}" href="/paket">Paket Upacara</a>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split p-0 m-0"
                            data-bs-toggle="dropdown" aria-expanded="false" stydata-bs-reference="parent">
                            <span class="visually-hidden bg-light">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            @foreach ($paketCategories as $category)
                                <li><a class="dropdown-item" href="/paket?category={{ $category->slug }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }} mx-3" href="/about">Tentang Mewali</a>
                </li>
            </ul>

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
