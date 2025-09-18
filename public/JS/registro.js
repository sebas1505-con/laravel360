document.querySelector(".registro-form").addEventListener("submit", function (e) {
  e.preventDefault();

  const correo = document.getElementById("usuario").value.trim();
  const contrasena = document.getElementById("contrasena").value.trim();

  const datos = {
    correo: correo,
    contrasena: contrasena,
  };

  localStorage.setItem("usuarioRegistrado", JSON.stringify(datos));

  window.location.href = "login.html";
});
