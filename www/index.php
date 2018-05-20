<?php
$con=new \PDO("mysql:host=mysql","root","123456aB");//
$con->exec("CREATE DATABASE test");
echo `whoami`;
phpinfo();