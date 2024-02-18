<?php
session_start();

print_r($_SESSION['login_errors']);
print_r($_SESSION['user']);
echo "welcome";