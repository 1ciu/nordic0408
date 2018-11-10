<?php
include '../models/user.php';

$users = getALLUsers();

include '../views/home.php';

var_dump ($users);