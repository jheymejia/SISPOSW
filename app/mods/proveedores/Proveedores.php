<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Módulo de Proveedores</title>
   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<br>
<h1 class="text-center" style="color:blue; background-color:yellow"> Módulo de Proveedores</h1>
<br>

<div class="d-flex justify-content-center">
    
    <div class="card-deck"  style="padding:10px">
        <!-- Registrar -->
        <div class="card bg-success text-white rounded-circle">
            <div class="card-body">
                <h5 class="card-title text-light bg-dark text-center" >REGISTRAR</h5>
                <p class="card-text">Registar nuevos Proveedores</p>
                <a href="RegistrarProveedor.php" class="btn btn-primary btn-lg btn-block bg-warning text-dark" role="button" aria-pressed="true">Registrar Proveedores</a>

               

            </div>

        
         </div>

        <!-- Modificar -->
         <div class="card bg-primary text-white rounded-circle">
            <div class="card-body">
                <h5 class="card-title text-light bg-dark  text-center">MODIFICAR</h5>
                <p class="card-text">Modificar Proveedores</p>
                <a href="ModificarProveedor.php" class="btn btn-primary btn-lg btn-block bg-warning text-dark" role="button" aria-pressed="true">Editar Proveedores</a>


            </div>

        
         </div>
        <!-- Borrar -->
         <div class="card bg-danger text-white rounded-circle">
            <div class="card-body">
                <h5 class="card-title text-light bg-dark  text-center">ELIMINAR</h5>
                <p class="card-text">Eliminar Proveedores</p>
                <a href="EliminarProveedor.php" class="btn btn-primary btn-lg btn-block bg-warning text-dark" role="button" aria-pressed="true">Eliminar Proveedores</a>


            </div>

        
         </div>
         <!-- Búsquedas -->
         <div class="card bg-info text-white rounded-circle">
            <div class="card-body">
                <h5 class="card-title text-light bg-dark  text-center">BÚSQUEDA</h5>
                <p class="card-text">Buscar Proveedores</p>
                <a href="buscarProveedor.php" class="btn btn-primary btn-lg btn-block bg-warning text-dark" role="button" aria-pressed="true">Buscar Proveedores</a>



            </div>

        
         </div>

        
    </div>

    
    
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>