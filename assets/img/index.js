function Bonjour() { 
		var prenom = document.forms["form"].elements["Prénom"].value.length;
		if (prenom < 4) { alert ("Veuillez entrer un prénom valide");}
				 }
function Bonjour2(){
		var nom = document.forms["form"].elements["Nom"].value.length;
		if (nom < 4) { alert ("Veuillez entrer un nom valide");}
}
function Bonjour3(){
		var cne = document.forms["form"].elements["CNE"].value.length;
		if (cne != 10) { alert ("Veuillez entrer un CNE valide");}
		}
function Bonjour31(){
		var SOM = document.forms["form"].elements["SOM"].value.length;
		if (SOM != 7) { alert ("Veuillez entrer un SOM valide");}
		}
function Bonjour32(){
		var CIN = document.forms["form"].elements["CIN"].value.length;
		if ((CIN < 3) || (CIN > 8)) { alert ("Veuillez entrer un CIN valide");}
		}
function Bonjour4(){
		var pass = document.forms["form"].elements["Pass"].value.length;
		if (pass < 8) { alert ("Veuillez entrer un Mot de passe valide (au moin 8 caractéres ) ");}
		}
function Bonjour5(){
		var email = document.forms["form"].elements["Email"].value.length;
		if (email < 10) { alert ("Veuillez entrer Email valide");}
		}
function Bonjour6(){
		var date = document.forms["form"].elements["Date"].value.length;
		if (date != 10) { alert ("Veuillez entrer une date de naissance valide AAAA-MM-JJ");}
		}
function Bonjour61(){
		var Lieu = document.forms["form"].elements["Lieu"].value.length;
		if (Lieu < 2) { alert ("Veuillez entrer un Lieu de naissance valide");}
}
function Bonjour7(){
		var tel = document.forms["form"].elements["Telephone"].value.length;
		if (tel != 10) { alert ("Veuillez entrer un numerp de telephone valide");}
		}
function Bonjour8(){
		var Adresse = document.forms["form"].elements["Adresse"].value.length;
		if (Adresse < 10) { alert ("Veuillez entrer Adresse valide");}
		}			 
			