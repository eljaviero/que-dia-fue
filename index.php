<?php

include_once("config.php");
$_GET['cache'] = 'no';

/**
 ====== PROGRAMA PRINCIPAL ======
 */

$diasDeLaSemana = array('Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado');

$loader = new Twig_Loader_Filesystem(RUTA_BASE.'plantillas');

if ($_GET['cache']=='no') 
    $twig = new Twig_Environment($loader,array('auto_reload'=>TRUE,
                                               'charset'=>'utf-8',
                                               'cache'=>DIR_CACHE));
else
    $twig = new Twig_Environment($loader,array('charset'=>'utf-8',
                                               'cache'=>DIR_CACHE));
if ($_POST['submit_dia']=='on')
  {
  $timestamp = strtotime($_POST['anho'].'-'.$_POST['mes'].'-'.$_POST['dia']); 
  $dia = getdate($timestamp);
  }
else
  {
  $dia = getdate();
  }

$diaDeLaSemana = $diasDeLaSemana[$dia['wday']];


echo $twig->render('que-dia-fue.html.twig', 
                    array('analytics' => file_get_contents(RUTA_ABSOLUTA_WWW.'includes/analyticstracking.php'),
                          'mensaje' => $mensaje, 
                          'self_url' => URL_BASE,
                          'dia' => $dia,
                          'diaDeLaSemana' => $diaDeLaSemana)
                    );

/** 
 ====== FUNCIONES ======
 */

?>