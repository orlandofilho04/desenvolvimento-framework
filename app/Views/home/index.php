<?php session() ?>

<?= $this->extend('Templates_admin') ?>
<?= $this->section('content') ?>


<div class="container">

    <h1 class="text-center my-4"><?= $titulo ?>
    </h1>
    <p> <?= $conteudo ?> </p>

</div>

<?php $this->endSection('content') ?>