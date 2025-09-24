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

    <form class="login-form" action="{{ route('register.store') }}" method="POST">
      @csrf

      <label for="nombre">Nombre Completo</label>
      <input type="text" id="nombre" name="name" value="{{ old('name') }}" placeholder="Ingresa tu nombre completo" required>

      <label for="correo">Correo Electrónico</label>
      <input type="email" id="correo" name="useCorreo" value="{{ old('useCorreo') }}" placeholder="ejemplo@correo.com" required>

      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="Username" value="{{ old('Username') }}" placeholder="Crea tu usuario" required>

      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="password" placeholder="Crea una contraseña" required>

      <label for="confirmar">Confirmar Contraseña</label>
      <input type="password" id="confirmar" name="password_confirmation" placeholder="Repite tu contraseña" required>

      <label for="telefono">Teléfono</label>
      <input type="tel" id="telefono" name="useTelefono" value="{{ old('useTelefono') }}" placeholder="+57 300 000 0000">

      <label for="direccion">Dirección</label>
      <input type="text" id="direccion" name="Direccion" value="{{ old('Direccion') }}" placeholder="Ingresa tu dirección">    

      <label for="fecha">Fecha de nacimiento</label>
      <input type="date" id="fecha" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">

      <label for="barrio">Barrio</label>
      <input type="text" id="barrio" name="Barrio" value="{{ old('Barrio') }}" placeholder="Ingresa tu barrio">

      <button type="submit">Registrarse</button>
    </form>
  </div>
    <a href="{{ url('/login') }}" class="btn-volver-home">Volver</a>

</body>
</html>



