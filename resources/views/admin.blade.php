<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/x-icon" href="{{ asset('images/admin.jpg') }}">
  <title>Panel de Administrador - Deportes 360</title>
  <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

  <header class="header">
    <h1>Panel de Administración - Deportes 360</h1>
  </header>

  <nav class="sidebar">
    <ul>
      <li><a href="{{ url('/usuario') }}">Inicio</a></li>
      <li><a href="{{ url('/pedidos') }}">Pedidos</a></li>
      <li><a href="{{ url('/productos') }}">Productos</a></li>
      <li><a href="{{ url('/404') }}">Reportes</a></li>
      <li><a href="{{ url('/inventario') }}">Inventario</a></li>
      <li><a href="{{ url('/login') }}">Cerrar sesión</a></li>
    </ul>
  </nav>

  <main class="dashboard">

    <section class="stats">
      <div class="stat-box">
        <h3>Ventas Hoy</h3>
        <p>$980.000</p>
      </div>
      <div class="stat-box">
        <h3>Productos Vendidos</h3>
        <p>21</p>
      </div>
      <div class="stat-box">
        <h3>Clientes Nuevos</h3>
        <p>3</p>
      </div>
    </section>

    <section class="grafico">
      <h2>Ventas de la Semana</h2>
      <div class="grafico-contenedor">
        <canvas id="graficaVentas"></canvas>
      </div>
    </section>

    <section class="pedidos">
      <h2>Últimos Pedidos</h2>
      <table class="tabla-pedidos">
        <thead>
          <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Fecha</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>078</td>
            <td>Camila Soto</td>
            <td>Camiseta DryFit Deportiva</td>
            <td>03/07/2025</td>
            <td>$59.900</td>
          </tr>
          <tr>
            <td>077</td>
            <td>Javier Ruiz</td>
            <td>Leggings Deportivos Mujer</td>
            <td>03/07/2025</td>
            <td>$85.000</td>
          </tr>
        </tbody>
      </table>
    </section>

    <section class="inventario-visual">
      <h2>Inventario de Productos</h2>
      <div class="inventario-grid">
        <div class="producto-card">
          <img src="{{ asset('images/camiseta.png') }}" alt="Camiseta DryFit">
          <h4>Camiseta DryFit Deportiva</h4>
          <p>Precio: $59.900</p>
          <p>Stock: 23 unidades</p>
        </div>
        <div class="producto-card">
          <img src="{{ asset('images/leggings.png') }}" alt="Leggings Deportivos Mujer">
          <h4>Leggings Deportivos Mujer</h4>
          <p>Precio: $85.000</p>
          <p>Stock: 15 unidades</p>
        </div>
        <div class="producto-card">
          <img src="{{ asset('images/buzo-hombre.png') }}" alt="Buzo Deportivo Hombre">
          <h4>Buzo Deportivo Hombre</h4>
          <p>Precio: $110.000</p>
          <p>Stock: 9 unidades</p>
        </div>
      </div>
    </section>

    <section id="usuarios" class="usuarios">
      <h2>Gestión de Usuarios</h2>
      @if(session('success'))
        <div class="alerta success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
        <div class="alerta error">{{ session('error') }}</div>
      @endif

      <table class="tabla-usuarios">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuarios as $usuario)
          <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->useCorreo }}</td>
            <td>{{ $usuario->rol }}</td>
            <td>
              <form action="{{ route('usuarios.eliminar', $usuario->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este usuario?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-eliminar">Eliminar</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>

  </main>
  <script>
    const ctx = document.getElementById('graficaVentas').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
        datasets: [{
          label: 'Ventas ($)',
          data: [750000, 920000, 580000, 1040000, 850000, 910000, 980000],
          backgroundColor: '#0288d1'
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>
</html>
