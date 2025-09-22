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
  <a href="{{ url('/welcome') }}" class="btn-volver-home">Volver</a>

<form class="login-form" action="{{ route('login') }}" method="POST">
    @csrf

    @if(session('success'))
        <div class="success-message" style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
      <div class="error">
          {{ $errors->first() }}
      </div>
    @endif

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>

    <button type="submit">Iniciar sesión</button>   
    <a href="{{ url('/menu') }}" class="btn-volver">¿Quieres registrarte con nosotros?</a>  
    
</form>


  </div>
</body>
</html>





