<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">RapatPegawai</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="/Login">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/meeting">meeting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/ruangan">Ruangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/peserta">Peserta</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tabel Laporan Meeting
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/laporanharian">Laporan Meeting Perhari</a></li>
                            <li><a class="dropdown-item" href="/laporanmingguan">Laporan Meeting Perminggu</a></li>
                            <li><a class="dropdown-item" href="/laporanbulanan">Laporan Meeting Perbulan</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Chart Laporan Meeting
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Laporan Meeting Perhari</a></li>
                            <li><a class="dropdown-item" href="#">Laporan Meeting Perminggu</a></li>
                            <li><a class="dropdown-item" href="#">Laporan Meeting Perbulan</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item bi bi-card-heading" href="/dashboard">My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="/Logout"method="POST">
                                @csrf
                                <a class="dropdown-item bi bi-box-arrow-right" href="/Logout">Logout</a>
                            </form>
                            <!-- <li><a class="dropdown-item bi bi-box-arrow-right" href="#">Logout</a></li> -->
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/Login" class="nav-link bi bi-box-arrow-in-right">login</a>
                    </li>
                @endauth
            </ul>


            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>
