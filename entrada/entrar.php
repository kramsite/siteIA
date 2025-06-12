<?php
session_start();
session_destroy();
header("Location: ../oque/oque.php");
exit();