<?php

include "config.php";

$usuario_id = $_REQUEST['id'];
$senha = $_REQUEST['code'];

$sql = mysql_query(

"UPDATE usuarios SET ativado='1'
WHERE usuario_id='{$usuario_id}'
AND senha='{$senha}'"

);

$sql_doublecheck = mysql_query(

"SELECT * FROM usuarios
WHERE usuario_id='{$usuario_id}'
AND senha='{$senha}'
AND ativado='1'"

);

$doublecheck = mysql_num_rows($sql_doublecheck);

if ($doublecheck == 0){

echo "<strong>Sua conta não pode ser ativada!</strong>";

}elseif ($doublecheck > 0){

echo "<strong>Seu cadastro foi ativado com sucesso!</strong><br />
Você pode fazer o login logo abaixo!<br /><br />";

include "localhost/consilium369/formulario_login.html";

}

?>