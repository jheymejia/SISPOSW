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


//Menú AJAX Carga de Modulos en Modal 
//Son los modulos de inserccion de registros 
function cargarCat() {
  var url = "mods/empleados/adcatalogo.php"
  $.ajax({
    type: "POST",
    url: url,
    data: {},
    success: function(datos) {
      $('#cargaModulo').html(datos);
    }
  });
}
function cargarProv() {
  var url = "mods/empleados/adproveedores.php"
  $.ajax({
    type: "POST",
    url: url,
    data: {},
    success: function(datos) {
      $('#cargaModulo').html(datos);
    }
  });
}
function cargarCli() {
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
function cargarEmp() {
  var url = "mods/empleados/adempleados.php"
  $.ajax({
    type: "POST",
    url: url,
    data: {},
    success: function(datos) {
      $('#cargaModulo').html(datos);
    }
  });
}
//Menú AJAX Carga de SubModulos en Modal
//Son los modulos de edición de registros 
function edEmp(id) {
  var url = "mods/empleados/modempleado.php?id="+id;
  $.ajax({
    type: "POST",
    url: url,
    data: {},
    success: function(datos) {
      $('#cargaModulo').html(datos);
    }
  });
}
function edCli(id) {
  var url = "mods/empleados/modcliente.php?id="+id;
  $.ajax({
    type: "POST",
    url: url,
    data: {},
    success: function(datos) {
      $('#cargaModulo').html(datos);
    }
  });
}
function edProv(id) {
  var url = "mods/empleados/modproveedor.php?id="+id;
  $.ajax({
    type: "POST",
    url: url,
    data: {},
    success: function(datos) {
      $('#cargaModulo').html(datos);
    }
  });
}