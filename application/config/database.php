<?php
/*
-- ---------------------------------------------------------------
-- MYRAPORT K13
-- CREATED BY : NGODING PINTAR
-- COPYRIGHT  : Copyright (c) 2019 - 2020, (youtube.com/ngodingpintar)
-- CREATED ON : 2019-11-26
-- UPDATED ON : 2020-02-10
-- ---------------------------------------------------------------
*/

defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'e-raport',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
