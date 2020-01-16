<?php 

   if(@$_SESSION['user']) { //apabila sessionnya admin
    $userlogin = @$_SESSION['user'];

  } else {
   echo "<script language='JavaScript'>
   window.location='../login.php';
   </script>"; 

 }

 ?>
 <div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <center><h4 class="card-title">Konsultasi</h4></center>
            <p class="card-description">
             Menentukan makanan yang baik dikonsumsi oleh orang sakit<br>
             Kategori Penyakit :<br>
             1. Penyakit Jantung<br>
             2. Penyakit Kolesterol<br>
             3. Penyakit Diabetes<br>
             4. Penyakit Asam Urat<br>

           </p>

           Dibawah ini adalah tabel konsultan yang berpenyakit seperti yang ada pada list kategori tersebut wajib mengisi data dibawah

           <br><br>
           <!-- inti isi awal -->
           <form action="home2.php?page=hasil" method="POST" class="form-horizontal">
            <div class="col-md-12">
              <input type="hidden" name="id_rulls" class="form-control id_rulls" value="<?php echo $data['id_user']?>">
              <div class="row">
                <div class="col-md-6">
                  <select name="kode_1" class="form-control kode_1">
                    <option>Pilih Golongan Darah</option>
                    <?php
                    $golongan_darah= mysql_query("SELECT * FROM tb_golongandarah ORDER BY kode_golongandarah" );
                    while ($gd = mysql_fetch_array ($golongan_darah)){
                      echo '<option value="'.$gd['kode_golongandarah'].'"> 
                      '.$gd['kode_golongandarah'].'

                      </option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="col-md-6">
                  <select name="kode_2" class="form-control kode_2">
                    <option>Pilih Penyakit</option>
                    <?php
                    $penyakit= mysql_query("SELECT * FROM tb_penyakit ORDER BY kode_penyakit" );
                    while ($p = mysql_fetch_array ($penyakit)){
                      echo '<option value="'.$p['kode_penyakit'].'"> 
                      '.$p['nama_penyakit'].'

                      </option>';
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="form-group">
                  <input name="submit" type="submit" class="btn btn-primary mr-2" value="Proses">
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
