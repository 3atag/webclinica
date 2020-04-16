<?php
$con = new mysqli('localhost', 'root', '', 'webclinica');
$con->query("SET NAMES 'utf8' ");

if ($con->connect_error) {
echo $error->$con->connect_error;
}
