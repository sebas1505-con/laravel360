function mostrarCarrito() {
  const carrito = JSON.parse(localStorage.getItem("carrito")) || [];
  const contenedor = document.getElementById("carrito-items");
  const totalSpan = document.getElementById("total");
  let total = 0;

  contenedor.innerHTML = "";

  if (carrito.length === 0) {
    contenedor.innerHTML = "<p>No hay productos en el carrito.</p>";
    totalSpan.textContent = "$0";
    return;
  }

  carrito.forEach(producto => {
    const item = document.createElement("div");
    item.classList.add("item-carrito");
    item.innerHTML = `
      <img src="${producto.imagen}" alt="${producto.nombre}">
      <div class="item-info">
        <h4>${producto.nombre}</h4>
        <p>$${producto.precio.toLocaleString()}</p>
      </div>
    `;
    contenedor.appendChild(item);
    total += producto.precio;
  });

  totalSpan.textContent = `$${total.toLocaleString()}`;
}

document.addEventListener("DOMContentLoaded", mostrarCarrito);
