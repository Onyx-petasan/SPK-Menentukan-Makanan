<?php
include "form/pages/header.php";

include "form/pages/sidebar.php"; 

	
	if(!empty($_GET['page']) && $_GET['page']=='home'){
		include "form/content/home.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='konsultasi'){
		include "form/content/konsultasi.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='profile'){
		include "form/content/profile.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='petunjuk'){
		include "form/content/petunjuk.php";
	}

 include "form/pages/footer.php"; 
 ?>
