<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Proveedores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body class="text-center" >
<h1 style="color:red; background-color:blue"> Buscar Proveedores</h1>
    <div class="card" id="formulario">
    <form action="" method="post" class="card-header">
        Dato a buscar: 
        <input type="text" name="vrBuscar" id="">
        <select name="buscarX" id="buscarX">
            <option value="id">Buscar por ID</option>
            <option value="nombre">Buscar por Nombre</option>
            <option value="email">Buscar por Correo</option>
        </select>
        <input type="submit" value="buscar">
    </form>

    </div>
    <div id="resultados">
       
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Correo electrónico</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">116828164</th>

                    <td>BADAS</td>
                    <td>CALI</td>
                    <td>CRA. 31 34B-10</td>
                    <td>3343112-3187043883</td>
                    <td>BADAS@m.COM.do</td>
                </tr>

            </tbody>
        </table>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>