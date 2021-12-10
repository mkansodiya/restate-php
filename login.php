<?php
include('inc/functions.php');

$query = new query();
$type = $_POST['type'];
$email = $_POST['email'];
$password = $_POST['password'];
$response = array("status" => 0, "type" => $type, "msg" => "error occured");
if ($type == "login") {
    $q = $query->fetchData("users", "`id`,`email`,`password`", "email='{$email}'");
    if (count($q) != 0) {
        if ($q[0]['password'] === $password) {
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $q[0]['id'];
            $response = ["status" => 1, "msg" => "Login successful"];
        } else {
            $response = ["status" => 0, "type" => $type, "msg" => "Login failed"];
        }
    }
} else {
    $terms = $_POST['terms'];
    if ($terms == "on") {
        $email = $_POST['email'];
        $q = $query->fetchData("users", "`email`", "email='{$email}'");
        if (count($q) != 0) {
            $response = ["status" => 0, "type" => $type, "user_id" => null, "msg" => "User already exists"];
        } else {
            $password = $_POST['password'];
            $f_name = $_POST['first_name'];
            $l_name = $_POST['last_name'];
            $data = ["first_name" => $f_name, "last_name" => $l_name, "email" => $email, "password" => $password, "role" => "user", "registered_on" => date("y-m-d H:i:s")];
            $r = $query->insert("users", $data);
            if ($r) {
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $r;
                $response = ["status" => 1, "type" => $type, "user_id" => $r, "msg" => "Registration successful"];
            } else {
                $response = ["status" => 0, "type" => $type, "user_id" => null, "msg" => "Registration Failed"];
            }
        }
    } else {
        $response = ["status" => 0, "type" => $type, "user_id" => null, "msg" => "You must agree to our Terms"];
    }
}
echo json_encode($response);
