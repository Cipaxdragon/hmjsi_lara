<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow d-flex justify-content-start" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white me-3 " style="padding: 6px;gap: 20px;display: flex;justify-content: flex-start;align-items: center;" href="/">
        <img src="https://cdn.discordapp.com/attachments/1152085105641279519/1178314168961597520/LOGO_SI.png?ex=6575b195&amp;is=65633c95&amp;hm=caef25a36e2040c0cee7fb70399dd710c55234541efbc5de523029d0136af56f&amp" width="30px" alt="">
        {{ auth()->user()->name }}
    </a>
    <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
            <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false"
                aria-label="Toggle search">
                <svg class="bi">
                    <use xlink:href="#search" />
                </svg>
            </button>
        </li>
        <li class="nav-item text-nowrap">
            <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg class="bi">
                    <use xlink:href="#list" />
                </svg>
            </button>
        </li>
    </ul>
    <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search">
    </div>
</header>
