<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row ">
        <div class="col-6">
            <div class="card card-blue">
                <div class="card-header ">
                    <form action="" method="post">
                        <div class="card-title" style="text-align: center;">
                            Login Siswa
                        </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">NIS : </label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Password : </label>
                        <input type="password" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="card-footer">
                    <span class="btn btn-primary float-right">Login</span>
                </div>
                </form>
            </div>
        </div>
        <div class="col-6">
            <form action="" method="post">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title" style="text-align: center;">
                            Login Guru
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">NIY : </label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Password :</label>
                            <input type="password" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="btn btn-info float-right">Login</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end content wrapper -->
</div>
<?= $this->endSection(); ?>