<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card card-widget widget-user">
                <div class="widget-user-header text-white" style="background: url(<?= base_url('/assets/images/login-image.jpg') ?>); width: 100%;">
                </div>
                <div class="card-footer">
                    <h3 class="text-center mb-3">Pencarian Data Prestasi</h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <form action="#" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label">Kelas : </label>
                                    <div class="col">
                                        <select class="form-control" name="kelas" id="">
                                            <option>X OTKP</option>
                                            <option>X AKKL</option>
                                            <option>X MM</option>
                                            <option>XI OTKP</option>
                                            <option>XI AKKL</option>
                                            <option>XI MM</option>
                                            <option>XII OTKP</option>
                                            <option>XII AKKL</option>
                                            <option>XII MM</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">NIS :</label>
                                <div class="col">
                                    <input type="text" name="nis" id="" class="form-control" placeholder="Isikan NIS" aria-describedby="helpId">
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for=""> </label>
                                <div class="col">
                                    <button type="submit" class="btn btn-secondary"> Cari </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start tabel prestasi -->
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h5 class="text-center">Daftar Prestasi</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>