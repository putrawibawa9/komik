<nav class="navbar navbar-expand-lg bg-primary sticky-top" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="beranda.php">KOMIKERS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="beranda.php">Beranda</a>
                </li>
                <?php if($_SESSION['level'] == 0) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="komik.php">Komik</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="customer.php">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kasir.php">Kasir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dosen/index.php">Dosen</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="transaksi.php">Transaksi</a>
                </li> -->
                </ul>
                </ul>
                <div class="d-flex" role="search">
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </div>
             </div>
            </div>
         </nav>
        