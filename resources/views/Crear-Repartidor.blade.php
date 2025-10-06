<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro Repartidor</title>
  <link rel="stylesheet" href="{{ asset('css/alerts.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.Repartidor.css') }}">
</head>
<body>
  <a href="{{ url('/menu') }}" class="btn-volver-home">Volver</a>
  
  {{-- ALERTA DINÁMICA --}}
  @if(session('mensaje'))
    <div class="alerta alerta--{{ session('tipo') }}">
      {{ session('mensaje') }}
      <button class="alerta-close" onclick="this.parentElement.remove();">&times;</button>
    </div>
  @endif
  
  <div class="login-container">
    <div class="login-header">
      <h2>Registro Repartidor</h2>
    </div>

    {{-- Errores --}}
    @if ($errors->any())
      <div class="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form class="login-form" action="{{ route('register.repartidor.store') }}" method="POST">
      @csrf

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
      <input type="text" name="placa" id="placa" placeholder="Ejemplo SFQ-072" required>

      <label for="telefono">Teléfono</label>
      <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="+57 300 000 0000">

      <label for="vehiculo">Tipo de Vehículo</label>
<select id="vehiculo" name="vehiculo" required>
    <option value="">-- Selecciona tu vehículo --</option>
    <option value="moto" {{ old('vehiculo') == 'moto' ? 'selected' : '' }}>Moto</option>
    <option value="carro" {{ old('vehiculo') == 'carro' ? 'selected' : '' }}>Carro</option>
</select>


      <label for="fecha">Fecha de nacimiento</label>
      <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}">

      <button type="submit" onclick="alert('Creando su cuenta como Repartidor')">Registrarse</button>
    </form>
  </div>
  <script src="{{ asset('js/alerts.js') }}"></script>
</body>
</html>

