<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro de usuarios</h1>
    <h2>Escribe los datos: </h2>
    <form method="POST" action="">
        <label for="nombre">Nombre del usuario: </label>
        <textarea type="text" step="any" name="nombre" required></textarea>
        <br></br>
        <label for="usuario">Nombre de usuario: </label>
        <textarea type="text" step="any" name="usuario" required></textarea>
        <br></br>
        <label for="contraseña">Contraseña: </label>
        <textarea type="text" step="any" name="Contraseña" required></textarea>
        <br></br>
        <label for="confirmacion">Confirmacion de la contraseña: </label>
        <textarea type="text" step="any" name="confirmacion" required></textarea>
        <br></br>
        <button type="submit" name="registrar">Registrarse</button>
    </form>
</body>
</html>