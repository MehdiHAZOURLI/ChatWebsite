	var option=false;
			var sidebar="<div class='user'><i class='fa-solid fa-circle-user photo_user'></i><span style='padding-left: 10px;'>User</span></div><input  id='input_search' type='text' placeholder='Recherche'><div id='contact' style='padding-left: 15%;padding-top: 20px;'><span style='font-size:25px;'>Contact</span></div><div><div class='user_other'><i class='fa-solid fa-circle-user' style='font-size: 35px;padding-right: 10px;'></i><span class='usermane_user'>Mehdi</span><span class='relation'>Amis</span></div></div>";


			function showOptions(){
				if(option){
					document.getElementById("option").innerHTML="";
				}else{
					if((document.getElementsByTagName("html")[0].offsetWidth) <= 650){

						document.getElementById("option").innerHTML+="<ul><li>option 1</li><li>option 2</li><li onclick='showBarSide()'>Show</li></ul>";

					}else{

						document.getElementById("option").innerHTML+="<ul><li>option 1</li><li>option 2</li></ul>";

					}
				}
				option=!(option);
			}


			function showBarSide(){
				if((document.getElementsByTagName("html")[0].offsetWidth) <= 650){
					document.getElementById("barside").innerHTML="<i id ='exit' class='fa-regular fa-circle-xmark' onclick='exit()'></i>"+sidebar;
				}else{
					document.getElementById("barside").innerHTML=sidebar;

				}
				document.getElementById("barside").style.width="52%";
				showOptions();

			}

			function exit(){
				document.getElementById("barside").innerHTML="";
				document.getElementById("barside").style.width="0%";

			}
