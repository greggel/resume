<?php
$ip=$_SERVER['REMOTE_ADDR'];
echo shell_exec("nmap -v $ip");
//echo "done";

?>
