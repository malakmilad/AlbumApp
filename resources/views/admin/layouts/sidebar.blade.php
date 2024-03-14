<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="bi bi-pie-chart"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#album_tab" data-bs-toggle="collapse">
                <i class="bi bi-card-image"></i><span>Albums</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="album_tab" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('album.index')}}">
                        <i class="bi bi-circle"></i><span>All Albums</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('album.create')}}">
                        <i class="bi bi-circle"></i><span>Add New Album</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
