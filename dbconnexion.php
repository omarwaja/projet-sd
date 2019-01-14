<?php
	try
		{
			$db='mysql:host=localhost;dbname=sd';
			$user='root';
			$mp='';
			$connexion=new PDO($db,$user,$mp);
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
		}
		catch (Exception $Obj)
		{
			echo " connexion impossible".$Obj->getMessage();
		}
?>
