<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <?php
  include_once('_imports.php');
  ?>
  <header>
    <?php require_once('_navbar.php') ?>
  </header>
  <h1 class="d-none">H1</h1>
  <h2 class="d-none">H2</h2>
</head>
<body class="d-flex flex-column min-vh-100"  style="background-color:grey;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 pb-5">
        <form action="recepcion_formulario.php" method="post">
          <div class="card border-primary rounded-3">
            <div class="card-header p-0">
              <div class="bg-info text-white text-center">

                <img src="../images/chica_hablando_tel.jpg" alt="recepcionista" class="img-fluid">
                <h3 class="text-white">Contactanos</h3>
                <p class="m-0">Con gusto te ayudaremos</p>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <!--icono -->
                      <img src="../images/identificacion.png" alt="imagen identificacion" class="img-fluid" height="20" width="20" />
                    </div>
                  </div>
                  <input type="text" id="nombre" name="nombre" placeholder="Nombre" />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <img src="../images/identificacion.png" alt="imagen identificacion" class="img-fluid" height="20" width="20" />
                    </div>
                  </div>
                  <input type="text" id="apellido" name="apellido" placeholder="Apellido" />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <img src="../images/llamada-telefonica.png" alt="imagen teléfono" class="img-fluid" height="20" width="20" />
                    </div>
                  </div>
                  <input type="number" id="telefono" name="telefono" placeholder="Número de teléfono" />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <img src="../images/gmail.png" alt="imagen sobre" class="img-fluid" height="20" width="20" />
                    </div>
                  </div>
                  <input type="email" id="email" name="email" placeholder="Ingrese su email" />
                </div>
              </div>
              <div class="d-none d-sm-none d-md-block">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="venta" value="venta" />
                  <label class="form-check-label" for="venta">Ventas</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="post-venta" value="post-venta" />
                  <label class="form-check-label" for="post-venta">Post venta</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="trabaja-nosotros" value="trabaja-nosotros" />
                  <label class="form-check-label" for="trabaja-nosotros">Trabaja con nosotros</label>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <img src="../images/formulario-de-contacto.png" alt="Imagen formulario" class="img-fluid" height="20" width="20" />
                    </div>
                  </div>
                  <textarea class="form-control" placeholder="Escribí acá tu mensaje" name="mensaje" id="mensaje" ></textarea>
                </div>
                <div class="wrapper">
                <button value="Enviar" class="btn btn-primary button" type="submit">
                  Enviar
                </button>
              </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="short-content">
  <?php
  include_once('_footer.php');
  ?>
  </div>

</body>

</html>