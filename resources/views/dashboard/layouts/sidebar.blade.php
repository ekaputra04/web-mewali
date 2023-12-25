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
                        <i class="bi bi-file-earmark-text-fill"></i> 
                        Artikel Saya
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/comments') ? 'active' : '' }}" href="/dashboard/comments">
                        <i class="bi bi-chat-dots"></i> 
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
                            <i class="bi bi-person-circle"></i> 
                            Daftar Pengguna
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/usaha') ? 'active' : '' }}" href="/dashboard/usaha">
                            <i class="bi bi-shop"></i> 
                            Daftar Usaha
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/all-posts') ? 'active' : '' }}" href="/dashboard/all-posts">
                            <i class="bi bi-files"></i> 
                            Seluruh Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/all-comments') ? 'active' : '' }}" href="/dashboard/all-comments">
                            <i class="bi bi-chat-square-text-fill"></i> 
                            Seluruh Komentar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/posts-categories') ? 'active' : '' }}" href="/dashboard/posts-categories">
                            <i class="bi bi-card-list"></i> 
                            Kategori Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/sarana') ? 'active' : '' }}" href="/dashboard/sarana">
                            <i class="bi bi-flower3"></i> 
                            Sarana Upacara
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/paket') ? 'active' : '' }}" href="/dashboard/paket">
                            <i class="bi bi-box"></i> 
                            Paket Upacara
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/paket-categories') ? 'active' : '' }}" href="/dashboard/paket-categories">
                            <i class="bi bi-box-seam-fill"></i> 
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
