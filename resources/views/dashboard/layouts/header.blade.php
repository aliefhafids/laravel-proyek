<nav class="navbar col-lg-12 col-12 p-0 flex-md-nowrap">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-left">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Dashboard</a>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                            <i class="icon-search"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                        aria-label="search" aria-describedby="search">
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="/images/faces/face24.jpg" alt="profile" />
                </a>
            </li>
            <form action="/logout" method="post">
                @csrf
                <li class="nav-item mt-2">
                    <button type="submit" class="nav-link px-3 bg-white border-0 "> <span data-feather="log-out"></span>
                        logout</button>
                </li>
            </form>
        </ul>

    </div>
</nav>
