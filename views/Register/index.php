<!-- include('views/layouts/)-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registro</title>
</head>
<body class="body">
<?php include('views/layouts/head.php') ?>

<body>
<div class="container">
		<div class="form__top">
			<h2><span>Register</span></h2>
		</div>		
		<form class="form__reg" action="">
            <input class="input" type="text" placeholder="&#128100;  Name" required autofocus>
            <input class="input" type="text" placeholder="&#128090;   Last_name" required>
            <input class="input" type="email" placeholder="&#128084;  Document" required>
            <input class="input" type="password" placeholder="&#127760;  Password" required>
            <input class="input" type="email" placeholder="&#9993;  Email" required>
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="SignUp">
            	<input class="btn__reset" type="reset" value="Clear">	
            </div>
		</form>
	</div>
</body>
</html>