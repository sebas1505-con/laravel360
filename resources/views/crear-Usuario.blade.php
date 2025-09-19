<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="{{ asset('css/style-crear.css') }}">
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      <h2>Formulario de Registro</h2>
    </div>

    {{-- Mostrar errores de validación --}}
    @if ($errors->any())
      <div class="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form class="login-form" action="{{ url('/register') }}" method="POST">
      @csrf

      <label for="nombre">Nombre Completo</label>
      <input type="text" id="nombre" name="name" value="{{ old('name') }}" placeholder="Ingresa tu nombre completo">

      <label for="correo">Correo Electrónico</label>
      <input type="email" id="correo" name="email" value="{{ old('email') }}" placeholder="ejemplo@correo.com">

      <label for="telefono">Teléfono</label>
      <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="+57 300 000 0000">

      <label for="direccion">Dirección</label>
      <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}" placeholder="Ingresa tu dirección">    

      <label for="fecha">Fecha de nacimiento</label>
      <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}">
      
      <label for="barrio">Barrio</label>
      <input type="text" id="barrio" name="barrio" placeholder="Ingresa tu barrio">


      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" value="{{ old('usuario') }}" placeholder="Crea tu usuario">

      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="password" placeholder="Crea una contraseña">

      <label for="confirmar">Confirmar Contraseña</label>
      <input type="password" id="confirmar" name="password_confirmation" placeholder="Repite tu contraseña">

      <button type="submit">Registrarse</button>
    </form>
  </div>
</body>
</html>




