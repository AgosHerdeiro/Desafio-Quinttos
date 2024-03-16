<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Vista</title>
</head>
<body>
<div class="mt-5 fs-5">
    <h1 class="text-center mt-5 mb-2">Crear tareas</h1>
    <div class="d-flex justify-content-center">
        <form method="post" action="">
            <label for="titulo">Título:</label>
            <input class="form-control" type="text" id="titulo" name="titulo" required><br><br>

            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea><br><br>

            <div class="d-flex justify-content-center">
            <button type="submit" name="guardar" class="btn btn-primary fs-5">Guardar</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
