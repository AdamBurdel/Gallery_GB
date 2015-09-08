<?php
header('Content-Type: text/html; charset=utf-8');
require_once __DIR__ . '/models/photos.php';


if (!empty($_GET['catID'])) {
    deletePhoto();
}
else {
}


$photos = Photos_getAll();

if ($_GET['addnew']== 'yes') {
    include 'view/addcat.php';
}
else {
 include 'view/index.php';
};
?>
