<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Teste</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 80px;
    }

    .table th {
        background-color: #007bff;
        color: white;
        text-align: center;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    .btn-custom {
        display: flex;
        align-items: center;
        gap: 5px;
        text-decoration: none;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Meu Site</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center my-4"><?= $titulo ?></h1>


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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>