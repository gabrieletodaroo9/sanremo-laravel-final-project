<div class="offcanvas-lg offcanvas-start col-lg-3 col-xl-2 bg-white shadow border-end" id="sidebarOffcanvas">

    <div class="offcanvas-header d-lg-none border-bottom">
        <h5 class="m-0">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarOffcanvas"></button>
    </div>

    <div class="d-flex flex-column vh-100 p-4">

        <div class="text-center mb-5">
            <img src="https://sanremissimo.it/wp-content/uploads/2025/01/affittacamere-a-sanremo-768x218.png"
                class="img-fluid" alt="Logo">
        </div>

        <ul class="list-unstyled flex-grow-1">
            <li class="mb-3">
                <a href="{{ route('admin.dashboard') }}" class="text-secondary text-decoration-none">
                    <i class="fa-solid fa-list me-2"></i> Dashboard
                </a>
            </li>
            <li class="mb-3">
                <a href="{{ route('admin.editions.index') }}" class="text-secondary text-decoration-none">
                    <i class="fa-solid fa-champagne-glasses me-2"></i> Gestione edizioni
                </a>
            </li>
        </ul>
        <a href="{{ route('admin.profile.edit') }}" class="text-dark text-decoration-none fw-bold d-block mb-4">
            <i class="fa-solid fa-user me-2"></i> Profilo
        </a>
            <a href="{{ route('logout') }}" class="border-top pt-3 text-danger text-decoration-none fw-bold"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-sign-out me-2"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>

    </div>
</div>
