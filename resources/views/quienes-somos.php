<?php
// quienes-somos.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiénes Somos - Deportes 360</title>
  <link rel="stylesheet" href="css/estilos.css"> <!-- Tu mismo CSS principal -->
</head>
<body>
  <!-- Encabezado -->
  <header class="header">
    <div class="logo">
      <h1>Deportes 360</h1>
    </div>
    <nav class="menu">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="quienes-somos.php" class="activo">Quiénes Somos</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <!-- Contenido principal -->
  <main>
    <section class="quienes-somos">
      <h2>Quiénes Somos</h2>
      <p>
        En <strong>Deportes 360</strong> somos una tienda de ropa deportiva comprometida con tu pasión por el deporte.  
        Ofrecemos prendas y accesorios de alta calidad diseñados para brindarte comodidad, estilo y rendimiento en cada entrenamiento o competencia.
      </p>
      <p>
        Nuestro objetivo es ser tu aliado en cada paso hacia una vida más activa y saludable.  
        Por eso, trabajamos día a día en ofrecerte los mejores productos, una experiencia de compra segura  
        y un servicio cercano y confiable.
      </p>
      <p>
        En <strong>Deportes 360</strong> creemos que el deporte une, inspira y transforma vidas.  
        ¡Acompáñanos a vivirlo al máximo!
      </p>
    </section>
  </main>

  <!-- Pie de página -->
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Deportes 360. Todos los derechos reservados.</p>
  </footer>
</body>
</html>
