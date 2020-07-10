<?php

session_start();
session_destroy();

echo '<script>window.alert("Logged out");window.location.href="student.html";</script>';

?>