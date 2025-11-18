<?php
$username = $_POST['username'];
$password = $_POST['pass'];
if ((($username == 'joko') && ($password == 'passjoko')) || 
    (($username == 'rafa') && ($password == 'passrafa'))) {
        echo 'Login sukses';
}
else {
    echo 'Login gagal';
}
?>