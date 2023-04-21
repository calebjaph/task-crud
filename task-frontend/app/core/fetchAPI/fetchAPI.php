<?php

	class fetchAPI {

		public $getAllArticles;
		public $completeResponse;
		public $createTask;
		public $getTask;
		public $editTask;
		public $deleteTask;

		public function getAllArticles() {

			$url = 'http://127.0.0.1:8000/api/tasks'; // Server Default

		    $opts = array('http' => array(
		        'method'  => 'GET',
		        'header'  => 'Content-Type: application/x-www-form-urlencoded'
	    	));

			$context  = stream_context_create($opts);

		    $content = file_get_contents($url, false, $context);

    		$response  = json_decode($content, true);
		    
		    $this->getAllArticles = $response;

		}

		public function getTask($id) {

			$url = 'http://127.0.0.1:8000/api/tasks/getTask/' . $id; // Server Default

		    $opts = array('http' => array(
		        'method'  => 'GET',
		        'header'  => 'Content-Type: application/x-www-form-urlencoded'
	    	));

			$context  = stream_context_create($opts);

		    $content = file_get_contents($url, false, $context);

    		$response  = json_decode($content, true);
		    
		    $this->getTask = $response;

		}

		public function deleteTask($id) {

			$url = 'http://127.0.0.1:8000/api/tasks/delete/' . $id; // Server Default

		    $opts = array('http' => array(
		        'method'  => 'DELETE',
		        'header'  => 'Content-Type: application/x-www-form-urlencoded'
	    	));

			$context  = stream_context_create($opts);

		    $content = file_get_contents($url, false, $context);

    		$response  = array(
    			"TaskData" => json_decode($content, true),
    			"response" => "TASK_DELETED"
    		);
		    
		    $this->deleteTask = $response;

		}

		public function completeTask($id) {

			$url = 'http://127.0.0.1:8000/api/tasks/complete/' . $id; // Server Default

		    $opts = array('http' => array(
		        'method'  => 'POST',
		        'header'  => 'Content-Type: application/x-www-form-urlencoded'
	    	));

			$context  = stream_context_create($opts);

		    $content = file_get_contents($url, false, $context);

    		$response  = array(
    			"TaskData" => json_decode($content, true),
    			"response" => "TASK_COMPLETED"
    		);

		    $this->completeResponse = $response;

		}

		public function createTask($taskName, $priority, $tag, $description) {

			$url = 'http://127.0.0.1:8000/api/tasks/create/'; // Server Default

			$newTaskData = http_build_query( array(
					"taskName" => $taskName,
				    "priority" => $priority,
				    "tag" => $tag,
				    "description" => $description
				)
			);

		    $opts = array('http' => array(
		        'method'  => 'POST',
		        'header'  => 'Content-Type: application/x-www-form-urlencoded',
		        'content' => $newTaskData  
	    	));

			$context  = stream_context_create($opts);

		    $content = file_get_contents($url, false, $context);

    		$response  = array(
    			"TaskData" => json_decode($content, true),
    			"response" => "TASK_CREATED"
    		);

		    $this->createTask = $response;

		}

		public function editTask($taskName, $priority, $tag, $description, $id) {

			$url = 'http://127.0.0.1:8000/api/tasks/update/' . $id; // Server Default

			$newTaskData = http_build_query( array(
					"taskName" => $taskName,
				    "priority" => $priority,
				    "tag" => $tag,
				    "description" => $description
				)
			);

		    $opts = array('http' => array(
		        'method'  => 'PUT',
		        'header'  => 'Content-Type: application/x-www-form-urlencoded',
		        'content' => $newTaskData  
	    	));

			$context  = stream_context_create($opts);

		    $content = file_get_contents($url, false, $context);

    		$response  = array(
    			"TaskData" => json_decode($content, true),
    			"response" => "TASK_EDITED"
    		);

		    $this->editTask = $response;

		}

	}

?>