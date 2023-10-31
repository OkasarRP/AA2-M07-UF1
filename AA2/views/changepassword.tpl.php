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
          <form action="registro.html" method="POST">           

            
             <!-- Email input -->
             <div class="form-outline mb-3">
                <input type="email"  name="passwd" class="form-control form-control-lg"
                  placeholder="Entra un Email" restricted/>
                <label class="form-label" >Email</label>
              </div>

           


            <div class="text-center text-lg-start mt-4 pt-2">
              <button name="enviar" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Siguiente</button>


              <p class="small fw-bold mt-2 pt-1 mb-0">¿Ya tienes cuenta? <a href="?url=login"
                  class="link-danger">Iniciar sesión</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
    <?php include_once 'partials/footer.tpl.php';?>
  </body>
</html>