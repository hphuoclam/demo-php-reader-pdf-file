<?php 
	  $filepath = './pdf-test.pdf'; // fetched by database request
	  $filename = substr_replace($filepath, '', 0, 21); // to remove the document directory
	  header('Content-type: application/pdf');
	  header('Content-Disposition: inline; filename="' . $filename . '"');
	  header('Content-Transfer-Encoding: binary');
	  header('Accept-Ranges: bytes');
	  readfile($filepath);	
?>

