<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/58c985afb6.js" crossorigin="anonymous"></script>
	<title></title>
	 <link rel="stylesheet" href="css/PrincipalePage.css">
	<style type="text/css">
		
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

		<script type="text/javascript" src="js/PrincipalePage.js">
		
		</script>
	</head>
	<body>

		<header>
			<div  class="options" >
				<i class="fa-solid fa-bars icon-option" onclick="showOptions()"></i><div id="option"></div></div>
				<div class="emplacement_logo"><img  class="logo" src="Ressources\Logo\logo.png"></div>

			</header>

			<div id="body">

				<div  id="barside" >

					<div class="user"><i class='fa-solid fa-circle-user photo_user'></i><span style='padding-left: 10px;'>User</span>
					</div><input type='text' placeholder='Recherche' id="input_search">
					<div id='contact' style='padding-left: 15%;padding-top: 20px;'><span style='font-size:25px;'>Contact</span>

					</div>

					<div>
						<div class='user_other'><i class='fa-solid fa-circle-user' style='font-size: 35px;padding-right: 10px;display:inline;'></i><span class='usermane_user'>Mehdi</span><span class='relation'>Amis</span></div>

					</div>

				</div>

				<div id="messages">


					<div style="overflow: auto;height: auto;margin-bottom:100px; ">


<div style="margin-left: auto;margin-right: auto;height: auto;margin-bottom: 30px;">
							<i class="fa-solid fa-circle-user" style="font-size: 186px;position: relative;top: 50%;left: 50%;transform: translate(-50%, -50%);margin-top: 112px;"></i>	
							<div style="text-align: center;padding: 10px;">Description</div></div>

							<div class="message1">
								<i class="fa-solid fa-circle-user photo_user_message1" ></i><span  class="username_message1">Mehdi</span>
								<div class="message_received" >
									<p class="text_message1">hello my name is jeff</p>
								</div>
								<span class="time_message1">11:52</span>
							</div>




							<div  class="message2" >
								<i class="fa-solid fa-circle-user photo_user_message2"></i><span class="username_message2">Mehdi</span>
								<div class="message_sended">
									<p class="text_message2" >hello my name is jeff</p>
								</div>
								<span   class="time_message2" >11:52</span>
							</div>


						</div>


							<div  id="send_messages">
								<input type="text" id="message_input"><i class="fa-regular fa-paper-plane" id="icon_send"></i></div>

							</div>
						</div>



					</body>
					</html>