<?php
include '../db.php';

function getALLUsers(){
    global $link;
    $query = "SELECT * FROM users";
    $resalt = mysqli_query($link, $query);
    $users = [];
    while ($user = mysqli_fetch_assoc($resalt))
    $users[] = $user;

return $users;
}
