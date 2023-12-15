<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarMenuLabel">
                    Mewali
                </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard">
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
                        Post Saya
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
            </ul>

            <hr class="my-3" />

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
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
