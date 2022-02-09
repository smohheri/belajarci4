<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row ">
        <div class="col-6">
            <div class="card card-blue">
                <div class="card-header ">
                    <form action="<?= base_url('/Home/loginSiswa') ?>" method="post">
                        <div class="card-title" style="text-align: center;">
                            Login Siswa
                        </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nis">NIS : </label>
                        <input type="text" class="form-control" name="nisSiswa" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="passwordSiswa">Password : </label>
                        <input type="password" class="form-control" name="passwordSiswa" id="" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary float-right" value="Login"></input>
                </div>
                </form>
            </div>
        </div>
        <div class="col-6">
            <form action="<?= base_url('/Home/loginGuru') ?>" method="post">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title" style="text-align: center;">
                            Login Guru
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (session()->getFlashdata('error')) { ?>
                            <?= session()->getFlashdata('error'); ?>
                        <?php } ?>
                        <div class="form-group">
                            <label for="niyGuru">NIY : </label>
                            <input type="text" class="form-control" name="niyGuru" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="passwordGuru">Password :</label>
                            <input type="password" class="form-control" name="passwordGuru" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-info float-right" value="Login"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end content wrapper -->
</div>
<?= $this->endSection(); ?>