<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Ejercicio 1</title>
  </head>
  <body>
    <div class="container"><br>
    <div class="row justify-content-center">
    <div class="col-6 p-5 bg-white shadow-lg rounded">
    <form method="POST" action=" ">

    <h2> EJERCICIO 1</h2>
    <div class="form-group">
    <label for="numero">Ingrese el primer numero:</label>
    <input id="numero" class="form-control" type="text" name="numero">  
    <div class="form-group">
    <label for="numero2">Ingrese el segundo numero:</label>
    <input id="numero2" class="form-control" type="text" name="numero2">
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
        $numero = $_POST['numero'];
        $numero2 = $_POST['numero2'];
                        
    if (is_numeric($numero) && is_numeric($numero2)){
        if ($numero > $numero2) {
        echo "El mayor de los numeros es: ", $numero;
        }
    elseif ($numero2 > $numero) {
        echo "El mayor de los numeros es: ", $numero2;
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