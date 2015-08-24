<?php
$mac=htmlspecialchars($_GET["mac"]);
$output = shell_exec("sudo /usr/sbin/etherwake " . $mac);
//echo "Sent!";
?>
