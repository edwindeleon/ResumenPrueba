<?php
/* Este archivo lo he subido al server de resumen de salud, esta en http://www.resumendesalud.com/app_resumen_de_salud */

if (isset($_POST)) {
	$Nombre = $_POST["nombre"];
$Apellido = $_POST["apellidos"];
$Email = $_POST["email"];
$Telefono = $_POST["telefono"];
$Comentario = $_POST["comentarios"];
                $data = '';
                foreach($_POST as $k => $v) {
                        if (is_array($v)) {
                                $data .= '<p><strong>'.$k.':</strong></p>';
                                $data .= '<ul>';
                                foreach($v as $x) {
                                        $data .= '<li>'.$x.'</li>';
                                }
                                $data .= '</ul>';
                        } else {
                                $data .= '<p><strong>'.$k.':</strong> '.$v.'</p>';
                        }      
                }
        




  
  $mail1 = "resumendesalud@gmail.com";
  $mail2 = "pedroangel@agenciatex.com";
  $mail3 = "prensapedroangel@gmail.com";
  $mail4 = "comunimas@gmail.com";
  $mail5 = "mardwintrader@gmail.com";

//$mail = $mail1.","$mail2.","$mail3.","$mail4.","$mail5;
$mail = "mardwintrader@gmail.com";
$message = " 
Mensaje desde la Aplicación Móvil de Resumen de Salud:

".$data."


"; 
 $cabeceras = "Content-type: text/html; charset=utf-8 \r\n";
        $cabeceras .= "MIME-Version: 1.0 \r\n";
        $cabeceras .= "From: <AppMovil@resumendesalud.com> \r\n";
  if (mail($mail,"Mensaje desde la Aplicación Móvil de Resumen de Salud:",$message,$cabeceras))  {
      //Header ("Location: http://hodelpa.com/es/mobile/gracias.html"); 
    ?>
    <script type="text/javascript">
      alert("Mensaje enviado");
      window.history.go(-2);
      return false;
    </script>
    <?php
  }
else
{
	 ?>
    <script type="text/javascript">
      alert("Mensaje no enviado\nvuelva a intentarlo.");
      window.history.go(-2);
      return false;
    </script>
    <?php
}
}	   
?>