<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">

      <!-- awal isi -->

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Input Makanan Pokok</h4>
            
            <!-- inti isi awal -->
            <form action="form/include/proses.php?action=makananpokok" method="POST" class="form-horizontal">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="kode_makananpokok" class="form-control kode_makananpokok" placeholder="Masukan Kode makananpokok">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="nama_makananpokok" class="form-control nama_makananpokok" placeholder="Masukan Nama Makanan Pokok">
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
            <h4 class="card-title">Data Makanan Pokok</h4>
            
            <!-- inti isi awal -->
            <div class="col-md-12">
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr class="table-info">
                      <th style="text-align: center;">Kode makananpokok</th>
                      <th style="text-align: center;">Nama makananpokok</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    // Perintah untuk menampilkan data
                    $makananpokok= mysql_query ('
                      SELECT 
                        *
                      FROM 
                      tb_makananpokok
                      ORDER BY
                      kode_makananpokok
                      ') ;  //menampikan SEMUA data dari tabel Matakuliah

                    // perintah untuk membaca dan mengambil data dalam bentuk array
                      while ($m = mysql_fetch_array ($makananpokok)){ ?>  
                        <tr>
                          <td style="text-align: justify;"><?=$m['kode_makananpokok']?></td>
                          <td style="text-align: center;"><?=$m['nama_makananpokok']?></td>
                          <td style="text-align: center;"> 
                            <a href="javascript:;" onclick="edit('<?=$m['kode_makananpokok']?>','<?=$m['nama_makananpokok']?>');">
                              <i class="mdi mdi-tooltip-edit btn-icon-prepend">
                              </i>
                            </a> 
                            ||
                            <a href="javascript:;">
                              <i class="mdi mdi-delete btn-icon-prepend" onclick="del('<?=$m['kode_makananpokok']?>');">
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
      function edit(kode_makananpokok,nama_makananpokok){
        $(".kode_makananpokok").val(kode_makananpokok);
        $(".nama_makananpokok").val(nama_makananpokok);
        $(".action").val('Ubah');
      }

      function batal(){
        $(".action").val('Simpan');
      }

      function del(kode_makananpokok){
        if(kode_makananpokok != ''){
          var r = confirm("Apakah Anda Yakin akan menanghapus ini ?");
          if (r == true) {
            window.location.href = 'form/include/proses.php?action=makananpokok&del='+kode_makananpokok;
          } 
        }
      }

    </script>

