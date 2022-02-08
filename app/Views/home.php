<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>


<div class="content-wrapper">
    <div class="container" style="border-radius: 10px;">
        <div class="row">
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
            <!-- end carousel & row -->
        </div>
        <div class="row my-3">
            <div class="col-4 animate__animated animate__rubberBand">
                <div class="card">
                    <div class="card-header bg-primary">
                    </div>
                    <img class="card-img-top" src="<?= base_url('/assets/images/login-image.jpg') ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title ">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card animate__animated animate__rubberBand">
                    <div class="card-header bg-orange">
                    </div>
                    <img class="card-img-top" src="<?= base_url('/assets/images/logo-smk.png') ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card animate__animated animate__rubberBand">
                    <div class="card-header bg-success"></div>
                    <img class="card-img-top" src="<?= base_url('assets/images/logo-smk.png') ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    </div>
    <?= $this->endSection() ?>;