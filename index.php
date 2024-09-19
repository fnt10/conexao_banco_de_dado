<?php
/* conexao com o bd */
$servername = "baseteste.srv.br";
$username = "basetestesrv_u_furla";
$password = "Lafur10%";
$database = "basetestesrv_furla";

$conexao = mysqli_connect($servername, $username, $password, $database);

if(!$conexao){
    die("False a conexão".connect_error());
}else{
    echo "conectado com sucesso";
}//verifca se a conexão com o banco de dados foi um sucesso.
?>