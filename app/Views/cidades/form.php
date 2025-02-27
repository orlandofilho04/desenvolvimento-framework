<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        max-width: 500px;
        margin-top: 80px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
        width: 100%;
    }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center text-primary mb-4">
            <?= ucfirst($form) . ' ' . $titulo; ?>
        </h1>

        <div class="card p-4">
            <form action="<?= base_url('cidades/create') ?>" method="post">
                <div class="mb-3">
                    <label for="cidades_nome" class="form-label">Nome da cidade</label>
                    <input type="text" class="form-control" name="cidades_nome" id="cidades_nome" placeholder="Cidade"
                        value="<?= $cidade['cidade'] ?>" required>
                </div>

                <div class=" mb-3">
                    <label for="cidades_estado" class="form-label">Nome do estado</label>
                    <input type="text" class="form-control" name="cidades_estado" id="cidades_estado"
                        placeholder="Estado" value="<?= $cidade['estado'] ?>" required>
                </div>

                <input type="hidden" name="cidades_id" value="<?= $cidade['id'] ?>">

                <!-- <a href="<?= base_url('cidades') ?>" class="btn btn-secondary btn-custom">
                    <i class="bi bi-arrow-left"></i> Voltar -->

                <button type="submit" class="btn btn-primary btn-custom">
                    <i class="bi bi-check-circle"></i> <?= ucfirst($form); ?> </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>