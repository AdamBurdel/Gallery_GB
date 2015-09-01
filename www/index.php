<?php
header('Content-Type: text/html; charset=utf-8');

require_once __DIR__ . '/models/photos.php';

$photos = Photos_getAll();

?>
<img style="float: right;z-index: -200;position:absolute;right:0px;" src="img/warerfall.gif">
<?include 'view/index.php';?>