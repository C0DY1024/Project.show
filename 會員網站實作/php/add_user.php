<?php
require_once 'db.php';
require_once 'function.php';

$check = add_user($_POST['un'],$_POST['pw'],$_POST['n']);

if ($check){
    echo 'yes';
}
else{
    echo 'no';
}
?>