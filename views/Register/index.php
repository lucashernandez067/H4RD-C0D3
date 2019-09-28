<?php require_once('views/layouts/head.php'); ?>


<?php require_once('views/layouts/banner.php'); ?>
<body class="body">
<div class="containerd">
		<div class="form__top">
			<h2><span>Register</span></h2>
		</div>		
		<form class="form__reg" action="?c=Register&m=registrar" method="post">
                <input class="input" type="text" name="name" placeholder="&#128100;  Name" required autofocus>
                <input class="input" type="text" name="last_name" placeholder="&#128090;   Last_name" required>
                <input class="input" type="number" name="document" placeholder="&#128084;  Document" required>
                <input class="input" type="password" name="pass" placeholder="&#127760;  Password" required>
                <input class="input" type="email" name="email" placeholder="&#9993;  Email" required>
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="SignUp">
            	<input class="btn__reset" type="reset" value="Clear">	
            </div>
		</form>
	</div>
</body>
</html>