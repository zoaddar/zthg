<?php 
 try{
	$f_name	  = $_GET['f_name'];
	$txt_file = $_GET['txt_fld'];
  
	if(empty($f_name)){
	  throw new Exception ("File name can not be empty.");
	}
	if(empty($txt_file)){
	  throw new Exception ("Please enter Input field.");
	}
	
	$textfilename = "../txt_file/".$f_name.".txt";
	file_put_contents ($textfilename, $txt_file);
	
	$msg['success'] = 'Field created successfully.';
	
 } catch(Exception $e){
	$msg['error'] = $e->getMessage();
 }
 echo json_encode($msg);
	
?>