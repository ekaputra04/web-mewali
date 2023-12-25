<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">
                Mewali | Dashboard
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted ">
                <span>Pengguna</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts') ? 'active' : '' }}" href="/dashboard/posts">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Artikel Saya
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/comments') ? 'active' : '' }}" href="/dashboard/comments">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Komentar Artikel
                    </a>
                </li>
            </ul>

            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted ">
                    <span>Administrator</span>
                </h6>
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/users') ? 'active' : '' }}" href="/dashboard/users">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Daftar Pengguna
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/usaha') ? 'active' : '' }}" href="/dashboard/usaha">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Daftar Usaha
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/all-posts') ? 'active' : '' }}" href="/dashboard/all-posts">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Seluruh Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/all-comments') ? 'active' : '' }}" href="/dashboard/all-comments">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Seluruh Komentar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/posts-categories') ? 'active' : '' }}" href="/dashboard/posts-categories">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Kategori Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/sarana') ? 'active' : '' }}" href="/dashboard/sarana">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Sarana Upacara
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/paket') ? 'active' : '' }}" href="/dashboard/paket">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Paket Upacara
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/paket-categories') ? 'active' : '' }}" href="/dashboard/paket-categories">
                            <svg class="bi">
                                <use xlink:href="#file-earmark" />
                            </svg>
                            Kategori Paket Upacara
                        </a>
                    </li>
                    
                </ul>
            @endcan


            <hr class="my-3" />

            <ul class="nav flex-column mb-5">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/profile">
                        <svg class="bi">
                            <use xlink:href="#gear-wide-connected" />
                        </svg>
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link d-flex align-items-center gap-2">
                            <i class="bi bi-box-arrow-right "></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
