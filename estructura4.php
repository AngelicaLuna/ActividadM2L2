<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Ejercicio 4</title>
  </head>
  <body>
    <div class="container"><br>
    <div class="row justify-content-center">
    <div class="col-6 p-5 bg-white shadow-lg rounded">
    <form method="POST" action=" ">

    <h2> EJERCICIO 4</h2>
    <div class="form-group">
    <label for="enlace">Ingrese el texto del enlace:</label>
    <input id="enlace" class="form-control" type="text" name="enlace">  
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
    $enlace = $_POST['enlace'];
    $enlace = ($enlace);


    if (stripos($enlace, 'aqui') !== false) {
        echo "¡Cuidado, estas fastidiando un enlace a una pagina!";
    }
    
    else {
        echo "¡Bien! Estas haciendo un favor al mundo del SEO";
    }
}
    ?>

        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>