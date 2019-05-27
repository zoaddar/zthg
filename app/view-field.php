<form id="result">
  <input type="hidden" name="validator">
  <div class="form-group">
    <div class="row">
	  <div class="col-sm-12">
	  <?php  
	    require_once("functions.php");

		des_code( "../txt_file/".$_GET['file'] );
	  ?>
	  </div>
	</div>
  </div>	  
  <div class="form-group">
    <div class="row">
	  <div class="col-sm-6 col-md-6 col-md-offset-3">
	    <input id="fView" type="submit" name="sBtn" value="submit" class="form-control btn btn-success">
	  </div>
    </div>
  </div>
</form>

<script>
	// validation
	$("#result").on('submit',(function(e) {
		e.preventDefault();

		$.ajax({
        	type 	: "POST",
			url 	: 'app/validation.php',
			data    : $(this).serialize(),
			dataType: 'html',
			timeout : 10000,
			error   : function(){	alert("Error Getting from server")}
		}).done(function(resp){
			$("#err").html(resp);
		});
	}));
</script>