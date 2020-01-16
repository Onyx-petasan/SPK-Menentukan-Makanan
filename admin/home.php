<?php
include "form/pages/header.php";

include "form/pages/sidebar.php"; 

	
	if(!empty($_GET['page']) && $_GET['page']=='pengguna-data'){
		include "form/content/pengguna-data.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='pengguna-edit'){
		include "form/content/pengguna-edit.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='pengguna-hapus'){
		include "form/include/pengguna_hapus.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='pengguna-tambah'){
		include "form/content/pengguna-tambah.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='penyakit'){
		include "form/content/penyakit.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='golongandarah'){
		include "form/content/golongandarah.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='makananpokok'){
		include "form/content/makananpokok.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='laukpauk'){
		include "form/content/laukpauk.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='sayuran'){
		include "form/content/sayuran.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='buah'){
		include "form/content/buah.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='rulls'){
		include "form/content/rulls.php";
	}
	if(!empty($_GET['page']) && $_GET['page']=='konsultan'){
		include "form/content/konsultasi.php";
	}
	
 include "form/pages/footer.php"; 
 ?>
