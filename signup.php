<?php
	$root = "";
  require($root."w/config.php");

   if (isset($_SESSION["id"])) {
			header("Location: ".$root."./");
   } 
	 else {
			$title = "Sign Up"; 
			$page = $root."auth/index.php";
			include($root.$_meta);
echo "<style>.gn-tabs{display:none}.image-bg-overlay {
    background: linear-gradient(
217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%), linear-gradient(
127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%), linear-gradient(
336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);
}!important}</style>";
			include($root.$header);
 			include($root.$_footer);
   }

?>