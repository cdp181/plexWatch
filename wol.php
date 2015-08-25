<?php
$mac=htmlspecialchars($_GET["mac"]);
$output = shell_exec("/usr/sbin/etherwake " . $mac);
//echo "Sent!";
?>
