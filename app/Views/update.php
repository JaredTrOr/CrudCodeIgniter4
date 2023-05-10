<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualizar</title>
  </head>
  <body>
    <div class="container mt-5">
      <h1>Actualizar usuario</h1>
      <div class="row">
        <div class="col-lg-6">
          <form action="<?php base_url().'/update' ?>" method="POST">
            <input type="text" hidden="" id="idNombre" name="idNombre">
            <div class="form-element-container">
              <label for="nombre">Escribe tu nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo ($data[0]->nombre); ?>">
            </div>
            <div class="form-element-container">
              <label for="apellidoPaterno">Escribe tu apellido paterno:</label>
              <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="<?php echo ($data[0]->apellidoPaterno); ?>">
            </div>
            <div class="form-element-container">
              <label for="apellidoMaterno">Escribe tu apellido materno:</label>
              <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="<?php echo ($data[0]->apellidoMaterno); ?>">
            </div>

            <div class="form-element-container">
              <button class="btn main-btn light" type="button">Actualizar</button>
            </div>
          </form> 
        </div>

        <div class="col-lg-6 image-form-container">
          <img src="../images/form_image.png" alt="note image">
        </div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>