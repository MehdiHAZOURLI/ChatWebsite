<?php
include("Connexion.php");
session_start();

if(isset($_SESSION["id"])){
	header('Location:PrincipalePage.php');
}

if(isset($_POST["button_connexion"]) && !empty($_POST["username"])  && !empty($_POST["password"])){
$id=null;
 $requete=$connexion->prepare("select id from user where userName=:userName and passWord=:passWord");

$requete->bindParam(":userName",$_POST["username"],PDO::PARAM_STR);

$requete->bindParam(":passWord",$_POST["password"],PDO::PARAM_STR);

$requete->execute();


$id=$requete->fetch(PDO::FETCH_ASSOC);

if($id){
	$_SESSION["id"]=$id["id"];
header('Location:PrincipalePage.php');
}else{
$message='Error password or username not correct';
echo "<div id='error' style='position :absolute ;min-height: 133px; width:280px;z-index: 3;background-color: #61fcae;top: 50%;left: 50%;border-radius:8px;transform: translate(-50%, -50%);padding-top: 17px;padding-left: 20px;padding-bottom: 8px;'><div id='message_error' style='height: auto;width: 260px;padding-bottom: 45px;'><span>".$message."</span></div><a href='LogPage.php'><button style='height: 27px;width: 77px;position: relative;left: 60%;top: 34%;border-radius: 8px;color: #61fcae;background-color: white;border:none;'>OK</button></a></div>";
}
}
?>









<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/58c985afb6.js" crossorigin="anonymous"></script>
	<title></title>
	<link rel="stylesheet" href="css/LogPage.css">


	<script type="text/javascript" src="js/LogPage.js">
		
	</script>
</head>
<body>

	<header>
		<div  class="options" >
		</div>
		<div class="emplacement_logo"><img  class="logo" src="Ressources\Logo\logo.png"></div>

	</header>

	<div id="body">
		<form method="post">
			<div id="formule">

				<div id='image_user' style='margin-bottom: 25px;'>
					<img src='' id='logo_forum'></div>
					<input type='text'   name='username' id='username' placeholder='Username' style='height:20%'>
					<input type='password' style='height:20%' name='password' id='password' placeholder='Password'>
					<button name="button_connexion" id='button_connexion' style='height:23%'>Connexion</button>
					<div class='second_option'>Create <a onclick='optionChange()' style='color:#61fcae;'>an Account</a></div>



				</div></form>

			</div>


			<div class="footer"><span>Contact</span></div>



		</body>
		</html>



