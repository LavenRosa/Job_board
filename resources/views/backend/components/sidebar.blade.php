<!-- Sidebar -->
<div style="background-color: rgb(30, 244, 158)">
    <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(30, 244, 158)">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

            <div class="sidebar-brand-text mx-3">Admin Panel </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active" style="background-color: rgb(30, 244, 158)">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Job Board</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item" style="background-color: rgb(30, 244, 158)">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">

                <span>Job</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('JobList') }}">List</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('JobCreatePage') }}">Create</a>
                </div>
            </div>
        </li>
        <li class="nav-item" style="background-color: rgb(30, 244, 158)">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#three"
                aria-expanded="true" aria-controls="three">

                <span>Job Function</span>
            </a>
            <div id="three" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('JFList') }}">List</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('JFCreatePage') }}">Create</a>
                </div>
            </div>
        </li>
        <li class="nav-item" style="background-color: rgb(30, 244, 158)">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#four"
                aria-expanded="true" aria-controls="three">

                <span>Job Location</span>
            </a>
            <div id="four" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('JLList')}}">List</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('JLCreatePage') }}">Create</a>
                </div>
            </div>
        </li>
        <li class="nav-item" style="background-color: rgb(30, 244, 158)">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#five"
                aria-expanded="true" aria-controls="three">

                <span>Apply Job</span>
            </a>
            <div id="five" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="">List</a>
                </div>
            </div>
        </li>
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline" style="background-color: rgb(30, 244, 158)">
            <button class="rounded-circle border-0" id="sidebarToggle" style="background-color: rgb(30, 244, 158)"></button>
        </div>

    </ul>
</div>

<!-- End of Sidebar -->
