<?php
$conn = new mysqli('Localhost','root','','sabusk');
if($conn->connect_error){
    die("Gagal Connect".$conn->connect_error);
}
