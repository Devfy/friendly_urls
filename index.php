<?php

/**
 * Phpurl - Url's amigables en PHP.
 *
 * Author: Balloon Development.
 * Licence: MIT.
 */

require_once 'app\Request.php';
require_once 'app\Response.php';
require_once 'app\View.php';

// Obtener la variable url por GET.
(empty($_GET['url'])) ? $url = null : $url = $_GET['url'];

// Procesar el request;
$req = new \app\Request($url);
$req->execute();