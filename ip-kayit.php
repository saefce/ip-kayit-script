Script:
<?php
$ipadres = $_SERVER["REMOTE_ADDR"]; 
$ipkayit = fopen("ipkayit.txt");
fwrite($ipkayit,"$ipadres<br>");
echo "IP Adresiniz : $ipadres kayıt edildi...";
?>