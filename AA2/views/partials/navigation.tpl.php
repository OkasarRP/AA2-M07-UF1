<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="home"><?= $title;?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item nav-link">(<?=$_SESSION['rol']?>)</li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <?php
                            if($_SESSION['rol']=='Profesor'){
                                echo"<li class='nav-item'><a class='nav-link' href='profile'>Añadir alumno</a></li>";
                            }
                        ?>
                        <?php 
                            if(isset($_SESSION['user'])){
                                $text = $_SESSION['user'];
                                echo"<li class='nav-item'><a class='nav-link' href='notyet'>$text</a></li>";
                                echo"<li class='nav-item'><a class='nav-link' href='logout'>Log-Out</a></li>";
                                
                            }else{
                                echo"<li class='nav-item'><a class='nav-link' href='login'>Log-In</a></li>";
                                echo"<li class='nav-item'><a class='nav-link' href='register'>Register</a></li>";
                            }   
                        ?>
                        
                    </ul>
                </div>
            </div>
        </nav>