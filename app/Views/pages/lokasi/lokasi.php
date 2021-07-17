<?= $this->extend('layouts/home') ?>
<?= $this->section('content') ?>
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Dashboard</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->
    <!-- Page Header -->
    <div class="page-header position-relative">
        <div class="header-title">
            <h1>
                Data Lokasi
            </h1>
        </div>
    </div>
    <!-- /Page Header -->
    <!-- Page Body -->
    <div class="page-body">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <?= $this->include('components/alert') ?>
                <div class="widget">
                    <div class="widget-header ">
                        <button data-target="#modal-tambah" data-toggle="modal" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Tambah</button>
                    </div>
                    <div class="widget-body">
                        <table class="table table-striped table-bordered table-hover" id="simpledatatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lokasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lokasi as $data) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_lokasi'] ?></td>
                                        <td>
                                            <a href="#modal-ubah<?= $data['id_lokasi'] ?>" data-toggle="modal" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="/lokasi/hapus/<?= $data['id_lokasi'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-tambah">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="mySmallModalLabel">Form Lokasi</h4>
            </div>
            <div class="modal-body">
                <form action="/lokasi" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" required name="lokasi" class="form-control" placeholder="Nama Lokasi">
                    </div>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php foreach ($lokasi as $data) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-ubah<?= $data['id_lokasi'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Form Lokasi</h4>
                </div>
                <div class="modal-body">
                    <form action="/lokasi/ubah/<?= $data['id_lokasi'] ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input type="text" value="<?= $data['nama_lokasi'] ?>" required name="lokasi" class="form-control" placeholder="Nama Lokasi">
                        </div>
                        <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $this->endSection() ?>