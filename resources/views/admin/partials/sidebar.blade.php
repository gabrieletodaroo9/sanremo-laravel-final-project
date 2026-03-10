<div class="offcanvas-xl offcanvas-start col-xl-2 bg-light shadow-sm border-end p-0" tabindex="-1" id="sidebarOffcanvas">
    
    <div class="offcanvas-header d-xl-none border-bottom">
        <div class="p-2">
            <img src="https://sanremissimo.it/wp-content/uploads/2025/01/affittacamere-a-sanremo-768x218.png" 
                 style="max-height: 40px; width: auto;" alt="Logo">
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarOffcanvas"></button>
    </div>

    <div class="sticky-top d-flex flex-column vh-100">
        
        <div class="p-4 p-xl-5 text-center d-none d-xl-block">
            <img src="https://sanremissimo.it/wp-content/uploads/2025/01/affittacamere-a-sanremo-768x218.png" 
                 class="img-fluid" style="max-height: 60px; width: auto;" alt="Logo">
        </div>

        <h4 class="px-4 px-xl-5 pb-3 fw-bold d-none d-xl-block">Menu</h4>

        <ul class="px-4 px-xl-5 pt-2 list-unstyled flex-grow-1">
            <li class="mb-3">
                <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-dark d-block">
                    <i class="fa-solid fa-list me-2"></i> Dashboard
                </a>
            </li>
            <li class="mb-3">
                <a href="{{ route('admin.editions.index') }}" class="text-decoration-none text-dark d-block">
                    <i class="fa-solid fa-calendar-days me-2"></i> Edizioni
                </a>
            </li>
            <li class="mb-3">
                <a href="{{ route('admin.artists.index') }}" class="text-decoration-none text-dark d-block">
                    <i class="fa-solid fa-microphone me-2"></i> Artisti
                </a>
            </li>
            <li class="mb-3">
                <a href="{{ route('admin.songs.index') }}" class="text-decoration-none text-dark d-block">
                    <i class="fa-solid fa-music me-2"></i> Canzoni
                </a>
            </li>
            <li class="mb-3">
                <a href="{{ route('admin.awards.index') }}" class="text-decoration-none text-dark d-block">
                    <i class="fa-solid fa-trophy me-2"></i> Premi
                </a>
            </li>
        </ul>

        <div class="mt-auto px-4 px-xl-5 pb-5">
            <a href="{{ route('admin.profile.edit') }}" class="text-decoration-none text-dark d-block mb-3 fw-bold">
                <i class="fa-solid fa-user me-2"></i> Profilo
            </a>
            <a class="text-decoration-none text-danger fw-bold" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-sign-out me-2"></i> Logout
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

