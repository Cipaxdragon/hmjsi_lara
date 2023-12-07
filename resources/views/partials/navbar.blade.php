<nav class="navbar navbar-expand-lg p-2 fw-normal px-3 p-3 md-1 fixed-top rounded-bottom-3">
    <div class="container">
        <img class="img-fluid"
            src="https://cdn.discordapp.com/attachments/1152085105641279519/1178314168961597520/LOGO_SI.png?ex=6575b195&amp;is=65633c95&amp;hm=caef25a36e2040c0cee7fb70399dd710c55234541efbc5de523029d0136af56f&amp;"
            width="30" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="width: 25px;"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item nav-item-animasi ">
                    <a class="nav-link active" style="color: inherit" href="/">Beranda</a>
                </li>
                <li class="nav-item nav-item-animasi">
                    <a class="nav-link" style="color: inherit" href="/kegiatan">Informasi</a>
                </li>
                <li class="nav-item nav-item-animasi">
                    <a class="nav-link" style="color: inherit" href="/pengurus">Pengurus</a>
                </li>
                <li class="nav-item nav-item-animasi">
                    <a class="nav-link" style="color: inherit" href="/tentang">Tentang</a>
                </li>

                <li class="nav-item dropdown nav-item-animasi">
                    <a class="nav-link" href="#" role="button" style="color: inherit" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Lainnya
                        <div class="d-inline">
                            <svg class="d-inline" width="14" xmlns="http://www.w3.org/2000/svg"
                                :class="{ 'rotate-180': expanded }" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </a>
                    <ul class="dropdown-menu nav-item-animasi">
                        <li><a class="dropdown-item" style="color: inherit" href="#">Arsip</a></li>
                        <li><a class="dropdown-item" style="color: inherit" href="#">Galery</a></li>
                        <li><a class="dropdown-item" style="color: inherit" href="#">Kritik dan Saran</a></li>
                    </ul>
                </li>

                @auth
                    <!-- Selamat Datang dan Dropdown Logout -->
                    <li class="nav-item dropdown nav-item-animasi">
                        <a class="nav-link" href="/dashboard" role="button" style="color: inherit" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hai Admin {{ auth()->user()->name }}
                            <div class="d-inline">
                                <svg class="d-inline" width="14" xmlns="http://www.w3.org/2000/svg"
                                    :class="{ 'rotate-180': expanded }" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </a>
                        <ul class="dropdown-menu nav-item-animasi">
                            <li><a class="dropdown-item" style="color: inherit" href="/dashboard">Dashboard</a></li>

                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item" style="color: inherit" > Logout</button>
                            </form>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
