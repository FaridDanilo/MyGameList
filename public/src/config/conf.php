<?php
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/MyGameList/');

define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/MyGameList/');

define('DB_CONN_PATH', BASE_PATH . '/../db/conn.php');

define('ASSETS_URL', BASE_URL . 'public/assets/');

define('HEADER_PATH', BASE_PATH . 'public/src/inc/header.php');

define('FOOTER_PATH', BASE_PATH . 'public/src/inc/footer.php');

define('UPLOAD_PATH', BASE_PATH . '/public/src/uploads/');
