<?php


if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
    isset($_POST["correo"]) && !empty($_POST["correo"]) &&
    isset($_POST["mensaje"]) && !empty($_POST["mensaje"]) &&
    isset($_POST["asunto"]) && !empty($_POST["asunto"]))
{


 $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $Subject = $_POST['asunto'];


$EmailTo = "rmalagon@asesoria-nvrm.com.mx";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Correo: ";
$Body .= $correo;
$Body .= "\n";
$Body .= "Asunto: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $mensaje;
$Body .= "\n";



// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$correo);

if ($success && $errorMSG == ""){
   echo "ok";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}


}


?>
