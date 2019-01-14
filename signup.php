<?php
require_once(realpath(__DIR__ . './dbconnexion.php'));
	$a=$_POST['username'];
	$b=$_POST['password'];
	
	$s="select * from user where login='$a' and password='$b'";
	$r=$connexion->query($s);
	$c=$r->fetchAll(PDO::FETCH_NUM);
	echo count($c);
	if(count($c) <> 0)header("location:./createuser?err=1");
	if(count($c) == 0)	{
		$sql=$connexion->prepare("INSERT INTO `user` (`login`, `password`) VALUES (:a, :b)");
				$sql->bindParam('a', $a);
				$sql->bindParam('b', $b);	
				$res=$sql->execute();
		header("location:./createuser?err=0");
	}
?>