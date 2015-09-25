<?php

include_once("config.php");

$_GET['cache'] = 'no';

/**
 ====== PROGRAMA PRINCIPAL ======
 */

$loader = new Twig_Loader_Filesystem(RUTA_BASE.'plantillas');

if ($_GET['cache']=='no') 
    $twig = new Twig_Environment($loader,array('auto_reload'=>TRUE,
                                               'charset'=>'utf-8',
                                               'cache'=>DIR_CACHE));
else
    $twig = new Twig_Environment($loader,array('charset'=>'utf-8',
                                               'cache'=>DIR_CACHE));
if ($_POST['submit_dia']=='on')
  $mensaje = 'EN DESARROLLO';

$html_centro = 
 "<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>";

echo $twig->render('que-dia-fue.html.twig', 
                    array('analytics' => file_get_contents(RUTA_ABSOLUTA_WWW.'includes/analyticstracking.php'),
                          'mensaje' => $mensaje, 
                          'self_url' => URL_BASE,
                          'hoy' => getdate(),
                          'html_centro' => $html_centro)
                    );

/** 
 ====== FUNCIONES ======
 */

?>