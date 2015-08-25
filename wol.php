<?php
$mac=htmlspecialchars($_GET["mac"]);
$output = shell_exec("sudo -n /usr/sbin/etherwake " . $mac);
//echo "Sent!";
?>
