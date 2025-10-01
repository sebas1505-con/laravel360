<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="{{ asset('css/style.Admin.css') }}">
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      <h2>Formulario de Registro</h2>
    </div>

    <form class="login-form" action="{{ route('administradores.store') }}" method="POST">
    @csrf

    <label for="usuario">Usuario</label>
    <input type="text" id="usuario" name="usuario" placeholder="Crea tu usuario" required>

    <label for="correo">Correo Electrónico</label>
    <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>

    <label for="telefono">Teléfono</label>
    <input type="tel" id="telefono" name="telefono" placeholder="+57 300 000 0000" required>

    <label for="codigo">Codigo de Ingreso</label>
    <input type="text" id="codigo" name="codigo" placeholder="ADM-000" required>   

    <label for="contrasena">Contraseña</label>
    <input type="password" id="contrasena" name="contrasena" placeholder="Crea una contraseña" required>

    <label for="confirmar">Confirmar Contraseña</label>
    <input type="password" id="contrasena" name="contrasena_confirmation" placeholder="Repite tu contraseña" required>

    <button type="submit" onclick="alert('enviando...')">Registrarse</button>

  </form>

</div>
   <a href="{{ url('/menu') }}" class="btn-volver-home">Volver</a>
</body>
</html>