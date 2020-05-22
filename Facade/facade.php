<?php

/* Usage examples: The Facade pattern is commonly used in PHP applications, where the facade classes simplify the work with complex libraries or APIs. */

// Connect to some database
class Database {

}

// Generate an HTML template
class Template{

}

// Logging
class Logger{

}

//Create a page and logs Activity
class PageFacade{
	public function createAndServer($id, $msg = ""){
		db = new Database();
		$data = $db->getData($id);

		$template = new Template($id, $data);
		$template->server();
		
		$logger = new Logger();
		$logger->log($msg . $id);
	}
}

$page = new PageFacade();

$id = $_POST["id"];
$page->createAndServer($id, "Serving a page for ID ($id)")
?>