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
<body>
<div class="container">
		<div class="form__top">
			<h2>Formulario <span>Registro</span></h2>
		</div>		
		<form class="form__reg" action="">
			<input class="input" type="text" placeholder="&#128100;  Nombre" required autofocus>
            <input class="input" type="email" placeholder="&#9993;  Email" required>
            <input class="input" type="text" placeholder="&#128222;  Telefono" required>
            <input class="input" type="text" placeholder="&#8962;  Dirección" required>
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
	</div>
</body>
</html>