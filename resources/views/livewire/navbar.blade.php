<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" wire:navigate href="/customers">Customer APP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-2">
                @auth
                <li class="nav-item">
                    <a wire:navigate class="nav-link" aria-current="page" href="/customers">Customers</a>
                </li>
                {{-- <li class="nav-item">
                    <button class="btn btn-info" aria-current="page" wire:click="logout">Logout</button>
                </li> --}}
                <li class="nav-item dropdown btn btn-info btn-sm">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hi, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" role="button" wire:click='logout'>Logout</a>
                        </li>
                    </ul>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a wire:navigate class="nav-link active" aria-current="page" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a wire:navigate class="nav-link active" aria-current="page" href="/register">Register</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>