<header class="px-2 bg-light shadow-sm">
    <div class="d-flex justify-content-between py-2 border-bottom">
        <img class="img-fluid col-5 col-md-2" src="images/logo.png" alt="Auto Parts Website">
        <span class="nav-date my-auto small"> <?php echo date('Y/m/d D'); ?> <i class="bi bi-calendar"></i></span>
    </div>

    <nav class="navbar navbar-expand-lg border-bottom small">
        <div class="container-fluid">
            <a class="navbar-toggler p-0" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav m-auto d-flex">
                    <?php require_once "headerNavComponents/navbarNav.php"; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex flex-row-reverse flex-wrap py-2">
        <a class="btn-primary nav-link px-1" href="#" rel="noopener noreferrer">Account <i class="bi bi-person-fill"></i></a>
        <a class="nav-link" href="#" rel="noopener noreferrer"><i class="bi bi-cart"></i></a>
        <a class="nav-link" href="#" rel="noopener noreferrer">Iran, Tehran, Azadi ... <i class="bi bi-geo-alt-fill"></i></a>
    </div>
</header>