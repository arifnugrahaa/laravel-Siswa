<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <img class="img-responsive img-thumbnail" src="/rubik.png" width="48" height="48" alt="Not Image">
        <div class="sidebar-brand-text mx-3">Si<b>SKO</b></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ ($active === "index") ? 'active' : '' }}">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item {{ ($active === "kelas") ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-database"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item text-gray-600" href="/kelas"><i
                        class="fas fa-chess-rook fa-sm fa-fw mr-2 text-success"></i>Kelas</a>
                <a class="collapse-item text-gray-600" href="/siswa"><i
                        class="fas fa-user-graduate fa-sm fa-sw mr-2 text-success"></i>Siswa</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="/siswa/kelas">
            <i class="fas fa-chess-rook fa-sm fa-fw mr-2"></i>
            <span>Daftar Kelas</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>