<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        text-align: center;
    }

    table,
    tr,
    td {
        border: solid 1px #000;
    }

    table {
        margin: auto;
    }
    </style>
</head>

<body>

    <h1>
        <?= $titulo ?>
    </h1>

    <p>
        <?php echo $conteudo ?>
    </p>


    <table>

        <tr>
            <th>ID</th>
            <th>Cidade</th>
            <th>Estado</th>
        </tr>

        <?php foreach ($cidades as $value) { ?>

        <tr>
            <td> <?= $value['id'] ?> </td>
            <td> <?= $value['cidade'] ?> </td>
            <td> <?= $value['estado'] ?> </td>
        </tr>

        <?php } ?>

    </table>

</body>

</html>