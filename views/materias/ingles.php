<?php include('views/layouts/head.php'); ?>
<title>Inglés</title>
<body class="">
    <?php include('views/layouts/banner.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Inglés</h1>
                <br>
                    
                <br>
                <div class="container table-responsive" style="max-width: 600px;">
                    <a class="" href="?c=Grados&m=index">Volver</a>
                    <table class="table table-hover table-bordered" id="tabla">
                    <caption>Selecciona el curso que desees realizar</caption>
                    <thead class="">
                        <tr class="danger">
                            <th scope="col">Nombre del Curso</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Progreso</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                Suma de Fracciones
                            </th>
                            <td>
                                Evaluación Pendiente
                            </td>
                            <td>
                                <span style="color: #FFF; font-size: 0px;">100</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 100%">
                                    </div>
                                    <span class="sr-only">100% completado</span>
                                </div>
                            </td>
                            <td>
                                <a href="?c=Estudiantes&m=index" class="btn btn-info">Entrar</a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Ecuaciones con enteros
                            </th>
                            <td>
                                Iniciado
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 40%">
                                    </div>
                                    <span class="sr-only">40% completado</span>
                                </div>
                            </td>
                            <td>
                                <a href="" class="btn btn-info">Entrar</a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Números Racionales
                            </th>
                            <td>
                                Sin Iniciar
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 0%">
                                    </div>
                                    <span class="sr-only">0% completado</span>
                                </div>
                            </td>
                            <td>
                                <a href="" class="btn btn-info">Iniciar</a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Expresiones Décimales
                            </th>
                            <td>
                                Sin Iniciar
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 0%">
                                    </div>
                                    <span class="sr-only">0% completado</span>
                                </div>
                            </td>
                            <td>
                                <a href="" class="btn btn-info">Iniciar</a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Sistema de Númeraciones
                            </th>
                            <td>
                                Iniciado
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 60%">
                                    </div>
                                    <span class="sr-only">60% completado</span>
                                </div>
                            </td>
                            <td>
                                <a href="" class="btn btn-info">Entrar</a>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  

    <?php include('views/layouts/footer.php') ?>
    <script>
		$(document).ready(function() {
			$('#tabla').DataTable({
				"language": {
					"infoEmpty": "No hay registros para mostrar",
					"info": "Mostrando del _START_ al _END_ para _TOTAL_ registros",
					"emptyTable": "No hay registros en la tabla",
					"zeroRecords": "No se han encontrado resultados",
					"search": "Buscar:",
					"Processing": "Procesando...",
					"LoadingRecords": "Cargando...",
					"infoFiltered": "(De _MAX_ registros se encontraron _TOTAL_ dato/s coincidentes)",
					"infoEmpty": "No hay registros para mostrar",
					"emptyTable": "No hay registros en la tabla",
					"lengthMenu": 'Mostrar <select>'+
			            '<option value="5">5</option>'+
			            '<option value="10">10</option>'+
			            '<option value="20">20</option>'+
			            '<option value="30">30</option>'+
			            '<option value="40">40</option>'+
			            '<option value="50">50</option>'+
			            '<option value="-1">total de</option>'+
			            '</select> filas',
					"paginate": {
						"previous": "Anterior",
						"next": "Siguiente",
						"last": "última",
						"first":  "Primera"
				 	}
				}
			});
		} );
	</script>
</body>
</html>