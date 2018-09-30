<?php

use \Db\Users;

$users = new Users($builder);

$allUsers = $users->getAllUsers();

echo '<ul>';

foreach ($allUsers as $user){
echo '<li>';
echo 'id: '.$user['id'].' - login:'.$user['login'];
echo '</li>';
}

echo '</ul>';
?>