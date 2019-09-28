<?php include('views/layouts/head.php'); ?>
<title>Subir Video</title>
<body>
    Subir una Archivo
    <form action="?c=Files&m=cargar" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" required>
        <button type="submit">Insertar</button>
    </form>
</body>
</html>