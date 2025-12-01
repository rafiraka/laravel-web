<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <!-- Search form -->
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon">
                            <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search"
                            aria-label="Search" aria-describedby="topbar-addon">
                    </div>
                </form>
                <!-- / Search form -->
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-item dropdown-toggle ms-lg-3 pt-1 px-0" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="class media d-flex align-items-center">
                            <img class="avatar rounded-circle" alt="Image placeholder"
                                src="{{ asset('assets-admin/img/team/profile-picture-3.jpg') }}">
                            <div class="class media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end mt-2 py-1">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 8a1 1 0 0 0-1 1v.793l-.707.707a1 1 0 0 0 1.414 1.414l.707-.707V12a1 1 0 0 0 2 0v-.207l.707.707a1 1 0 0 0 1.414-1.414l-.707-.707V9a1 1 0 0 0-1-1zm-2 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4v-1zM2 6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4 0h-2v2h2V6zM16 12a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4zm-2 0h-2v2h2v-2zM4 14a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zM16 14a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            My Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-.21-.78-.38-1.56-.63-.26-.08-.52-.16-.94-.17-.42 0-.68.08-.94.17-.78.25-1.18.42-1.56.63-.38.21-1.4.92-2.18 1.42-.78.5-1.56 1.15-2.28 1.83-1.44 1.34-2.16 2.76-2.16 4.38 0 1.62.72 3.04 2.16 4.38.72.68 1.5 1.33 2.28 1.83.78.5 1.8 1.21 2.18 1.42.38.21.78.38 1.56.63.26.08.52.16.94.17.42 0 .68-.08.94-.17.78-.25 1.18-.42 1.56-.63.38-.21 1.4-.92 2.18-1.42.78-.5 1.56-1.15 2.28-1.83 1.44-1.34 2.16-2.76 2.16-4.38 0-1.62-.72-3.04-2.16-4.38-.72-.68-1.5-1.33-2.28-1.83-.78-.5-1.8-1.21-2.18-1.42zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Settings
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a class="dropdown-item d-flex align-items-center" href="#"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6-4v4m3 0v4m3 0v4m3 0v4"></path>
                            </svg>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
