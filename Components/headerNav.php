<header class="px-2">
    <div class="d-flex justify-content-between py-2">
        <img class="img-fluid" src="#" alt="Auto Parts Website">
        <span class="nav-date"> <?php echo date('Y/m/d D'); ?> <i class="bi bi-calendar"></i></span>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav m-auto">
                    <?php require_once "headerNavComponents/navbarNav.php"; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>