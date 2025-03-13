<?php session() ?>

<?= $this->extend('Templates_admin') ?>
<?= $this->section('content') ?>


<div class="container">

    <h1 class="text-center my-4"><?= $titulo ?>
    </h1>


    <div class="d-flex justify-content-between mb-3">
        <h3 class="text-primary">Lista de Cidades</h3>
        <a href="<?= base_url('cidades/new') ?>" method="post" class=" btn btn-success btn-custom">
            <i class="bi bi-plus-circle"></i> Novo
        </a>
    </div>

    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                echo base_url();
                foreach ($cidades as $value) {
                    ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['cidade'] ?></td>
                <td><?= $value['estado'] ?></td>
                <td>
                    <a href="<?= base_url('cidades/edit/'. $value['id']) ?>"
                        class="btn btn-warning btn-sm btn-custom text-white">
                        <i class="bi bi-pencil-square"></i> Alterar
                    </a>
                </td>
                <td>
                    <a href="#" class="btn btn-danger btn-sm btn-custom">
                        <i class="bi bi-x-circle"></i> Excluir
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php $this->endSection('content') ?>