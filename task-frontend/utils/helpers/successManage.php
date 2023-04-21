<?php 

	function successManage($response) {

		switch ($response) {
			case 'TASK_CREATED':
				echo ' <script type="text/javascript">
            		swal("Tarea creada", "Ha creado correctamente una nueva tarea", "success").catch(swal.noop);
         			</script>';
			break;

			case 'TASK_COMPLETED':
				echo ' <script type="text/javascript">
            		swal("Tarea realizada", "Su tarea se ha completado con éxito", "success").catch(swal.noop);
         			</script>';
			break;

			case 'TASK_EDITED':
				echo ' <script type="text/javascript">
            		swal("Tarea editada", "Su tarea ha sido editada correctamente", "success").catch(swal.noop);
         			</script>';
			break;

			case 'TASK_DELETED':
				echo ' <script type="text/javascript">
            		swal("Tarea eliminada", "Su tarea se ha eliminado correctamente", "success").catch(swal.noop);
         			</script>';
			break;

		}

	}

?>