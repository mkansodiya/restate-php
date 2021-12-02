<?php
$con = new PDO("mysql:host=localhost;dbname=restate;", "root", "");
if ($con) {
} else {
    die(mysqli_error($con));
}
