<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">

      <!-- awal isi -->

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Input Laukpauk</h4>
            
            <!-- inti isi awal -->
            <form action="form/include/proses.php?action=laukpauk" method="POST" class="form-horizontal">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="kode_laukpauk" class="form-control kode_laukpauk" placeholder="Masukan kode laukpauk">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="nama_laukpauk" class="form-control nama_laukpauk" placeholder="Masukan nama laukpauk">
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
            <h4 class="card-title">Data Lauk Pauk</h4>
            
            <!-- inti isi awal -->
            <div class="col-md-12">
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr class="table-info">
                      <th style="text-align: center;">Kode Lauk Pauk</th>
                      <th style="text-align: center;">Nama Lauk Pauk</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    // Perintah untuk menampilkan data
                     $laukpauk= mysql_query ('
                      SELECT 
                        *
                      FROM 
                      tb_laukpauk
                      ORDER BY
                      kode_laukpauk
                      ') ;  //menampikan SEMUA data dari tabel Matakuliah

                    // perintah untuk membaca dan mengambil data dalam bentuk array
                      while ($l = mysql_fetch_array ( $laukpauk)){ ?>  
                        <tr>
                          <td style="text-align: center;"><?=$l['kode_laukpauk']?></td>
                          <td style="text-align: center;"><?=$l['nama_laukpauk']?></td>
                          <td style="text-align: center;"> 
                            <a href="javascript:;" onclick="edit('<?=$l['kode_laukpauk']?>','<?=$l['nama_laukpauk']?>');">
                              <i class="mdi mdi-tooltip-edit btn-icon-prepend">
                              </i>
                            </a> 
                            ||
                            <a href="javascript:;">
                              <i class="mdi mdi-delete btn-icon-prepend" onclick="del('<?=$l['kode_laukpauk']?>');">
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
      function edit(kode_laukpauk,nama_laukpauk){
        $(".kode_laukpauk").val(kode_laukpauk);
        $(".nama_laukpauk").val(nama_laukpauk);
        $(".action").val('Ubah');
      }

      function batal(){
        $(".action").val('Simpan');
      }

      function del(kode_laukpauk){
        if(kode_laukpauk != ''){
          var r = confirm("Apakah Anda Yakin akan menanghapus ini ?");
          if (r == true) {
            window.location.href = 'form/include/proses.php?action laukpauk&del='+kode_laukpauk;
          } 
        }
      }

    </script>

