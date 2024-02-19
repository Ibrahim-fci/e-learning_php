<?php

// remove session and redirect to login page

session_start();
session_unset();
session_destroy();
header("Location: ../views/login.php");
