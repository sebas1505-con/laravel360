<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="images/Cuenta.png">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      <img class="logo" src="images/Logo.png" alt="Logo Deportes 360">
      <h2>Inicia sesión</h2>
    </div>
  <a href="{{ url('/inicio') }}" class="btn-volver-home">Volver</a>


    <form class="login-form">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario" placeholder="Correo electrónico" required>

      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>

      <button type="submit">Iniciar sesión</button>   
      <a href="{{ url('/registro/usuario') }}" class="btn-volver">¿Quieres Registrarte Con nosotros?</a>  
      <a href="#" class="recuperar">¿Olvidaste tu contraseña?</a>
    </form>
  </div>
</body>
</html>




