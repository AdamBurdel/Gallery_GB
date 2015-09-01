<?php
header('Content-Type: text/html; charset=utf-8');

require_once __DIR__ . '/models/photos.php';

$photos = Photos_getAll();

include 'view/index.php';