<?php
//validar Captcha, con función isset para determinar si la variable está definida y no es nula.

if (isset($_POST['action']) && ($_POST['action'] == 'process')) {

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
$recaptcha_secret = '6Lc8TM8UAAAAACom4QtTT1GMmyG-jBgEWQ-8eRBh'; 
$recaptcha_response = $_POST['recaptcha_response']; 
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
$recaptcha = json_decode($recaptcha); 
if($recaptcha->score >= 0.7){

  // código para procesar los campos y enviar el form

} else {

  // código para lanzar aviso de error en el envío

}

}

?>


<?php
//VARIABLES PARA VALIDAR FORMULARIO
$nombre=$_POST['nombre2'];
$email=$_POST['email2'];
$telefono=$_POST['telefono2'];
$comentario=$_POST['comentario2'];
$bl=$_POST['bl'];
$no=$_POST['no'];
$accion=$_POST['accion'];

//VARIABLE MENSAJE y VALIDAR CORREO

$mensaje = "

nombre:".$nombre."
email:".$email."
telefono:".$telefono."
comentario:".$comentario.""; 

//CABECERAS OBLIGATORIAS

$cabecera = "Mine-Version: 1.0"."\r\n";
$cabecera .= "Content-type:text/html;charset=UTF-8"."\r\n";

//CABECERAS OPCIONALES

$cabecera .= "From: ".$email."\r\n";
$cabecera .= "Cc:".$email."\r\n";

//ENVIAR CORREO CON LA FUNCION MAIL, INCORPORAR CORREO DE DESTINO Y MENSAJE

if ($nombre<>'' && $accion == 1 && $bl == '' && $no == 'http://') { 
mail("mrarcos20@disfrutamicasa.cl","TIENES UN NUEVO MENSAJE",$mensaje,$cabecera);
}
?>
