<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="{{ asset('css/style.Repartidor.css') }}">

  <script>
    function validarFormulario() {
      const rol = document.getElementById("rol").value;

      if (rol === "") {
        alert("Por favor selecciona un rol antes de registrarte");
        return false;
      }

      if (rol === "cliente") {
        window.location.href = "cliente/index.html";
      } else if (rol === "administrador") {
        window.location.href = "admin/index.html";
      } else if (rol === "repartidor") {
        window.location.href = "repartidor/index.html";
      }

      return false; 
    }
  </script>
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      <h2>Formulario de Registro</h2>
    </div>
    <form class="login-form" action="{{ route('register.repartidor.store') }}" method="POST">
    @csrf

    @if ($errors->any())
      <div class="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    

    <label for="nombre">Nombre Completo</label>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingresa tu nombre completo" required>

    <label for="correo">Correo Electrónico</label>
    <input type="email" id="correo" name="correo" value="{{ old('correo') }}" placeholder="ejemplo@correo.com" required>

    <label for="usuario">Usuario</label>
    <input type="text" id="usuario" name="usuario" value="{{ old('usuario') }}" placeholder="Crea tu usuario" required>

    <label for="contrasena">Contraseña</label>
    <input type="password" id="contrasena" name="contrasena" placeholder="Crea una contraseña" required>

    <label for="contrasena_confirmation">Confirmar Contraseña</label>
    <input type="password" id="contrasena_confirmation" name="contrasena_confirmation" placeholder="Repite tu contraseña" required>

    <label for="placa">Número de placa</label>
    <input type="text" name="placa" id="placa" placeholder=" Ejemplo SFQ-072 " required>

    <label for="telefono">Teléfono</label>
    <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="+57 300 000 0000">

    <label for="vehiculo">Tipo de Vehículo</label>
    <select id="vehiculo" name="vehiculo">
        <option value="">-- Selecciona tu vehículo --</option>
        <option value="moto" {{ old('vehiculo')=='moto'?'selected':'' }}>Moto</option>
        <option value="carro" {{ old('vehiculo')=='carro'?'selected':'' }}>Carro</option>
    </select>

    <label for="fecha">Fecha de nacimiento</label>
    <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}">

    <button type="submit">Registrarse</button>
    </form>
 </div>
</body>
</html>

