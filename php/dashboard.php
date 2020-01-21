<?php

$userid = $_POST["userid"];
$password = $_POST["password"];

if($userid === "jase" && $password === "1234"){
  echo "<h1>Welcome, $userid</h1>";
} else {
  echo "Incorrect Login Details";
}

?>
