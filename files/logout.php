<?php

require 'config.inc.php';
require 'connection.php';

session_destroy();

header("Location:login.php");
exit();



?>