<?php
include '../../conf/main.php';
session_name($sessionName);
session_set_cookie_params(0, '/',".".$domain);
session_start();
include '../header.html';
include '../../libs/functions.php';
include '../../model/settings_viewer.php';
include 'model/databases.php';
$postgisdb = 'mygeocloud';
$sTable = 'users';