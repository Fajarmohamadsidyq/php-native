<?php

$user = "fajar21";
$email = "fajar@gmail.com";
$pass = "21";

echo "Username/email = $user <br>";
echo "Password = $pass <br>";
echo "Cek login = ";

(($user == "fajar21" || $email == "fajar@gmail.com") && ($pass == "21"));

?>