<?php
/* 
 * CONTROLLERS LOADER
 * List of API controlllers
 * WEB & REST
 */
require_once 'Pulse/Controller/api-core.php';
require_once 'Pulse/Controller/api-tables.php';
require_once 'Pulse/Controller/api-nav.php';
require_once 'Controller/Default.php';

//Add your own Controllers here:
//require_once 'Controller/MyControler.php

$API->processor();