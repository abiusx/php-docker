<?php
$mem_var = new Memcached();
$mem_var->addServer("memcached", 11211);
// for ($i=0;$i<10000;++$i)
	$mem_var->get("test");


$redisClient = new Redis();
$redisClient->connect( 'redis' );
// for ($i=0;$i<10000;++$i)
	$redisClient->get("test");
	// $redisClient -> set('key',"test".$redisClient -> get('key'));


$con=new \PDO("mysql:host=mysql","root","123456aB");//
$con->exec("CREATE DATABASE test");
echo `whoami`;
phpinfo();

