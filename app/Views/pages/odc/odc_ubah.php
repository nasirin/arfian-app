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
                <?= $odc['nama_odc'] ?> & management core | Mancore | Ubah
            </h1>
        </div>
    </div>
    <!-- /Page Header -->
    <!-- Page Body -->
    <div class="page-body">
        <?= $this->include('components/alert') ?>
        <form action="/data/update/<?= $odc['id_all'] ?>" method="post">
            <?= csrf_field() ?>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?= $this->include('components/alert') ?>

                    <h5 class="row-title before-themeprimary"><i class="fa fa-long-arrow-right themeprimary"></i>Form STO</h5>
                    <div id="simplewizard" class="wizard" data-target="#simplewizard-steps">
                        <ul class="steps">
                            <li data-target="#simplewizardstep1" class="active"><span class="step">1</span>Lokasi<span class="chevron"></span></li>
                            <li data-target="#simplewizardstep2"><span class="step">2</span>OLT<span class="chevron"></span></li>
                            <li data-target="#simplewizardstep3"><span class="step">3</span>FTM<span class="chevron"></span></li>
                            <li data-target="#simplewizardstep4"><span class="step">4</span>Splitter<span class="chevron"></span></li>
                            <li data-target="#simplewizardstep5"><span class="step">5</span>Feeder<span class="chevron"></span></li>
                            <li data-target="#simplewizardstep6"><span class="step">6</span>ODC<span class="chevron"></span></li>
                            <li data-target="#simplewizardstep7"><span class="step">7</span>Distribusi<span class="chevron"></span></li>
                            <li data-target="#simplewizardstep8"><span class="step">8</span>ODP<span class="chevron"></span></li>
                            <li data-target="#simplewizardstep9"><span class="step">9</span>Simpan<span class="chevron"></span></li>
                        </ul>
                    </div>
                    <div class="step-content" id="simplewizard-steps">

                        <!-- lokasi -->
                        <div class="step-pane active" id="simplewizardstep1">
                            <div class="form-group">
                                <label>Lokasi</label>
                                <select name="lokasi" id="" class="form-control" required autofocus>
                                    <option value="<?= $odc['id_lokasi'] ?>"><?= $odc['nama_lokasi'] ?> (selected)</option>
                                    <option value="">--- Pilih Lokasi ---</option>
                                    <?php foreach ($lokasi as $data) : ?>
                                        <option value="<?= $data['id_lokasi'] ?>"><?= $data['nama_lokasi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- olt -->
                        <div class="step-pane" id="simplewizardstep2">
                            <div class="form-group">
                                <label>OLT</label>
                                <input type="text" name="namaOLT" class="form-control" placeholder="Nama OLT" value="<?= $odc['olt'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Modul</label>
                                <input type="text" name="modulOLT" class="form-control" placeholder="Modul OLT" value="<?= $odc['modul'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Port</label>
                                <input type="text" name="portOLT" class="form-control" placeholder="Port OLT" value="<?= $odc['port_olt'] ?>">
                            </div>
                        </div>

                        <!-- ftm -->
                        <div class="step-pane" id="simplewizardstep3">
                            <p>FTM 1</p>
                            <div class="form-group">
                                <label>Frame Count</label>
                                <input type="text" name="frameCountFTM1" class="form-control" placeholder="Frame Count" value="<?= $odc['frame_count_ftm_1'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Panel</label>
                                <input type="text" name="panelFTM1" class="form-control" placeholder="Panel FTM" value="<?= $odc['panel_ftm_1'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Port</label>
                                <input type="text" name="portFTM1" class="form-control" placeholder="Port FTM" value="<?= $odc['port_ftm_1'] ?>">
                            </div>
                            <hr>
                            <p>FTM 2</p>
                            <div class="form-group">
                                <label>Frame Count</label>
                                <input type="text" name="frameCountFTM2" class="form-control" placeholder="Frame Count" value="<?= $odc['frame_count_ftm_2'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Panel</label>
                                <input type="text" name="panelFTM2" class="form-control" placeholder="Panel FTM" value="<?= $odc['panel_ftm_2'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Port</label>
                                <input type="text" name="portFTM2" class="form-control" placeholder="Port FTM" value="<?= $odc['port_ftm_2'] ?>">
                            </div>
                            <hr>
                            <p>FTM 3</p>
                            <div class="form-group">
                                <label>Frame Count</label>
                                <input type="text" name="frameCountFTM3" class="form-control" placeholder="Frame Count" value="<?= $odc['frame_count_ftm_3'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Panel</label>
                                <input type="text" name="panelFTM3" class="form-control" placeholder="Panel FTM" value="<?= $odc['panel_ftm_3'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Port</label>
                                <input type="text" name="portFTM3" class="form-control" placeholder="Port FTM" value="<?= $odc['port_ftm_3'] ?>">
                            </div>
                            <hr>
                            <p>FTM 4</p>
                            <div class="form-group">
                                <label>Frame Count</label>
                                <input type="text" name="frameCountFTM4" class="form-control" placeholder="Frame Count" value="<?= $odc['frame_count_ftm_4'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Panel</label>
                                <input type="text" name="panelFTM4" class="form-control" placeholder="Panel FTM" value="<?= $odc['panel_ftm_4'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Port</label>
                                <input type="text" name="portFTM4" class="form-control" placeholder="Port FTM" value="<?= $odc['port_ftm_4'] ?>">
                            </div>
                        </div>

                        <!-- spliter -->
                        <div class="step-pane" id="simplewizardstep4">
                            <div class="form-group">
                                <label>Frame Count</label>
                                <input type="text" class="form-control" name="frameCountSpliter1" placeholder="Frame Count Spliter" value="<?= $odc['frame_count_spliter_1'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Panel</label>
                                <input type="text" class="form-control" name="panelSpliter1" placeholder="Panel Spliter" value="<?= $odc['panel_spliter_1'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Core</label>
                                <input type="text" class="form-control" name="coreSpliter1" placeholder="Core Spliter" value="<?= $odc['core_1'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Spliter</label>
                                <input type="text" class="form-control" name="namaSpliter" placeholder="Nama Spliter" value="<?= $odc['nama_spliter'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Out Spliter</label>
                                <input type="text" class="form-control" name="outSpliter" placeholder="Out Spliter" value="<?= $odc['out_spliter'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Frame Count</label>
                                <input type="text" class="form-control" name="frameCountSpliter2" placeholder="Frame Count Spliter" value="<?= $odc['frame_count_spliter_2'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Panel</label>
                                <input type="text" class="form-control" name="panelSpliter2" placeholder="Panel Spliter" value="<?= $odc['panel_spliter_2'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Core</label>
                                <input type="text" class="form-control" name="coreSpliter2" placeholder="Core Spliter" value="<?= $odc['core_2'] ?>">
                            </div>
                        </div>

                        <!-- feeder -->
                        <div class="step-pane" id="simplewizardstep5">
                            <div class="form-group">
                                <label>Nama Feeder</label>
                                <input type="text" name="namaFeeder" placeholder="Nama Feeder" class="form-control" value="<?= $odc['nama_feeder'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Kap Feeder</label>
                                <input type="text" name="kapFeeder" placeholder="Kap Feeder" class="form-control" value="<?= $odc['kap_feeder'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Core</label>
                                <input type="text" name="coreFeeder" placeholder="Core" class="form-control" value="<?= $odc['core_feeder'] ?>">
                            </div>
                        </div>

                        <!-- ODC -->
                        <div class="step-pane" id="simplewizardstep6">
                            <div class="form-group">
                                <label>Nama ODC</label>
                                <input type="text" name="namaODC" class="form-control" placeholder="Nama ODC" value="<?= $odc['nama_odc'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Kap ODC</label>
                                <input type="text" name="kapODC" class="form-control" placeholder="Kap ODC" value="<?= $odc['kap_odc'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Panel (IN)</label>
                                <input type="text" name="panelInODC" class="form-control" placeholder="Panel (IN)" value="<?= $odc['panel_in'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Port</label>
                                <input type="text" name="portODC1" class="form-control" placeholder="Port" value="<?= $odc['port_odc_1'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Splitter</label>
                                <input type="text" name="splitterODC" class="form-control" placeholder="Splitter" value="<?= $odc['spliter_odc'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Out</label>
                                <input type="number" min="0" name="outODC" class="form-control" placeholder="Out" value="<?= $odc['out_odc'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Panel (Out)</label>
                                <input type="text" name="panelOutODC" class="form-control" placeholder="Panel (Out)" value="<?= $odc['panel_out'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Port</label>
                                <input type="text" name="portODC2" class="form-control" placeholder="Port" value="<?= $odc['port_odc_2'] ?>">
                            </div>
                        </div>

                        <!-- distribusi -->
                        <div class="step-pane" id="simplewizardstep7">
                            <div class="form-group">
                                <label>Nama Dist</label>
                                <input type="text" name="namaDist" placeholder="Nama Distribusi" class="form-control" value="<?= $odc['nama_dist'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Kap Dist</label>
                                <input type="text" name="kapDist" placeholder="Kap Distribusi" class="form-control" value="<?= $odc['kap_dist'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Core</label>
                                <input type="text" name="coreDist" placeholder="Core Distribusi" class="form-control" value="<?= $odc['core_dist'] ?>">
                            </div>
                        </div>

                        <!-- odp -->
                        <div class="step-pane" id="simplewizardstep8">
                            <div class="form-group">
                                <label>Nama ODP</label>
                                <input type="text" name="namaODP" placeholder="Nama ODP" class="form-control" value="<?= $odc['odp'] ?>">
                            </div>
                        </div>

                        <!-- save -->
                        <div class="step-pane" id="simplewizardstep9">
                            <p>Pastikan semua data sudah terisi dengan benar, Tekan tombol di bawah untuk menyimpan</p>
                            <button class="btn btn-info" type="submit"><i class="fa fa-disk"></i> Simpan Perubahan</button>
                        </div>
                    </div>
                    <div class="actions actions-footer" id="simplewizard-actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm btn-prev"> <i class="fa fa-angle-left"></i>Prev</button>
                            <button type="button" class="btn btn-default btn-sm btn-next" data-last="Finish">Next<i class="fa fa-angle-right"></i></button>
                            <!-- <button type="submit" class="btn btn-default btn-sm btn-next">Save<i class="fa fa-check"></i></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /Page Body -->
</div>
<?= $this->endSection() ?>