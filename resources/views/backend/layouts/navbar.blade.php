<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
        <div class="navbar-toggle">
            <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <p class="navbar-brand">
            @yield('page-head')
        </p>
        
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <form>
            <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <div class="input-group-append">
                <div class="input-group-text p-0 pr-3">
                <i class="ion-ios-search lead"></i>
                </div>
            </div>
            </div>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item btn-rotate dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ion-android-notifications-none lead"></i>
                <p>
                <span class="d-lg-none d-md-block">Some Actions</span>
                </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>

            <li class="nav-item">
            <a class="nav-link btn-magnify" href="#pablo">
                <i class="ion-gear-a lead"></i>
                <p>
                <span class="d-lg-none d-md-block">Stats</span>
                </p>
            </a>
            </li>

            <li class="nav-item">
            <a class="nav-link btn-rotate" href="{{route('be.logout')}}">
                <i class="ion-log-out lead"></i>
                <p>
                <span class="d-lg-none d-md-block">Account</span>
                </p>
            </a>
            </li>
        </ul>
        </div>
    </div>
</nav>