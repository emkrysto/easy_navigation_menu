<?php
// DEFINITIONS TO SET
date_default_timezone_set('Europe/London');
define('FOLDER', 'webpage-template');
define('SOFTWERE_VERSION', '1.0.0');

// CONSTANTS NAMES DEFINITIONS
define('SP', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('ROOT_FOLDER', $_SERVER['DOCUMENT_ROOT'].SP.FOLDER);
define('YOUR_IP', $_SERVER['REMOTE_ADDR']);
define('YOUR_HOST', gethostbyaddr($_SERVER['REMOTE_ADDR']));
define('TIMEZONE', date_default_timezone_get());

// MODUL
define('MODUL_LINK', 'index.php?m=');
?>