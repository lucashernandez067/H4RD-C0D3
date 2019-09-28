<?php include('views/layouts/head.php'); ?>
<title>Prueba | matemáticas</title>
<body>
<?php include('views/layouts/banner.php'); ?>
<body>
    <section>
        <div class="container">
            <h1>Bienvenido a la prueba de matemáticas</h1>
            <form action="?c=Estudiantes&m=puntuacion" method="post">
                <div class="col-md-4 col-offset-md-4">
                <p>1.   Convierte 25/100 a número decimal.</p>
                <select name="pregunta1" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="1">0.25</option>
                    <option value="0">0.025</option>
                    <option value="0">0.0025</option>
                    <option value="0">25</option>
                </select><br>
                <p>2. Convierte 1.25 a fracción decimal.</p>
                <select name="pregunta2" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">25/100</option>
                    <option value="1">125/100</option>
                    <option value="0">15/100</option>
                    <option value="0">12/100</option>
                </select><br>
                <p>3. 5 es un número ...</p>
                <select name="pregunta3" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">natural pero no entero.</option>
                    <option value="0">racional y no entero.</option>
                    <option value="1">natural y, por tanto, entero.</option>
                    <option value="0">Ninguna de las anteriores.</option>
                </select><br>
                <p>4. 3/5 es un número ...</p>
                <select name="pregunta4" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">natural y, por tanto, entero.</option>
                    <option value="0">racional, entero y natural.</option>
                    <option value="0">racional, entero y no natural.</option>
                    <option value="1">racional pero no entero.</option>
                </select><br>
                <p>5. El número decimal quince unidades tres centésimos se escribe</p>
                <select name="pregunta5" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="1">15,03</option>
                    <option value="0">0,153</option>
                    <option value="0">15,3</option>
                    <option value="0">1,503</option>
                </select><br>
                <p>6. El número decimal 6,09 se lees</p>
                <select name="pregunta6" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">sesenta unidades nueve décimos</option>
                    <option value="1">seis unidades nueve centésimos</option>
                    <option value="0">sesenta unidades nueve centésimos</option>
                    <option value="0">seis unidades nueve décimos</option>
                </select><br>
                <p>7. x+1=7. El valor de x es </p>
                <select name="pregunta7" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">5</option>
                    <option value="0">7</option>
                    <option value="1">6</option>
                    <option value="0">Ninguna de las anteriores</option>
                </select><br>
                <p>8. x+y=25. Si sabemos que x=12, y equivale a:</p>
                <select name="pregunta8" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">25</option>
                    <option value="0">11</option>
                    <option value="0">12</option>
                    <option value="1">13</option>
                </select><br>
                <p>9. ¿Los dígitos que aparecen en el Sistema Decimal son?</p>
                <select name="pregunta9" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="1">0-1-2-3-4-5-6-7-8-9</option>
                    <option value="0">1-2-3-5-8-9-10-11</option>
                    <option value="0">0-1-2-6-5-3-4-8-9</option>
                    <option value="0">Todas las anteriores</option>
                </select><br>
                <p>10. ¿Por qué se han elegido 0-1 en la computadora?</p>
                <select name="pregunta10" class="form-control" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">Porque 1 significa encendido y 0 no significa nada</option>
                    <option value="1">Porque 1 significa encendido y 0 apagado</option>
                    <option value="0">porque 1 significa apagado y 0 encendiddo</option>
                    <option value="0">Ninguna de las anteriores</option>
                </select>
                <br><br>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
            </div>
            <div class="col-md-4">
                <?php
                    if(@$_GET['resultado']==1){
                ?>
                    <h1 class="text-success">Aprobó <br> Su nota es: <?php echo $_GET['puntaje']?></h1>
                <?php
                    }
                ?>
                <?php
                    if(@$_GET['resultado']==2){
                ?>
                    <h1 class="text-danger">Reprobó <br> Su nota es: <?php echo $_GET['puntaje']?></h1>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <?php include('views/layouts/footer.php'); ?>
</body>
</html>