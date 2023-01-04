<?php
session_start();
include('inclod/connections.php');
session_unset();
session_destroy();
header('location:index.php');


?>