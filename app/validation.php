<?php
  $file = "../txt_file/view.txt";
  $fp = fopen($file, "r");
  if (!$fp) die("Error opening stream");

  if(isset($_POST['validator'])){

	require "gump.class.php";

	function validatorf($variable, $input, $condition){

		error_reporting(-1);
		ini_set('display_errors', 1);
		$validator = new GUMP();

		$rules = array(
		  $variable => $condition
		);

		$input_data = array(
		  $variable => $input
		);

		$is_valid = $validator->validate($input_data, $rules);

		if($is_valid === true) {
			$msg[] = "The <font color='green'>$variable</font> provided is valid <br>";
		} else {
			$msg[] = ( $validator->get_readable_errors() );
		}
		print_r( $msg );
	}

	while ($line = trim(fgets($fp, 8192))) {
	  $e 	 	 = explode(";", $line);
	  $variable  = $e[0];
	  $condition = $e[2];
	  $input 	 = $_POST[$variable];

	  validatorf($variable, $input, $condition);
	}
  }
?>