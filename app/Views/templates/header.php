<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary mb-2">
    <div class="container">
        <a href="<?= base_url() ?>" class="navbar-brand">
            <img src="<?= base_url('/assets/images/logo-smk.png') ?>" alt="SMK Logo" class="brand-image " style="opacity: 1">
            <span class="brand-text font-font-weight-bold ml-2">SIPP</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="order-1 order-md-3 navbar-nav ml-auto">
                <li class="nav-item <?php if ($stat == 'home') echo 'active ' ?>">
                    <a href="<?= base_url() ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item <?php if ($stat == 'prestasi') echo 'active ' ?>">
                    <a href="<?= base_url('Home/prestasi') ?>" class="nav-link">Prestasi</a>
                </li>
                <li class="nav-item <?php if ($stat == 'pelanggaran') echo 'active ' ?>">
                    <a href="<?= base_url('Home/pelanggaran') ?>" class=" nav-link mr-3">Pelanggaran</a>
                </li>
                <li class="nav-item">
                    <a name="" id="" class="btn btn-light bg-primary" href="#" role="button">Login</a>
                </li>
            </ul>
        </div>
</nav>
<!-- /.navbar -->