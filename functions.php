<?php

function session_checker(){

if (!isset($_SESSION['usuario_id'])){

header ("Location:formulario_login.html");
exit();

}

}

?>