<?php 
                          $myemail="CC@hotmail.com";
                          $mysifre='123';
                          $email = $_POST['email'];
                          $sifre = $_POST['sifre'];
                          $namen=explode("@",$email);
                          $signal=true;
                          if(strcmp($email, $myemail) == 0 && strcmp($sifre, $mysifre) == 0)
                          {
                            $signal=true;
                            
                          
                          
                          }else {
                            $signal=false;
                            header("refresh:5;url=login.html");  
                            
                            
                           
                          }
  ?>
<link rel="stylesheet" href="style.css">

    <link href="https: //fonts.googleapis.com/css2? aile= Lato:wght@400;700 & display=swap" rel="stylesheet">
    <link href="https: //fonts.googleapis.com/css2? aile= Montserrat+Subrayada:wght@400;700 & display=swap" rel="stylesheet">

</head>
<body>
    
	
	<main>

		<div class="container">
			
			<form action="gitlogin.php" method="POST">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email '123@sakarya.edu.tr'" required="required">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre '123'" required="required">
				</div>

				<button class="btn btn btn-info" type="submit">Gönder</button>

				<br><br><br>

			</form>

		</div>

	</main>





	

</body>

</html>