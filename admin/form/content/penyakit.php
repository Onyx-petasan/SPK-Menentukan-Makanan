<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">

      <!-- awal isi -->

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Input Penyakit</h4>
            
            <!-- inti isi awal -->
            <form action="form/include/proses.php?action=penyakit" method="POST" class="form-horizontal">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="kode_penyakit" class="form-control kode_penyakit" placeholder="Masukan Kode Penyakit">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="nama_penyakit" class="form-control nama_penyakit" placeholder="Masukan Nama Penyakit">
                  </div>
                  
                </div>
              </div>
              <br>
              <div class="col-md-12">
                <div class="form-group">
                  <input name="submit" type="submit" class="btn btn-primary mr-2 action" value="Simpan">
                  <input type="reset" value="Batal" class="btn btn-info reset" onclick="batal()" />
                </div>
              </div>
              
            </form>
            <!-- inti isi akhir -->
          </div>
        </div>
      </div>

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Penyakit</h4>
            
            <!-- inti isi awal -->
            <div class="col-md-12">
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr class="table-info">
                      <th style="text-align: center;">Kode Penyakit</th>
                      <th style="text-align: center;">Nama Penyakit</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    // Perintah untuk menampilkan data
                    $penyakit= mysql_query ('
                      SELECT 
                        *
                      FROM 
                      tb_penyakit
                      ORDER BY
                      kode_penyakit
                      ') ;  //menampikan SEMUA data dari tabel Matakuliah

                    // perintah untuk membaca dan mengambil data dalam bentuk array
                      while ($p = mysql_fetch_array ($penyakit)){ ?>  
                        <tr>
                          <td style="text-align: center;"><?=$p['kode_penyakit']?></td>
                          <td style="text-align: center;"><?=$p['nama_penyakit']?></td>
                          <td style="text-align: center;"> 
                            <a href="javascript:;" onclick="edit('<?=$p['kode_penyakit']?>','<?=$p['nama_penyakit']?>');">
                              <i class="mdi mdi-tooltip-edit btn-icon-prepend">
                              </i>
                            </a> 
                            ||
                            <a href="javascript:;">
                              <i class="mdi mdi-delete btn-icon-prepend" onclick="del('<?=$p['kode_penyakit']?>');">
                              </i>
                            </a>
                          </td>
                        </tr> 
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- inti isi akhir -->
            </div>
          </div>
        </div>
        <!-- akhir isi -->
      </div>
    </div>

    <script type="text/javascript">
      function edit(kode_penyakit,nama_penyakit){
        $(".kode_penyakit").val(kode_penyakit);
        $(".nama_penyakit").val(nama_penyakit);
        $(".action").val('Ubah');
      }

      function batal(){
        $(".action").val('Simpan');
      }

      function del(kode_penyakit){
        if(kode_penyakit != ''){
          var r = confirm("Apakah Anda Yakin akan menanghapus ini ?");
          if (r == true) {
            window.location.href = 'form/include/proses.php?action=penyakit&del='+kode_penyakit;
          } 
        }
      }

    </script>

