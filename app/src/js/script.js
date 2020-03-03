//Mostrar sidenav en menú
$(document).ready(function() {
  $('.sidenav').sidenav();
});

//Animación Login
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});


//Menú AJAX
function cargar() {
  var url = "mods/empleados/adclientes.php"
  $.ajax({
    type: "POST",
    url: url,
    data: {},
    success: function(datos) {
      $('#cargaModulo').html(datos);
    }
  });
}
