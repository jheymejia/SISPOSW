<?php
require('../../rq/empmod.php');
// Archivo Requerido para mostrar los Empleados en la tabla de abajo 
?>
<!-- Aplicacion VUE -->
<h1 class="text-center">Informes Facturas</h1>
<script type="text/javascript">
  loadReport();
  $(Document).ready(function() {
    $("#buscar").on("click", (e) => {
      e.preventDefault();
      loadReport();
    })
  })

  function loadReport() {
    let buscaX = "";
    let vrBusca = "";
    buscaX = document.getElementById("buscarX").value;
    vrBusca = document.getElementById("vrBuscar").value;
    $.ajax({
      type: "POST",
      url: "mods/empleados/procesar/showreport.php",
      data: {
        buscarX: buscaX,
        vrBuscar: vrBusca
      },
      success: function(r) {
        $('#Resultado').html(r);
      }
    });
  }
</script>
<br>
<!-- Aplicacion VUE -->
<script>
  $(".alert-success").delay(4000).slideUp(200, function() {
    $(this).alert - success('close');
  });
</script>
<div id="busquedadatos">
  <form method="" action="" style="text-align: center" class="form"><br>
    <div style="text-align: center" class="form-row">
      <div class="col">
        <input placeholder="Buscar ..." oninput="loadReport()" type="text" name="vrBuscar" id="vrBuscar" v-model="vrBuscar">
      </div>
      <div class="col">
        <select name="buscarX" id="buscarX" v-model="buscarX" class="form-control">
          <option value="id">Buscar por Documento</option>
          <option value="nombre">Buscar por Nombre de Cliente</option>
        </select>
      </div>
    </div>
  </form><br>
  <div id="Resultado">
  </div>
</div>