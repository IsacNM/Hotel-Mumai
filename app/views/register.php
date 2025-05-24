<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro</h2>
    <form action="../public/index.php?action=register" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="rol">Rol:</label>
        <select name="rol" id="rol">
            <option value="admin">Administrador</option>
            <option value="recepcion">Recepción</option>
        </select><br><br>

        <button type="submit">Registrarse</button>
    </form>

    <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
</body>
</html>
