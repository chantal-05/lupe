<?php
$name = $_POST['nombre'];
$asunto =$_POST['asunto'];
$email= $_POST['email'];
$mess = $_POST['mensaje'];
$fecha = time ();
if($email && $mess && $name) {
$f =fopen("archivo.html", "a");
fwrite ($f, '<tr><td style="color: red;">'.date ( "d:m:Y", $fecha ). '</td><td>'.$name.'</td><td>'.'</td><td>'.$correo.'</td><td>'.$asunto.'</td></td>'.$mess.'</td></tr>');
fclose($f);
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado con exito,lo atenderemos lo antes posible. gracias');</script>";
echo "<script>location='contacto.html'</script>";
}
else
{ echo '<font color="#ff0000" size="5">ERROR: </FONT><B>Tu mensaje no puede enviarse, debes llenar todos los campos: </B>'.'<a href=form.html"><b>Regresar</b></a>';
} ?>