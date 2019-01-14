
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login']))
{
  header("location:./client-authentification.php");
}
 ?>
<html lang="en" >
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
		body {
			background: #dedede;
		}
		.page-wrap {
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<div class="page-wrap d-flex flex-row align-items-center">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center">
					<span class="display-3 d-block">Successfully authenticated</span>
					<div class="mb-4 lead">This is a static index.html page.</div>
					<a href="./deconexion" class="btn btn-link">Disconnect</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>