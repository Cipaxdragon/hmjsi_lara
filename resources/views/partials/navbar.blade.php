<nav class="navbar navbar-expand-lg  bg-body-white p-2 fw-normal px-5 mt-3 md-1">
    <div class="container">
      <img  src="https://cdn.discordapp.com/attachments/1152085105641279519/1178314168961597520/LOGO_SI.png?ex=6575b195&is=65633c95&hm=caef25a36e2040c0cee7fb70399dd710c55234541efbc5de523029d0136af56f&" width="40" alt="" class="rounded-circle">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "beranda") ? "active" : "" }}  " href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "berita") ? "active" : "" }} " href="/berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "pengurus") ? "active" : "" }}" href="/pengurus">Pengurus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "tentang") ? "active" : "" }}" href="/tentang">Tentang</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lainnya <div class="d-inline"><svg class="d-inline" width="14" xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': expanded }" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></div>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Arsip</a></li>
              <li><a class="dropdown-item" href="#">Galery</a></li>
              <li><a class="dropdown-item" href="#">Kritik dan Saran</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
