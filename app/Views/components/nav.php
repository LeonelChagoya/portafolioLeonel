<nav id ="nav" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><?php echo session('usuario'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=<?php echo base_url('/salir') ?>>Salir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/customer">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">login</a>
                </li>
            </ul>

        </div>
    </div>
</nav>