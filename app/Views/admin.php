<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <di class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <form action="" method="post">
                <div class="card card-danger">
                    <div class="card-header">
                        Login Admin
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">User :</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Password :</label>
                            <input type="password" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="card-footer">
                        <sapn class="btn btn-danger float-right">Login</sapn>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-3">
        </div>
    </di>
</div>

<?= $this->endSection(); ?>