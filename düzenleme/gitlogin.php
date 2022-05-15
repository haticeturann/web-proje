<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERZURUM</title>
    
    <link rel="stylesheet" href="style.css">

    <link href="https: //fonts.googleapis.com/css2? aile= Lato:wght@400;700 & display=swap" rel="stylesheet">
    <link href="https: //fonts.googleapis.com/css2? aile= Montserrat+Subrayada:wght@400;700 & display=swap" rel="stylesheet">

</head>
<body>

	
	<main>

		<div class="contanier">
			
			<?php 

				include("kullanici.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; url=iletişim.php");
			    }
			
			?>
			
		</div>

	</main>

    <!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>




	

</body>

</html>