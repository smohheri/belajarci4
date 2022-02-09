<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <di class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <form action="<?= base_url('/Home/loginAdmin') ?>" method="post">
                <div class="card card-danger">
                    <div class="card-header">
                        Login Admin
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="username">User :</label>
                            <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Login" class="btn btn-danger float-right"></input>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-3">
        </div>
    </di>
</div>

<?= $this->endSection(); ?>