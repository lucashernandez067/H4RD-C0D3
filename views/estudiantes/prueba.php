<?php include('views/layouts/head.php'); ?>
<title>Prueba | matemáticas</title>
<body>
<?php include('views/layouts/banner.php'); ?>
<body>
    <section>
        <div>
            <h1>Bienvenido a la prueba de matemáticas</h1>
        </div>
        <div>
            <form action="validar.php" method="post">
                <p>1.   Convierte 25/100 a número decimal.</p>
                <select name="pregunta1" id="" required>
                    <option value="">Seleccione</option>
                    <option value="1">0.25</option>
                    <option value="0">0.025</option>
                    <option value="0">0.0025</option>
                    <option value="0">25</option>
                </select>
                <p>2. Convierte 1.25 a fracción decimal.</p>
                <select name="pregunta2" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">25/100</option>
                    <option value="1">125/100</option>
                    <option value="0">15/100</option>
                    <option value="0">12/100</option>
                </select>
                <p>3. 5 es un número ...</p>
                <select name="pregunta3" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">natural pero no entero.</option>
                    <option value="0">racional y no entero.</option>
                    <option value="1">natural y, por tanto, entero.</option>
                    <option value="0">Ninguna de las anteriores.</option>
                </select>
                <p>4. 3/5 es un número ...</p>
                <select name="pregunta4" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">natural y, por tanto, entero.</option>
                    <option value="0">racional, entero y natural.</option>
                    <option value="0">racional, entero y no natural.</option>
                    <option value="1">racional pero no entero.</option>
                </select>
                <p>5. El número decimal quince unidades tres centésimos se escribe</p>
                <select name="pregunta5" id="" required>
                    <option value="">Seleccione</option>
                    <option value="1">15,03</option>
                    <option value="0">0,153</option>
                    <option value="0">15,3</option>
                    <option value="0">1,503</option>
                </select>
                <p>6. El número decimal 6,09 se lees</p>
                <select name="pregunta6" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">sesenta unidades nueve décimos</option>
                    <option value="1">seis unidades nueve centésimos</option>
                    <option value="0">sesenta unidades nueve centésimos</option>
                    <option value="0">seis unidades nueve décimos</option>
                </select>
                <p>7. x+1=7. El valor de x es </p>
                <select name="pregunta7" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">5</option>
                    <option value="0">7</option>
                    <option value="1">6</option>
                    <option value="0">Ninguna de las anteriores</option>
                </select>
                <p>8. x+y=25. Si sabemos que x=12, y equivale a:</p>
                <select name="pregunta8" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">25</option>
                    <option value="0">11</option>
                    <option value="0">12</option>
                    <option value="1">13</option>
                </select>
                <p>9. ¿Los dígitos que aparecen en el Sistema Decimal son?</p>
                <select name="pregunta9" id="" required>
                    <option value="">Seleccione</option>
                    <option value="1">0-1-2-3-4-5-6-7-8-9</option>
                    <option value="0">1-2-3-5-8-9-10-11</option>
                    <option value="0">0-1-2-6-5-3-4-8-9</option>
                    <option value="0">Todas las anteriores</option>
                </select>
                <p>10. ¿Por qué se han elegido 0-1 en la computadora?</p>
                <select name="pregunta10" id="" required>
                    <option value="">Seleccione</option>
                    <option value="0">Porque 1 significa encendido y 0 no significa nada</option>
                    <option value="1">Porque 1 significa encendido y 0 apagado</option>
                    <option value="0">porque 1 significa apagado y 0 encendiddo</option>
                    <option value="0">Ninguna de las anteriores</option>
                </select>
                <br><br>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
</body>
</html>