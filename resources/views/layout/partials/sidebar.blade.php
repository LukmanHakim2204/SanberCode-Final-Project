<div class="sidebar-header">
    <img src="{{ asset('assets/assets/images/filmku.png') }}" alt="Logo" class="img-fluid " style="max-width: 500.95px; height: 150px;">
</div>


<div class="sidebar-menu">
    <ul class="menu">

            <li class='sidebar-title'>Film</li>


            <li class="sidebar-item  ">
                <a href="{{ route('film.index') }}" class='sidebar-link'>
                    <i data-feather="layout" width="20"></i>
                    <span>List Film</span>
                </a>
            </li>
            @auth

            <li class='sidebar-title'>Genre</li>
            <li class="sidebar-item  ">
                <a href="{{ route('genre.index') }}" class='sidebar-link'>
                    <i data-feather="layers" width="20"></i>
                    <span>Genre</span>
                </a>
            </li>
            <li class="sidebar-item  ">
                <a href="{{ route('cast.index') }}" class='sidebar-link'>
                    <i data-feather="file-plus" width="20"></i>
                    <span>Cast</span>
                </a>
            </li>
            @endauth

            @guest
            <li class='sidebar-title'>LOGIN</li>

            <li class="sidebar-item">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('login') }}" class='btn btn-sm btn-primary text-center' style="width: 80%;">
                        <i data-feather="arrow-right-circle" width="20"></i>
                        <span>Login</span>
                    </a>
                </div>
            </li>
            @endguest


    </ul>
</div>
