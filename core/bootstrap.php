<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/02/2015
 * Time: 01:12
 */

require_once __DIR__ . '/../vendor/autolaod.php';
require_once __DIR__ . '/config.inc.php';

use RedBean_Facade as R;

if(empty(R::$currentDB)) {
    $dsn = sprintf('%s:host=%s;dbname=%s', DB_TYPE, DB_HOST, DB_NAME);
    R::setup($dsn, DB_USER, DB_PASSWORD);
    R::close();
}