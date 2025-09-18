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
    <form id="formularioCompra">
      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="correo">Correo electrónico:</label>
      <input type="email" id="correo" name="correo" required>

      <label for="direccion">Dirección de envío:</label>
      <input type="text" id="direccion" name="direccion" required>

      <label for="telefono">Teléfono de contacto:</label>
      <input type="tel" id="telefono" name="telefono" required>

      <label for="metodoPago">Método de pago:</label>
      <select id="metodoPago" name="metodoPago" required>
        <option value="">Seleccionar...</option>
        <option value="efectivo">Pago contra entrega</option>
        <option value="tarjeta">Tarjeta de crédito/débito</option>
        <option value="transferencia">Transferencia bancaria</option>
      </select>

      <button type="submit">Confirmar compra</button>
    </form>
  </div>

  <script>
    document.getElementById('formularioCompra').addEventListener('submit', function(e) {
      e.preventDefault();
      alert("✅ ¡Compra realizada con éxito! Gracias por tu pedido.");
      localStorage.removeItem("carrito");
      window.location.href = "usuario.html";
    });
  </script>
</body>
</html>
