<?php   header( 'Expires: Sat, 26 Jul 1997 05:00:00 GMT' ); 
header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' ); 
header( 'Cache-Control: no-store, no-cache, must-revalidate' ); 
header( 'Cache-Control: post-check=0, pre-check=0', false ); 
header( 'Pragma: no-cache' );
header('Referrer-Policy: no-referrer');

ob_start() ; 

//script 

header("Location: https://https://ad.a-ads.com/1099958?size=300x250"); 

ob_end_flush(); 
exit; 
?>