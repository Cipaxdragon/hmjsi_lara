<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary  " style="min-height: 900px">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }} " aria-current="page"
                        href="/dashboard">
                        <i class="bi bi-house-fill {{ Request::is('dashboard') ? 'bi-house-fill' : 'bi-house' }}  "></i>

                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2  {{ Request::is('dashboard/kegiatan*') ?'active' : '' }}" href="/dashboard/kegiatan">
                    <i class="bi  {{ Request::is('dashboard/kegiatan*') ?'bi-database-fill' : 'bi-database' }}"></i>
                        Kegiatan
                    </a>
                </li>
<li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2  {{ Request::is('dashboard/postingan*') ?'active' : '' }}" href="#">
                    <i class="bi  {{ Request::is('dashboard/postingan*') ?'bi-database-fill' : 'bi-database' }}"></i>
                        Artikel/Postingan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2  {{ Request::is('dashboard/pengurus*') ?'active' : '' }}" href="#">
                    <i class="bi   {{ Request::is('dashboard/info-penting*') ?'bi-info-square-fill' : 'bi-info-square' }}"></i>
                        info-penting
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2  {{ Request::is('dashboard/halaman*') ?'active' : '' }}" href="#">
                    <i class="bi  bi-page  {{ Request::is('dashboard/halaman*') ?'bi-file-fill' : 'bi-file' }}"></i>
                        Halaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2  {{ Request::is('dashboard/pengurus*') ?'active' : '' }}" href="#">
                    <i class="bi   {{ Request::is('dashboard/pengurus*') ?'bi-people-fill' : 'bi-people' }}"></i>
                        pengurus
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2  {{ Request::is('dashboard/prestasi*') ?'active' : '' }}" href="#">
                    <i class="bi   {{ Request::is('dashboard/prestasi*') ?'bi-trophy-fill' : 'bi-trophy' }}"></i>
                        Prestasi
                    </a>
                </li>
                <li class="nav-item disabled">
                    <a class="nav-link d-flex align-items-center gap-2  {{ Request::is('dashboard/galery*') ?'active' : '' }}" href="#">
                        <i class="bi bi-card-image "></i>
                        Galery
                    </a>
                </li>
            </ul>
            {{-- <h6
                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                <span>Saved reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <svg class="bi">
                        <use xlink:href="#plus-circle" />
                    </svg>
                </a>
            </h6> --}}

            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi">
                            <use xlink:href="#gear-wide-connected" />
                        </svg>
                        Settings
                    </a>
                </li> --}}
                <li class="nav-item">


                    </a>
                    <form action="/logout" method="POST">
                        @csrf

                        <button type="submit" class="nav-link d-flex align-items-center gap-2" >       <svg class="bi">
                            <use xlink:href="#door-closed" />
                        </svg>Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
