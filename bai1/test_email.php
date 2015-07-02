<?php
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
$email = $_POST["email"];
if (!preg_match($regex,$email)) {
   echo "email ko hop le";
}
?>