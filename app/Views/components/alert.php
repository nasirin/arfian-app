<?php if (session('success')) : ?>
    <div class="alert alert-success fade in">
        <button class="close" data-dismiss="alert">
            ×
        </button>
        <i class="fa-fw fa fa-check"></i>
        <strong>Success</strong> <?= session('success') ?>
    </div>
<?php elseif (session('error')) : ?>
    <div class="alert alert-warning fade in">
        <button class="close" data-dismiss="alert">
            ×
        </button>
        <i class="fa-fw fa fa-warning"></i>
        <strong>Warning</strong> <?= session('error') ?>
    </div>
<?php endif; ?>