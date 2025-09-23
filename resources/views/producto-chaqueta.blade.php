<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="images/producto.png">
  <title>Chaqueta Rompevientos - Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
</head>
<body>
  <header class="header">
    <div class="container menu">
      <a href="#" class="logo">DEPORTES 360</a>
      <nav class="navbar">
        <ul>
          <li><a href="{{'/usuario'}}">Inicio</a></li>
          <li><a href="{{'/productos'}}">Productos</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">
    <div class="producto-detalle">
      <div class="producto-galeria">
        <div class="imagen-principal">
          <img src="images/chaqueta.png" alt="Chaqueta Rompevientos" id="imagen-principal">
        </div>
        <div class="miniaturas">
          <img src="images/chaqueta.png" onclick="cambiarImagen('images/chaqueta.png')" alt="">
          <img src="images/chaqueta2.png" onclick="cambiarImagen('images/chaqueta2.png')" alt="">
          <img src="images/chaqueta3.png" onclick="cambiarImagen('images/chaqueta3.png')" alt="">
        </div>
      </div>

      <div class="producto-info">
        <h2>Chaqueta Rompevientos</h2>
        <p>
          Protege del viento y la lluvia con estilo. Chaqueta ligera, impermeable y con capucha ajustable, ideal para entrenar al aire libre o para el día a día.
        </p>
        <p><strong>Precio:</strong> $135.000</p>

        <ul class="caracteristicas">
          <li>🌧️ Impermeable y corta viento</li>
          <li>🧥 Con capucha y bolsillos laterales</li>
          <li>📏 Tallas: S, M, L, XL</li>
          <li>🎨 Colores: azul, negro, rojo</li>
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
          <a href="{{'/usuario'}}" class="btn-1">Volver</a>
          <button class="btn-1" style="margin-left: 10px;" onclick="agregarAlCarrito()">Comprar</button>
        </div>
      </div>
    </div>

    <section class="relacionados">
      <h3>También te puede interesar</h3>
      <div class="relacionados-grid">
        <div class="relacionado">
          <img src="images/buzo-hombre.png" alt="Buzo Deportivo Hombre">
          <p>Buzo Deportivo Hombre</p>
          <span>$110.000</span>
        </div>
        <div class="relacionado">
          <img src="images/conjunto-mujer.png" alt="Conjunto Deportivo Mujer">
          <p>Conjunto Deportivo Mujer</p>
          <span>$149.000</span>
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
      nombre: "Chaqueta Rompevientos",
      precio: 135000,
      talla: tallaSeleccionada,
      imagen: "images/chaqueta.png"
    };

    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    carrito.push(producto);
    localStorage.setItem("carrito", JSON.stringify(carrito));

    window.location.href = "{{ route('carrito') }}";
  }
</script>
 

</body>
</html>


