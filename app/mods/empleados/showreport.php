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
    buscaX = 'id'
    vrBusca = ''
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
  <div id="Resultado">
  </div>
</div>