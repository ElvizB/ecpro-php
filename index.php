<?php

$componentes_url = parse_url($_SERVER['REQUEST_URI']);

//$componentes_url = parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
//houseckeers.herokuapp.com


$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'views/404.php';

if($partes_ruta[0] == 'ecpro'){
  if (count($partes_ruta) == 1){
    $ruta_elegida = 'views/home.php';
  }else if (count($partes_ruta) == 2){
    switch($partes_ruta[1]){
      case 'nosotros':
        $ruta_elegida = 'views/nosotros.php';
        break; 

        case 'clases-libres':
          $ruta_elegida = 'views/clases-libres.php';
          break; 
    }
  }
}

include_once $ruta_elegida;