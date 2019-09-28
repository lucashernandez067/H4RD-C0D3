
<?php include('views/layouts/head.php')?>
<body>
    <?php include('views/layouts/banner.php') ?>
    <div class="container">
		<div class="form__top">
			<h2><span>Register</span></h2>
		</div>		
		<form class="form__reg" method="POST" action="?c=Estudiantes&m=index">
            <input class="input" type="number" placeholder="&#128084;  Document" required>
            <input class="input" type="password" placeholder="&#127760;  Password" required>
            <div class="btn__form">
                <button type="submit" name="documento" class="btn__submit">Login</button>
                <a style="text-decoration:none; color: #FFF" href="?c=Register&m=index" class="btn__reset">Register</a>
            </div>
		</form>
	</div>


<?php include('views/layouts/footer.php') ?>
</body>
</html>