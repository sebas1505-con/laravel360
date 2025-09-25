<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="imagenes/x-icon" href="images/Re.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Compra - Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
</head>
<body>
  <div class="formulario-container">
    <h2>📝 Finalizar compra</h2>
    

    <form id="formularioCompra" method="POST" action="{{ route('ventas.store') }}">
  @csrf

  <label for="cantProducto">Cantidad de productos:</label>
  <input type="number" id="cantProducto" name="cantProducto" required>

  <label for="metodoEnvio">Método de envío:</label>
  <select name="metodoEnvio" id="metodoEnvio" required>
      <option value="domicilio">Domicilio</option>
  </select>

  <label for="totalVenta">Total de la venta:</label>
  <input type="number" step="0.01" id="totalVenta" name="totalVenta" required>

  <label for="metodo_de_pago">Método de pago:</label>
  <select name="metodo_de_pago" id="metodo_de_pago" required>
      <option value="">Seleccionar...</option>
      <option value="efectivo">Efectivo</option>
      <option value="tarjeta">Tarjeta</option>
      <option value="transferencia">Transferencia</option>
  </select>
  <button type="submit">Confirmar compra</button>
  @if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif
</form>
  </div>
  <a href="{{ url('/usuario') }}" class="btn-volver-home">Volver</a>
</body>
</html>
