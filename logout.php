<?php
session_start();

// Destroy the session
session_destroy();

// Redirect the user to the login page or any other desired page
echo "<script>window.location.href = 'index.php';</script>";
exit();
?>
