<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="images/pedidos.png">
  <title>Pedidos Pendientes - Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/pedidos.css') }}">
</head>
<body>

  <h1>Pedidos Pendientes</h1>

  <table class="tabla-pedidos">
    <thead>
      <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Producto</th>
        <th>Estado</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>PD201</td>
        <td>Laura Mendoza</td>
        <td>Camiseta DryFit Deportiva</td>
        <td>Pendiente</td>
        <td><button class="btn-entregar" onclick="tomarPedido(this)">Tomar pedido</button></td>
      </tr>
      <tr>
        <td>PD202</td>
        <td>Carlos Ramírez</td>
        <td>Sudadera Clásica Unisex</td>
        <td>Pendiente</td>
        <td><button class="btn-entregar" onclick="tomarPedido(this)">Tomar pedido</button></td>
      </tr>
      <tr>
        <td>PD203</td>
        <td>Valentina Ruiz</td>
        <td>Leggings Deportivos Mujer</td>
        <td>Pendiente</td>
        <td><button class="btn-entregar" onclick="tomarPedido(this)">Tomar pedido</button></td>
      </tr>
      <tr>
        <td>PD204</td>
        <td>Sebastián López</td>
        <td>Buzo Deportivo Hombre</td>
        <td>Pendiente</td>
        <td><button class="btn-entregar" onclick="tomarPedido(this)">Tomar pedido</button></td>
      </tr>
    </tbody>
  </table>

  <a href={{'repartidor'}} class="btn-regresar">← Volver al Panel</a>

  <script>
    function tomarPedido(boton) {
      alert("Pedido asignado. ¡Entrega la prenda deportiva con responsabilidad! 🏃‍♂️📦");
      boton.textContent = "En camino...";
      boton.disabled = true;
      boton.style.backgroundColor = "#aaa";
    }
  </script>

</body>
</html>
