$(document).ready(function() {
		
	function ajax_condition(tdiv,url){
		$.ajax({
			url : url,
			timeout : 10000,
			error : function(){	alert("Error Getting from server")}
		}).done(function(resp){
			$(tdiv).html(resp);
		});
	}
  
 	$("#view").click(function(event) {
	   event.preventDefault();
       var FILE    = (event.target.id);
	   var url     = 'app/view-field.php?file=view.txt';
	   var tdiv    = "#html_field";
	
	   if(tdiv != '' || val != ''){
		 ajax_condition(tdiv,url);
	   }
	}); 
  
	$("#code").click(function(event) {
	   event.preventDefault();
	   var url     = 'app/functions.php?txt=view.txt';
	   var tdiv    = "#html_";
	
	   if(tdiv != '' || val != ''){
		 ajax_condition(tdiv,url);
	   }		
	});	

	// field-creator
	$('#loader').hide();
	$('#view').hide();
	$('#code').hide();
	
	$("#f-c-form").on('submit',(function(e) {
		e.preventDefault();

		$('#loader').show();
		
		$.ajax({
			url     : 'app/field-creator.php?f_name=view&tx_fld='+txt_fld,
			type    : $(this).attr('method'),
			dataType: 'html',
			data    : $(this).serialize(),
			success : function(data){
			//$("#load_div").html(data);
			  var res  = JSON.parse(data);
			  var err  = res.error;
			  var succ = res.success;
			  var html = '';
			  $('#loader').hide();
			  $('#view').show();
			  $('#code').show();
			  if(err){				
				$('#view').hide();
				$('#code').hide();
				html += "<font color='red'>" +err+ "</font>";
				document.getElementById("msg").innerHTML = html;
				
			  } else{
				html += "<font color='green'>" +succ+ "</font>";
				document.getElementById("msg").innerHTML = html;
			  }
			},
			error: function(e) {}
	   });
	   
	}));
});