<?php

/**
 * Phurl - Url's amigables en PHP.
 *
 * Author: Balloon Development.
 * Licence: MIT.
 */

use BalloonDev\Phurl\Request as Request;

require_once 'start.php';

// Obtener la variable url por GET.
(empty($_GET['url'])) ? $url = null : $url = $_GET['url'];

// Procesar el request;
$req = new Request($url);
$req->execute();