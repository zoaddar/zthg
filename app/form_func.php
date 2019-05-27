<?php
	class Element {
	  function input($name, $type, $val) {
	    $func = "input_${type}";
	    return $this->$func($name, $val);
	  }

	  function input_text($name, $val) {
	    $html = "<input type=\"text\" placeholder=\"$val\" name=\"$name\" class=\"form-control\" />";	    		
		return $html;
	  }

	  function input_number($name, $val) {
	    $html = "<input type=\"number\" placeholder=\"$val\" name=\"$name\" class=\"form-control\" />";
		return $html;
	  }

	  function input_submit($name, $val) {
	    $html = "<input type=\"submit\" value=\"$val\" name=\"$name\" class=\"btn btn-success\" />";	    
		return $html;
	  }

	  function input_button($name, $val) {
	    $html = "<input type=\"button\" value=\"$val\" name=\"$name\" class=\"form-control\" />";	    
		return $html;
	  }

	  function input_email($name, $val) {
	    $html = "<input type=\"email\" placeholder=\"$val\" name=\"$name\" class=\"form-control\" />";
		return $html;
	  }

	  function input_checkbox($name, $val) {
	    $html = "<input type=\"checkbox\" value=\"$val\" name=\"$name\"/>";	    
		return $html;
	  }

	  function input_date($name, $val) {
	    $html = "<input type=\"date\" placeholder=\"$val\" name=\"$name\" class=\"form-control\" />";
		return $html;
	  }

	  function input_file($name, $val) {
	    $html = "<input type=\"file\" placeholder=\"$val\" name=\"$name\" class=\"form-control\" />";
		return $html;
	  }

	  function input_hidden($name, $val) {
	    $html = "<input type=\"hidden\" placeholder=\"$val\" name=\"$name\" class=\"form-control\" />";
		return $html;
	  }

	  function input_password($name, $val) {
	    $html = "<input type=\"password\" placeholder=\"$val\" name=\"$name\" class=\"form-control\" />";
		return $html;
	  }

	  function input_radio($name, $val) {
	    $html = "<input type=\"radio\" value=\"$val\" name=\"$name\"/>";
		return $html;
	  }

	  function input_reset($name, $val) {
	    $html = "<input type=\"reset\" value=\"$val\" name=\"$name\" class=\"btn btn-danger\" />";
		return $html;
	  }

	  function input_search($name, $val) {
	    $html = "<input type=\"search\" placeholder=\"$val\" name=\"$name\" class=\"form-control\" />";
		return $html;
	  }

	  function input_tel($name, $val) {
	    $html = "<input type=\"tel\" placeholder=\"$val\" name=\"$name\" class=\"form-control\" />";
		return $html;
	  }

	}
?>
