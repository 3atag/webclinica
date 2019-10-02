<?php
$con = new mysqli('localhost', 'root', '123456', 'webclinica');
$con->query("SET NAMES 'utf8' ");

if ($con->connect_error) {
echo $error->$con->connect_error;
}
