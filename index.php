<?php
session_start();
require_once('./private/core/DevCode.php');
require_once('./private/bridge.php');

use DevCoder\DotEnv;

(new DotEnv(__DIR__ . '/.env'))->load();

$myApp = new App();
