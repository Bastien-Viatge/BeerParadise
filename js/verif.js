
<!DOCTYPE html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="javascript" type="text/javascript" >






// Vérification des champs obligatoires du formulaire
function verif()
{
	//var nom = monFormulaire.Nom.value;
	if (monFormulaire.Nom.value == "")
	{
		alert ('Veuillez entrer votre Nom');
		monFormulaire.Nom.focus();
		return false;
	}
	if(monFormulaire.Prenom.value == "")
	{
		alert ('Veuillez entrer votre prénom');
		monFormulaire.Prenom.focus();
		return false;
	}

	if(monFormulaire.Age.value == "")
	{
		alert ('Veuillez entrer votre Age');
		monFormulaire.Age.focus();
		return false;
	}
	if(monFormulaire.Mail.value == "")
	{
		alert ('Veuillez rentrer votre Adresse Mail');
		monFormulaire.Mail.focus();
		return false;
	}

	else {return true;}
}



</script>
</head>
<body>
</body>
</html>