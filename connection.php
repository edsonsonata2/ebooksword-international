<?php

$db_host = "localhost";
$db_username = "ebooks_word";
$db_password = "vivania1992ridelbancoebooks";
$db_name = "ebooks_word_data";

$conn = new mysqli($db_host,$db_username,$db_password,$db_name);
if($conn->connect_error){
    die("Erro:".$conn->connect_error);
}