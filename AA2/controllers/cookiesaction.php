<?php
require 'src/render.php';

$_SESSION['cookies'] = true;

setcookie("cookies", true, time()+3600);

header('Location:home');

