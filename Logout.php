<?php
session_start();
session_unset($_SESSION["username"]);
session_destroy();
session_reset();
header("location: login.php");