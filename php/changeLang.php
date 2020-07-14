<?php
$cookie_name = "lang";
if ($_GET["lang"] == 'mr') {
    $cookie_value = $_GET["lang"];
} else {
    $cookie_value = 'en';
}
setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
echo '<script>window.location.href = "../";</script>';
?>
