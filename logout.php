<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
session_destroy();
header('Location: /club_sportiv/index.php');
exit;
?>