<?php 
  include ('header.php');
  
  $file = "txt_file/input.txt";
  $fp = fopen($file, "r");
  if (!$fp) die("Error opening stream");
?>
<div class="container">
  <div id="err"></div>
  <ul class="nav nav-tabs">
    <li class="active"><a id="field" data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" id="view" href="#menu1">View</a></li>
    <li><a data-toggle="tab" id="code" href="#menu2">Code</a></li>
    <li><a data-toggle="tab" id="exp" href="#menu3">Example</a></li>
    <li style="margin-top:10px;">
	  <span id="msg"><img id="loader" src="inc/img/loader.gif" style="margin-top:-7px;" /></span>
	</li>
  </ul>
<br />
  <div class="tab-content"> 
    <div id="home" class="tab-pane fade in active">
      <div class="panel-body">
		<div class="row">
		  <div class="col-lg-12" id="edit_form">
			<form method="get" id="f-c-form">
			  <div class="form-group">
				<textarea id="txt_fld" name="txt_fld" class="form-control" rows="15" placeholder="Ex: name;text;required|alpha|min_len,6;Enter Your Name"></textarea>		    			  	
			  </div>
			  <div class="form-group">
			    <input type="submit" class="btn btn-success" value="Create" />
			  </div>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	
    <div id="menu1" class="tab-pane fade">
	  <div class="row">
		 <div class="col-sm-6 col-md-6 col-md-offset-3">
			<div id="html_field"></div>
		 </div>
	   </div>
    </div>
	
    <div id="menu2" class="tab-pane fade">
	  <div class="row">
		<div class="col-lg-12">			
		   <div class="form-group">
			  <textarea id="html_" class="form-control" rows="15"></textarea>
			</div>
		</div>
      </div>
    </div>
	
    <div id="menu3" class="tab-pane fade">
	  <div class="row">
		<div class="col-lg-12">			
		   <div class="form-group">
			  <textarea class="form-control" rows="15"><?php while(!feof($fp)) { $data = fgets($fp, filesize($file)); echo $data; } fclose($fp);?></textarea>
			</div>
		</div>
      </div>
    </div>
	
  </div>
</div>

<?php include('footer.php');?>