<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Ejercicio 2</title>
  </head>
  <body>
    <div class="container"><br>
    <div class="row justify-content-center">
    <div class="col-6 p-5 bg-white shadow-lg rounded">
    <form method="POST" action=" ">

    <h2> EJERCICIO 2</h2>
    <div class="form-group">
    <label for="pesovehiculo">Ingrese peso vehiculo:</label>
    <input id="pesovehiculo" class="form-control" type="text" name="pesovehiculo">  
    <div class="form-group">
    <br>
    <div class="form-group">
    <input class="btn btn-secondary" type="submit" name="submit" value="ENVIAR"></button>
    </div>
        </div>
            </div>
                <div>
                    </div>
    
    <h2> Respuesta: </h2>  
    </form>
    <?php           
    if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
        $pesovehiculo = $_POST['pesovehiculo'];
        $pesoPermitido = 1500;
                        
    if (is_numeric($pesovehiculo)){
        if ($pesovehiculo <= $pesoPermitido) {
        echo "Peso de vehiculo permitido";
        }
    elseif ($pesovehiculo > $pesoPermitido) {
        echo "El peso maximo del vehiculo es: ", $pesoPermitido;
        }  
            }
    else {
        echo "Valores no validos, intente nuevamente";
                }
         }
    ?>

        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>