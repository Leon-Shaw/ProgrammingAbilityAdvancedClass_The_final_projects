<?php
/**
 * Created by PhpStorm.
 * User: LeonShaw
 * Date: 2019/1/11
 * Time: 8:09
 */
session_start();
header('Access-Control-Allow-Headers:Content-Type');
header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin:http://10.30.29.79:63341');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT');
//setcookie('username','');
$_SESSION["uname"] = NULL;
$arr = array('message' => "success");
echo json_encode($arr);