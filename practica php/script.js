

function validarFormulario() {

  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value;
  var email = document.getElementById("email").value;


  if (nombre.trim() === "" || apellido.trim() === "" || email.trim() === "") {
    alert("Es necesario completar todos los campos.");
    return false;
  }


  if (/\d/.test(nombre) || /\d/.test(apellido)) {
    alert("Recuerda que no se permiten caracteres numéricos en los campos Nombre y Apellido.");
    return;
  }

  var emailValido = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailValido.test(email)) {
    alert("Por favor, ingresa un correo electrónico válido.");
    return false;
  }

  return true;

}