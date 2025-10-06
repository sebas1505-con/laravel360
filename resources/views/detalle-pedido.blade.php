<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Pedido</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <h2>Detalle del pedido #{{ $venta->id }}</h2>

    <p><strong>Total:</strong> {{ $venta->totalVenta }}</p>
    <p><strong>Método de pago:</strong> {{ $venta->metodo_de_pago }}</p>
    <p><strong>Fecha de compra:</strong> {{ $venta->Fecha_de_venta }}</p>
    <p><strong>Estado envío:</strong> {{ $venta->envio->estadoEnvio ?? 'Pendiente' }}</p>

    <hr>
    <h3>Información del repartidor</h3>
    @if($venta->envio && $venta->envio->repartidor)
        <p><strong>Repartidor:</strong> {{ $venta->envio->repartidor->NombreRepar }}</p>
        <p><strong>Vehículo:</strong> {{ $venta->envio->repartidor->tipodevehi }}</p>
        <p><strong>Placa:</strong> {{ $venta->envio->repartidor->numplaca }}</p>
    @else
        <p><em>Aún no se ha asignado un repartidor.</em></p>
    @endif

    <a href="{{ url('/') }}" class="btn-2">Volver al inicio</a>
</body>
</html>
