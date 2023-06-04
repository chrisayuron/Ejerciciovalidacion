<?php
$nombre="ronalito123";
$password='abcde'; //Obviamente esta no es la manera, pero para este ejemplo bastara

if(isset($_GET["enviar-hid"])){
    //el metodo get contiene al boton oculto
    if($nombre==$_GET["nombre"] && $password==$_GET["password"]){
        echo "bienvenido {$nombre} con metodo GET";
    } 
    else{
        header("Location:formulario.php?error=si");
    }
}

if(isset($_POST["enviar-hid"])){
    //el metodo get contiene al boton oculto
    if($nombre==$_POST["nombre"] && $password==$_POST["password"]){
        echo "bienvenido {$nombre} con metodo POST";
    } 
    else{
        header("Location:formulario.php?error=si");
    }
}



?>