<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>


<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row animate__animated animate__backInDown">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url('/assets/images/carousel/login-image.jpg') ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('/assets/images/carousel/login-image.jpg') ?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('/assets/images/carousel/login-image.jpg') ?>" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- end carousel -->
        </div>

        <!-- end container-fluid -->
    </div>
    <!-- end content wrapper -->
</div>
<?= $this->endSection() ?>;