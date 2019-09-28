<?php require_once('views/layouts/head.php'); ?>

<body class="body">
<div class="container">
		<div class="form__top">
			<h2><span>Register</span></h2>
		</div>		
		<form class="form__reg" action="">
            <input class="input" type="text" placeholder="&#128100;  Name" required autofocus>
            <input class="input" type="text" placeholder="&#128090;   Last_name" required>
            <input class="input" type="number" placeholder="&#128084;  Document" required>
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