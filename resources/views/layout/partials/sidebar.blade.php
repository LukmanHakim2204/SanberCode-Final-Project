<div class="sidebar-header">
    <img src="{{ asset('assets/assets/images/filmku.png') }}" alt="Logo" class="img-fluid " style="max-width: 500.95px; height: 150px;">
</div>


<div class="sidebar-menu">
    <ul class="menu">
            <li class='sidebar-title'>Main Menu</li>
            <li class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class='sidebar-title'>Menu</li>


            <li class="sidebar-item  ">
                <a href="form-layout.html" class='sidebar-link'>
                    <i data-feather="layout" width="20"></i>
                    <span>List Film</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="form-editor.html" class='sidebar-link'>
                    <i data-feather="layers" width="20"></i>
                    <span>Genre</span>
                </a>
            </li>

            <li class='sidebar-title'>Crud Menu</li>

            <li class="sidebar-item  ">
                <a href="{{ route('film.index') }}" class='sidebar-link'>
                    <i data-feather="grid" width="20"></i>
                    <span>Film</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="{{ route('genre.index') }}" class='sidebar-link'>
                    <i data-feather="file-plus" width="20"></i>
                    <span>Genre</span>
                </a>
            </li>
            <li class="sidebar-item  ">
                <a href="table-datatable.html" class='sidebar-link'>
                    <i data-feather="file-plus" width="20"></i>
                    <span>Actor</span>
                </a>
            </li>

    </ul>
</div>
