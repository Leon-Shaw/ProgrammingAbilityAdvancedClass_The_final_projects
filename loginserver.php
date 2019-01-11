<?php
/**
 * Created by PhpStorm.
 * User: LeonShaw
 * Date: 2019/1/11
 * Time: 8:10
 */
header('Access-Control-Allow-Headers:Content-Type');
header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin:http://10.30.29.79:63341');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT');
session_start();
$data = json_decode(file_get_contents("php://input"), true);
$name = $data["userName"];
$psd = $data["passWord"];
if ($name == "123" && $psd == "123") {
    //setcookie('username',$name);
    $_SESSION["uname"] = $name;
    $arr = array('message' => "success");
} else {
    $arr = array('message' => "error");
}
echo json_encode($arr);