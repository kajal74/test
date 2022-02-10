<?php
session_start();
echo $_SESSION["id"];
// session_destroy();
header ("location: login.html");
?>