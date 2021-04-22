<?php

/*
* Error Configuration 
*/

ini_set('log_errors', 1);
ini_set('error_log', '/tmp/app.log');


if ($_ENV['ENV_MODE'] == 'Production'){
    error_reporting(0);
    ini_set('display_errors', FALSE);
    ini_set('display_startup_errors', FALSE);
}else{
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
}
