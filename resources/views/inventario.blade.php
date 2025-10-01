
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gestión de Inventario - Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/inventario.css') }}">
  <link rel="icon" type="image/x-icon" href="images/inventario.png" />
</head>
<body>

  <header>
    <h1>Gestión de Inventario - Deportes 360</h1>
  </header>

  <main>
    <section class="form-section">
      <form class="formulario-inventario" id="form-inventario">
        <input type="text" id="nombre" placeholder="Nombre del producto" required />
        <input type="number" id="cantidad" placeholder="Cantidad" required />
        <input type="number" id="precio" placeholder="Precio ($)" required />
        <button type="submit">Agregar al Inventario</button>
      </form>
    </section>

    <section class="tabla-section">
      <table id="tabla-inventario">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio ($)</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </section>

    <div style="text-align: center; margin-top: 30px;">
      <a href="{{ ('/admin') }}" class="btn-regresar">← Volver al Panel de Administración</a>
    </div>
  </main>

  <script>
    const form = document.getElementById('form-inventario');
    const tabla = document.querySelector('#tabla-inventario tbody');

    document.addEventListener("DOMContentLoaded", () => {
      let inventario = JSON.parse(localStorage.getItem('inventario')) || [];

      if (inventario.length === 0) {
        inventario = [
         
  { nombre: "Camiseta DryFit Deportiva", cantidad: 18, precio: 59900 },
  { nombre: "Sudadera Clásica Unisex", cantidad: 10, precio: 95000 },
  { nombre: "Leggings Deportivos Mujer", cantidad: 15, precio: 85000 },
  { nombre: "Chaqueta Rompevientos", cantidad: 12, precio: 119000 },
  { nombre: "Short Deportivo Hombre", cantidad: 20, precio: 48000 },
  { nombre: "Top Deportivo Mujer", cantidad: 14, precio: 69000 },
  { nombre: "Conjunto Deportivo Mujer", cantidad: 8, precio: 135000 },
  { nombre: "Buzo Deportivo Hombre", cantidad: 9, precio: 110000 }


        ];
        localStorage.setItem("inventario", JSON.stringify(inventario));
      }

      mostrarProductos();
    });

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      const nombre = document.getElementById('nombre').value.trim();
      const cantidad = parseInt(document.getElementById('cantidad').value);
      const precio = parseFloat(document.getElementById('precio').value);

      if (!nombre || isNaN(cantidad) || isNaN(precio)) return;

      const producto = { nombre, cantidad, precio };
      let inventario = JSON.parse(localStorage.getItem('inventario')) || [];
      inventario.push(producto);
      localStorage.setItem('inventario', JSON.stringify(inventario));

      mostrarProductos();
      form.reset();
    });

    function mostrarProductos() {
      const inventario = JSON.parse(localStorage.getItem('inventario')) || [];
      tabla.innerHTML = '';
      inventario.forEach(prod => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${prod.nombre}</td>
          <td>${prod.cantidad}</td>
          <td>$${prod.precio.toLocaleString()}</td>
        `;
        tabla.appendChild(row);
      });
    }
  </script>

</body>
</html>
