var percentage_loop=0;
var  time;
function optionChange(){
	var options; // 0 : sign in || 1 : sign up
	if(document.getElementById("formule").style.height=="45%" || document.getElementById("formule").style.height==""){

		options=1;
	}else{
		options=0;
	}
	document.getElementById("formule").style.transition="0.5s";
	document.getElementById("formule").style.height="10px";
	document.getElementById("formule").innerHTML="<div style='background-color: #61fcae;width: 0%;height: 10px;border-radius: 8px;'></div>";

	if(document.getElementById("formule").getElementsByTagName("div")!= null){
		ChangeToSignUpOrSignIn(options);
	}

}

function ChangeToSignUpOrSignIn(options){
	if(percentage_loop < 100){
		percentage_loop++;
		document.getElementById("formule").getElementsByTagName("div")[0].style.width=percentage_loop+"%";
		time=setTimeout(function(){ChangeToSignUpOrSignIn(options)},10);						
	}else{
		percentage_loop=0;
		clearTimeout(time);
		if(options==0){
			document.getElementById("formule").style.transition="0.5s";
			document.getElementById("formule").style.height="45%";

			document.getElementById("formule").innerHTML="<div id='image_user' style='margin-bottom: 25px;'><img src='' id='logo_forum'></div><input type='text'   name='username' id='username' placeholder='Username' style='height:20%'><input type='password' style='height:20%' name='password' id='password' placeholder='Password'><button name='button_connexion' id='button_connexion' style='height:23%' onclick='verification()'>Connexion</button><div class='second_option'>Create <a onclick='optionChange()' style='color:#61fcae;'>an Account</a></div>";}
			else{
				document.getElementById("formule").style.transition="0.5s";
				document.getElementById("formule").style.height="95%";
				document.getElementById("formule").innerHTML="<div id='image_user' style='margin-bottom: 25px;'><img src='' id='logo_forum'></div><input type='text' name='first_name' id='first_name' placeholder='First Name'><input type='text' name='last_name' id='last_name' placeholder='Last Name'><input type='text' name='username' id='username' placeholder='Username'><input type='date' name='date' id='date' placeholder='Date of Birth'><input type='password' name='password' id='password' placeholder='Password'><input type='password' name='confirmation_password' id='confirmation_password' placeholder='Password Confirmation'><textarea id='description' placeholder='Description'></textarea><button name='button_create_account' id='button_create_account' onclick='verification()'>Create</button><div class='second_option'>have an <a onclick='optionChange()'style='color:#61fcae;'>Account</a></div>";
			}
		}
	}









