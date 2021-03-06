<main class="main-content mt-2 border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 border-radius-xl shadow-none">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-md"><a class="opacity-5 text-dark" href="javascript:;">
                            @switch(Route::currentRouteName())
                            @case('facilities')
                            @case('manage_users')
                            @case('create_user')
                            @case('manage_roles')
                            Administrator
                            @break
                            @default
                            Pages
                            @endswitch
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">
                        {{ str_replace('_', ' ', Route::currentRouteName()) }}</li>
                    </li>
                </ol>
                <h5 class="font-weight-bolder mb-0 text-capitalize">
                    {{ str_replace('_', ' ', Route::currentRouteName()) }}</h5>
            </nav>
            <div class="sidenav-toggler sidenav-toggler-inner">
                <span class="nav-item ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </span>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">
                <ul class="navbar-nav justify-content-end mr-2">
                    <li class="nav-item d-flex align-items-center">
                        <a href="{{ route('logout'); }}" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</main>
