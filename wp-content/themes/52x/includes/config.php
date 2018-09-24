<?php

// Env

$ftx_page_protocol = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
$ftx_page_url      = $ftx_page_protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ftx_domain        = $ftx_page_protocol . $_SERVER['HTTP_HOST'];

if ( strpos( $ftx_page_url, '?') > -1 ) {
  $ftx_page_url = substr( $ftx_page_url, 0, strpos( $ftx_page_url, '?') );
}

// Globals

define( 'FTX_VERSION', '1.0.2' );
define( 'FTX_DEBUG', true );
define( 'FTX_DEV', ( strpos( $ftx_page_url, '.test') !== false || strpos( $ftx_page_url, 'localhost') !== false ) );
