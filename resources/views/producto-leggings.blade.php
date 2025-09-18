<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="images/producto.png">
  <title>Leggings Deportivos Mujer - Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
</head>
<body>
  <header class="header">
    <div class="container menu">
      <a href="#" class="logo">DEPORTES 360</a>
      <nav class="navbar">
        <ul>
          <li><a href="usuario.html">Inicio</a></li>
          <li><a href="index.html#productos">Productos</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">
    <div class="producto-detalle">
      <div class="producto-galeria">
        <div class="imagen-principal">
          <img src="images/leggings.png" alt="Leggings Deportivos Mujer" id="imagen-principal">
        </div>
        <div class="miniaturas">
          <img src="images/leggings.png" onclick="cambiarImagen('images/leggings.png')" alt="">
          <img src="images/leggings2.png" onclick="cambiarImagen('images/leggings2.png')" alt="">
          <img src="images/leggings3.png" onclick="cambiarImagen('images/leggings3.png')" alt="">
        </div>
      </div>

      <div class="producto-info">
        <h2>Leggings Deportivos Mujer</h2>
        <p>
          Confortables y flexibles, ideales para entrenar o usar en el día a día. Se ajustan perfectamente al cuerpo sin perder la comodidad.
        </p>
        <p><strong>Precio:</strong> $85.000</p>

        <ul class="caracteristicas">
          <li>👖 Tela elástica y transpirable</li>
          <li>🧘‍♀️ Perfectos para gym, yoga o running</li>
          <li>📏 Tallas: XS, S, M, L</li>
          <li>🎨 Colores: negro, vino tinto, gris</li>
          <li>🛡️ Garantía: 30 días por defectos</li>
        </ul>

        <div class="benefits-mini">
          <span>🚚 Envío gratis</span>
          <span>💳 Pago contra entrega</span>
          <span>🛡️ Garantía oficial</span>
        </div>


        <label for="talla"><strong>Selecciona tu talla:</strong></label>
<select id="talla" name="talla" style="display: block; margin: 10px 0;">
  <option value="">-- Selecciona --</option>
  <option value="S">S</option>
  <option value="M">M</option>
  <option value="L">L</option>
  <option value="XL">XL</option>
</select>

<div style="margin: 10px 0;">
  <strong>Calificación:</strong><br />
  <img src="images/estrellas5.png" alt="5 estrellas" style="width: 120px;" />
</div>

        <div style="margin-top: 20px;">
          <a href="index.html" class="btn-1">Volver</a>
          <button class="btn-1" style="margin-left: 10px;" onclick="agregarAlCarrito()">Comprar</button>
        </div>
      </div>
    </div>

    <section class="relacionados">
      <h3>También te puede interesar</h3>
      <div class="relacionados-grid">
        <div class="relacionado">
          <img src="images/top.png" alt="Top Deportivo Mujer">
          <p>Top Deportivo Mujer</p>
          <span>$60.000</span>
        </div>
        <div class="relacionado">
          <img src="images/short.png" alt="Short Deportivo Hombre">
          <p>Short Deportivo Hombre</p>
          <span>$49.000</span>
        </div>
      </div>
    </section>
  </main>

 <script>
  function cambiarImagen(ruta) {
    document.getElementById("imagen-principal").src = ruta;
  }

  function agregarAlCarrito() {
    const tallaSeleccionada = document.getElementById("talla").value;

    if (!tallaSeleccionada) {
      alert("Por favor selecciona una talla.");
      return;
    }

    const producto = {
      nombre: "Leggings Deportivos Mujer",
      precio: 85000,
      talla: tallaSeleccionada,
      imagen: "images/leggings.png"
    };

    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    carrito.push(producto);
    localStorage.setItem("carrito", JSON.stringify(carrito));

    window.location.href = "carrito.html";
  }
</script>

 

</body>
</html>


