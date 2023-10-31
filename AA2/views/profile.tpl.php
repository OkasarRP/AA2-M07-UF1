<?php
//$_SESSION['user']='OkasarRP';
//$_SESSION['rol']='2' ;
    if($_SESSION['rol']=='2'){
        $_SESSION['rol']='Alumno';
    }else{
        $_SESSION['rol']='Profesor';
    }



?>
<?php include_once 'partials/headerhome.tpl.php';?>
    <body id="page-top">
    <?php include_once 'partials/navigation.tpl.php';?>
       
    <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Actualización de datos de usuario</h2>
                        <br>
                        <form method = "post" action = "profileaction">
                            <div class="form-group row">
                                <label for="user" class="col-sm-2 col-form-label">Usuario</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Usuario">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Nombre completo">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="DNI" class="col-sm-2 col-form-label">DNI</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="DNI">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Teléfono">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="street" class="col-sm-2 col-form-label">Calle de residencia</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Calle de residencia">
                                </div>
                            </div>
                            <br>
                            
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Actualizar datos</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
   



        <?php include_once 'partials/footerhome.tpl.php';?>
    </body>
</html>

