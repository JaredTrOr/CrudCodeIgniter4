<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/index.css">
    <!--WHY CANT I ADD ANOTHER DESIGN-->
    <title>CRUD - Codeigniter 4</title>
  </head>
  <body>
    <div class="container mt-5">
      <h1>CRUD con Codeigniter 4</h1>
      <div class="row form-row">
        <div class="col-lg-6">
          <form action="<?php base_url().'/create' ?>" method="POST">
            <div class="form-element-container">
              <label for="nombre">Escribe tu nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-element-container">
              <label for="apellidoPaterno">Escribe tu apellido paterno:</label>
              <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno">
            </div>
            <div class="form-element-container">
              <label for="apellidoMaterno">Escribe tu apellido materno:</label>
              <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno">
            </div>

            <div class="form-element-container">
              <button class="btn main-btn light" type="button">Guardar</button>
            </div>
          </form> 
        </div>

        <div class="col-lg-6 image-form-container">
          <img src="images/form_image.png" alt="note image">
        </div>
      </div>

      <div class="row table-row mt-5">
        <div class="col-sm-12">
          <h1>Mostrar usuario</h1>
          <table class="user-table table table-hover table-border">
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Apellido paterno</th>
              <th>Apellido materno</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>

            <?php foreach($data as $key){?>
              <tr>
                <td><?= $key->id_nombre ?></td>
                <td><?= $key->nombre ?></td>
                <td><?= $key->apellidoPaterno ?></td>
                <td><?= $key->apellidoMaterno ?></td>
                <td>
                  <a href="<?php echo base_url().'update/'.$key->id_nombre?>" class="btn btn-warning">Editar</a>
                </td>
                <td>
                  <a href="" class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
            <?php }?>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>