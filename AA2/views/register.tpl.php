

<?php 
  
  include_once 'partials/header.tpl.php';
?>
	
    <body>
        <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">        
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="public/img/logo.png" class="img-fluid" alt="Logo img">
        </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
    <div class="fs-1 fw-bold p-3 g-col-6"><?= $title;?></div>

    <form action="registeraction" method="post">

<!-- Type acount input -->
      <select class="form-select" name="type" required>
              <option selected>Elige tipo de cuenta</option>
              <option value="Profesor">Profesor</option>
              <option value="Alumno">Alumno</option>
            </select>

<div class="form-group"> <!-- Name -->
    <label for="user" class="control-label">Usuario<span style="color: grey;">*requerido*</span></label>
    <input type="text" class="form-control" name="user">
</div>    

<div class="form-group"> <!-- Email -->
    <label for="email" class="control-label">Email  <span style="color: grey;">*requerido*</span></label>
    <input type="email" class="form-control" name="email"required>
</div>                   
                      

<div class="form-group"> <!-- Password-->
    <label for="password" class="control-label">Contraseña <span style="color: grey;">*requerido*</span></label>
    <input type="password" class="form-control"  name="password" required>
</div>
<?php
if (isset($_SESSION["password"]) && isset($_SESSION["confirmpassword"])) {
  $frase="La contraseña actual no es la misma";
  echo "<div><span style='color: red;'>$frase</span></div>";
}
?>  



<div class="form-group"> <!-- Confirm password-->
    <label for="confirm password" class="control-label">Confirmar contraseña <span style="color: grey;">*requerido*</span></label>
    <input type="password" class="form-control"  name="confirmpassword" required>
</div>      
                          
                        


      

<div class="form-group text-center text-lg-start mt-4 pt-2"> <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Registrarse</button>
    <p class="small fw-bold mt-2 pt-1 mb-0">¿Ya tienes cuenta? <a href="login"
  class="link-danger">Iniciar Sesión</a></p>   
</div>     

</form>
          
            
        </div>
        
        
          
        </div>
      </div>
    </div>
    <?php include_once 'partials/footer.tpl.php';?>
    
  </body>
</html>