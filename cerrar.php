<?php
session_start();
session_unset();
session_destroy();
headr('location:login.php');

?>