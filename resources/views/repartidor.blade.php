<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="imagenes/x-icon" href="images/repar.png">
  <title>Panel Repartidor</title>
  <link rel="stylesheet" href="{{ asset('css/repartidor-style.css')}}">
</head>
<body>

  <div class="header">
    <h1>Panel del Repartidor</h1>
  </div>

  <div class="container">

    <div class="card">
      <nav>
        <a class="btn" href="{{'/usuario'}}">Inicio</a>
        <a class="btn" href="pedidos.html">Pedidos Pendientes</a>
        <a class="btn" href="#">Historial de Entregas</a>
        <a class="btn" href="{{'/login'}}">Cerrar Sesión</a>
      </nav>
    </div>

    <div class="card">
      <h2>Bienvenido, Repartidor</h2>
      <p>Gestiona tus entregas de manera rápida y eficiente.</p>
    </div>

    <div class="card">
      <h2>Pedidos Pendientes</h2>
      <table class="table">
        <thead>
          <tr>
            <th>ID Pedido</th>
            <th>Cliente</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#023</td>
            <td>Laura Torres</td>
            <td>Carrera 9 #45-32</td>
            <td>312 555 8899</td>
            <td><button class="btn">Entregado</button></td>
          </tr>
        </tbody>
      </table>
    </div>

    <section style="margin-top: 40px;">
      <h2 style="color: #e53935; text-align: center;">Ubicación de la Tienda</h2>
      <div style="display: flex; justify-content: center;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.7523800795246!2d-74.08175488523878!3d4.609710143730961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99f7c9461e8d%3A0x52bb7c2eb6cbd540!2sPlaza%20de%20Bol%C3%ADvar%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1718735761536!5m2!1ses-419!2sco"
          height="300" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </section>

    <div class="card">
      <h2>Historial de Entregas</h2>
      <ul>
        <li>Pedido #020 – Entregado el 15/06/2025</li>
        <li>Pedido #019 – Entregado el 14/06/2025</li>
      </ul>
    </div>

  </div>
</body>
</html>