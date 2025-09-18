<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="{{ asset('css/style-crear.css') }}">

  <script>
    function validarFormulario() {
      const rol = document.getElementById("rol").value;

      if (rol === "") {
        alert("Por favor selecciona un rol antes de registrarte");
        return false;
      }

      // Aquí puedes poner validaciones de campos (correo, contraseñas, etc.)
      // Por ahora solo redirige según el rol
      if (rol === "cliente") {
        window.location.href = "cliente/index.html";
      } else if (rol === "administrador") {
        window.location.href = "admin/index.html";
      } else if (rol === "repartidor") {
        window.location.href = "repartidor/index.html";
      }

      return false; // evita enviar el form real, solo redirige
    }
  </script>
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      
      <h2>Formulario de Registro</h2>
    </div>

    <form class="login-form" onsubmit="return validarFormulario()">
      <label for="nombre">Nombre Completo</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre completo">

      <label for="correo">Correo Electrónico</label>
      <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com">

      <label for="telefono">Teléfono</label>
      <input type="tel" id="telefono" name="telefono" placeholder="+57 300 000 0000">

      <label for="direccion">Dirección</label>
      <input type="text" id="direccion" name="direccion" placeholder="Ingresa tu dirección">  

      <label for="fecha">Fecha de nacimiento</label>
      <input type="date" id="fecha" name="fecha">

      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" placeholder="Crea tu usuario">

      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="contrasena" placeholder="Crea una contraseña">

      <label for="confirmar">Confirmar Contraseña</label>
      <input type="password" id="confirmar" name="confirmar" placeholder="Repite tu contraseña">
     

      <button type="submit">Registrarse</button>
    </form>
  </div>
</body>
</html>






