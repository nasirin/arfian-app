<?= $this->extend('layouts/home2') ?>
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
                <?= $odcTitle ?> & management core | Mancore
            </h1>
        </div>
    </div>
    <!-- /Page Header -->
    <!-- Page Body -->
    <div class="page-body">
        <div class="row">
            <div class="col-12">
                <div class="well">
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-hover" id="simpledatatable">
                            <thead>
                                <tr>
                                    <th colspan=" 3" style="text-align: center;">OLT</th>
                                    <th colspan="3" style="text-align: center;">FTM</th>
                                    <th colspan="3" style="text-align: center;">FTM</th>
                                    <th colspan="8" style="text-align: center;">SPLITTER</th>
                                    <th colspan="3" style="text-align: center;">FTM</th>
                                    <th colspan="3" style="text-align: center;">FTM</th>
                                    <th colspan="3" style="text-align: center;">FEEDER</th>
                                    <th colspan="8" style="text-align: center;">ODC</th>
                                    <th colspan="3" style="text-align: center;">DISTRIBUSI</th>
                                    <th style="text-align: center;">ODP</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                                <tr>
                                    <th class="table-lebar">OLT</th>
                                    <th>MODUL</th>
                                    <th>PORT</th>

                                    <th>FRAME COUNT</th>
                                    <th>PANEL</th>
                                    <th>PORT</th>
                                    <th>FRAME COUNT</th>
                                    <th>PANEL</th>
                                    <th>PORT</th>

                                    <th>FRAME COUNT</th>
                                    <th>PANEL</th>
                                    <th>CORE</th>
                                    <th>NAMA SPLITTER</th>
                                    <th>OUT SPLITTER</th>
                                    <th>FRAME COUNT</th>
                                    <th>PANEL</th>
                                    <th>CORE</th>

                                    <th>FRAME COUNT</th>
                                    <th>PANEL</th>
                                    <th>PORT</th>
                                    <th>FRAME COUNT</th>
                                    <th>PANEL</th>
                                    <th>PORT</th>

                                    <th>NAMA FEEDER</th>
                                    <th>KAP FEEDER</th>
                                    <th>CORE</th>

                                    <th>NAMA ODC</th>
                                    <th>KAP ODC</th>
                                    <th>PANEL (IN)</th>
                                    <th>PORT</th>
                                    <th>SPLITTER</th>
                                    <th>OUT</th>
                                    <th>PANEL (OUT)</th>
                                    <th>PORT</th>

                                    <th>NAMA DIST</th>
                                    <th>KAP DIST</th>
                                    <th>CORE</th>

                                    <th>NAMA ODP</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($odc as $data) : ?>
                                    <tr>
                                        <td class="table-lebar"><?= $data['olt'] ?></td>
                                        <td><?= $data['modul'] ?></td>
                                        <td><?= $data['port_olt'] ?></td>

                                        <td><?= $data['frame_count_ftm_1'] ?></td>
                                        <td><?= $data['panel_ftm_1'] ?></td>
                                        <td><?= $data['port_ftm_1'] ?></td>
                                        <td><?= $data['frame_count_ftm_2'] ?></td>
                                        <td><?= $data['panel_ftm_2'] ?></td>
                                        <td><?= $data['port_ftm_2'] ?></td>

                                        <td><?= $data['frame_count_spliter_1'] ?></td>
                                        <td><?= $data['panel_spliter_1'] ?></td>
                                        <td><?= $data['core_1'] ?></td>
                                        <td><?= $data['nama_spliter'] ?></td>
                                        <td><?= $data['out_spliter'] ?></td>
                                        <td><?= $data['frame_count_spliter_2'] ?></td>
                                        <td><?= $data['panel_spliter_2'] ?></td>
                                        <td><?= $data['core_2'] ?></td>

                                        <td><?= $data['frame_count_ftm_3'] ?></td>
                                        <td><?= $data['panel_ftm_3'] ?></td>
                                        <td><?= $data['port_ftm_3'] ?></td>
                                        <td><?= $data['frame_count_ftm_4'] ?></td>
                                        <td><?= $data['panel_ftm_4'] ?></td>
                                        <td><?= $data['port_ftm_4'] ?></td>

                                        <td><?= $data['nama_feeder'] ?></td>
                                        <td><?= $data['kap_feeder'] ?></td>
                                        <td><?= $data['core_feeder'] ?></td>

                                        <td><?= $data['nama_odc'] ?></td>
                                        <td><?= $data['kap_odc'] ?></td>
                                        <td><?= $data['panel_in'] ?></td>
                                        <td><?= $data['port_odc_1'] ?></td>
                                        <td><?= $data['spliter_odc'] ?></td>
                                        <td><?= $data['out_odc'] ?></td>
                                        <td><?= $data['panel_out'] ?></td>
                                        <td><?= $data['port_odc_2'] ?></td>

                                        <td><?= $data['nama_dist'] ?></td>
                                        <td><?= $data['kap_dist'] ?></td>
                                        <td><?= $data['core_dist'] ?></td>

                                        <td><?= $data['odp'] ?></td>
                                        <td>
                                            <a href="/sto/odc/ubah/<?= $data['id_all'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="/data/hapus/<?= $data['id_all'] ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
<?= $this->endSection() ?>