<?php
require_once('vendor/autoload.php');

use CL\Controllers\MainController;

$cont=new MainController();
$view=$cont->process();



if(!empty($view)){
require_once('app/View/'.$view.'.php');
}

?>