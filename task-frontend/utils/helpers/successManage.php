<?php 

	function successManage($response) {

		switch ($response) {
			case 'TASK_CREATED':
				echo ' <script type="text/javascript">
            		swal("Task created", "You have successfully created a new task", "success").catch(swal.noop);
         			</script>';
			break;

			case 'TASK_COMPLETED':
				echo ' <script type="text/javascript">
            		swal("Task completed", "Your task has been successfully completed", "success").catch(swal.noop);
         			</script>';
			break;

			case 'TASK_EDITED':
				echo ' <script type="text/javascript">
            		swal("Edited Task", "Your task has been successfully edited", "success").catch(swal.noop);
         			</script>';
			break;

			case 'TASK_DELETED':
				echo ' <script type="text/javascript">
            		swal("Task Removed", "Your task has been successfully deleted", "success").catch(swal.noop);
         			</script>';
			break;

		}

	}

?>