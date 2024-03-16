<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Vista</title>

</head>
<body>
<div class="m-5">
    <h1 class="text-center mt-5 mb-2">Listado de tareas</h1>
    <div class="container">
        <?php if (empty($tareas)): ?>
            <p class="text-center fs-5 mt-3">No hay tareas para mostrar.</p>
        <?php else: ?>
            <table class="table table-bordered mt-2" id="resultado">
                <thead>
                <tr class="table-light text-center fs-5">
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tareas as $tarea): ?>
                    <tr class="fs-5">
                        <td><?= $tarea['titulo'] ?></td>
                        <td><?= $tarea['descripcion'] ?></td>
                        <td><?= $tarea['estado'] == 1 ? 'Completada' : 'No completada' ?></td>
                        <?php if ($tarea['estado'] == 0): ?>
                            <td class="text-center">
                                <form method="post" action="index.php">
                                    <input type="hidden" name="id" value="<?= $tarea['id'] ?>">
                                    <button type="submit" name="completar" class="btn btn-primary fs-5">Completar
                                    </button>
                                </form>
                            </td>
                        <?php elseif ($tarea['estado'] == 1): ?>
                            <td class="text-center">
                                <form method="post" action="index.php">
                                    <input type="hidden" name="id" value="<?= $tarea['id'] ?>">
                                    <button type="submit" name="deshacer" class="btn btn-primary fs-5">Deshacer</button>
                                </form>
                            </td>
                        <?php else: ?>
                            <td class="text-center">error</td>
                        <?php endif; ?>
                        <td class="text-center">
                            <form method="post" action="index.php">
                                <input type="hidden" name="id" value="<?= $tarea['id'] ?>">
                                <button type="submit" name="eliminar" class="btn btn-primary fs-5">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
