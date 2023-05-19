<?php
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$input3 = $_POST['input3'];

$data = "url: $input1, username: $input2, password: $input3";

file_put_contents('input1.txt', $input1);
file_put_contents('input2.txt', $input2);
file_put_contents('input3.txt', $input3);
file_put_contents('data.txt', $data);
?>
