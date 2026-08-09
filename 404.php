<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

header("HTTP/1.1 404 Not Found");

$page = dvwaPageNewGrab();
$page[ 'title' ]   = '404 Not Found' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = '404';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Error 404 - Página no encontrada</h1>
	<p>El recurso solicitado no se encuentra disponible en este servidor.</p>
</div>";

dvwaHtmlEcho( $page );

?>
