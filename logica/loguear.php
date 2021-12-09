<?php

require 'conexcion.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "SELECT COUNT(*) as contar from bibliotecario where user = '$user' and pass ='$pass'";
$consulta = mysqli_query($conexcion,$query);
$array = mysqli_fetch_array($consulta);
if($array['contar']>0){
    $_SESSION['username'] = $user;
    header("location: ../principal.php");
}else{
    echo '<script type="text/javascript">
    alert("Datos Incorrectos");
    window.location.href="../index.php";
    </script>';
}

?>