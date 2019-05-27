<?php
require_once("form_func.php");

if( isset($_GET['txt']) ) {
	des_code( "../txt_file/".$_GET['txt'] );
}

function des_code($file) {
	$fp = fopen($file, "r");
	if (!$fp) die("Error opening stream");

	$fields = array("text","number","submit","button","email","checkbox","date","file","hidden","radio","reset","search","tel","password");

	$elem = new Element();
	while ($line = trim(fgets($fp, 8192))) {
	  $e 	 = explode(";", $line);
	  $name  = $e[0];
	  $key   = $e[1];
	  $val   = $e[3];
	  
	  if(in_array($key, $fields)){
		echo $msg = $elem->input($name, $key, $val);
	  } else{
		echo "You've entered a invalid Field Type: <font color='red'>'".$key."'</font><br />";
	  }
	}
	fclose($fp);
}

?>