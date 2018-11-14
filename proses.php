<?php

$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password==$password2){
echo "Password Berhasil Dibuat";
}else{
echo "Maaf password yang anda input tidak sama, silahkan coba lagi";
}

?>