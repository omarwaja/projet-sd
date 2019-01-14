<?php
require_once(realpath(__DIR__ . './dbconnexion.php'));
  if(!isset($_POST['pseud']))
  {header('location:./index.php');}
  
	$a=$_POST['username'];
	$b=$_POST['password'];
		
	$s="select * from user where login='$a' and password='$b'";
	$r=$connexion->query($s);
	$c=$r->fetchAll(PDO::FETCH_NUM);
	  

	if($c[0][1]!=$a || $c[0][2]!=$b) {
	  header("location:./client-authentification.php?err=a");
	}else{
		  session_start();
		  $_SESSION['login'] = $a;
		  $_SESSION['pass'] = $b;
		  echo $_SESSION['pass'];
	   header("location:./index.php");
	}

  ?>