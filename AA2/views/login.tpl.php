<?php include_once 'partials/header.tpl.php';?>
	
    <body>
        <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="public/img/logo.png" class="img-fluid" alt="Logo img">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <div class="fs-1 fw-bold p-3 g-col-6"><?= $title;?></div>
          <form action="loginaction" method="POST">
           

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="user" class="form-control form-control-lg"
                placeholder="Entra un Usuario" />
              <label class="form-label" >Usuario</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password"  name="password" class="form-control form-control-lg"
                placeholder="Entra una Contraseña" />
              <label class="form-label" >Contraseña</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Recuerdame
                </label>
              </div>
              <a href="?url=changepassword" class="text-body">¿Contraseña olvidada?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button name="enviar" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Acceder</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes cuenta? <a href="register"
                  class="link-danger">Registrar</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
    <?php include_once 'partials/footer.tpl.php'; ?>
    </body>
</html>