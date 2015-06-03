<?php
// (c) 2015  athul jayaram
$output = shell_exec('gpio mode '.$_GET['pin'].' out');
$output = shell_exec('gpio write '.$_GET['pin'].' '.$_GET['switch']);
echo $_GET['status'];
$output = shell_exec('gpio read 8');
echo "GPIO 2:".$output."<br>";
$output = shell_exec('gpio read 9');
echo "GPIO 3:".$output."<br>";
$output = shell_exec('gpio read 7');
echo "GPIO 4:".$output."<br>";
$output = shell_exec('gpio read 11');
echo "GPIO 7:".$output."<br>";
$output = shell_exec('gpio read 10');
echo "GPIO 8:".$output."<br>";
$output = shell_exec('gpio read 13');
echo "GPIO 9:".$output."<br>";
$output = shell_exec('gpio read 12');
echo "GPIO 10:".$output."<br>";
$output = shell_exec('gpio read 14');
echo "GPIO 11:".$output."<br>";
$output = shell_exec('gpio read 0');
echo "GPIO 17:".$output."<br>";
$output = shell_exec('gpio read 1');
echo "GPIO 18:".$output."<br>";
$output = shell_exec('gpio read 3');
echo "GPIO 22:".$output."<br>";
$output = shell_exec('gpio read 4');
echo "GPIO 23:".$output."<br>";
$output = shell_exec('gpio read 5');
echo "GPIO 24:".$output."<br>";
$output = shell_exec('gpio read 6');
echo "GPIO 25:".$output."<br>";
$output = shell_exec('gpio read 2');
echo "GPIO 27:".$output."<br>";
$output = shell_exec('gpio read 15');
echo "UART TX:".$output."<br>";
$output = shell_exec('gpio read 16');
echo "UART RX:".$output."<br>";
?>










