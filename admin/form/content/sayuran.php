<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">

      <!-- awal isi -->

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Input Sayuran</h4>
            
            <!-- inti isi awal -->
            <form action="form/include/proses.php?action=sayuran" method="POST" class="form-horizontal">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="kode_sayur" class="form-control kode_sayur" placeholder="Masukan Kode sayur">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="nama_sayur" class="form-control nama_sayur" placeholder="Masukan Nama sayur">
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
            <h4 class="card-title">Data sayur</h4>
            
            <!-- inti isi awal -->
            <div class="col-md-12">
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr class="table-info">
                      <th style="text-align: center;">Kode sayuran</th>
                      <th style="text-align: center;">Nama sayuran</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    // Perintah untuk menampilkan data
                    $sayur= mysql_query ('
                      SELECT 
                        *
                      FROM 
                      tb_sayur
                      ORDER BY
                      kode_sayur
                      ') ;  //menampikan SEMUA data dari tabel Matakuliah

                    // perintah untuk membaca dan mengambil data dalam bentuk array
                      while ($s = mysql_fetch_array ($sayur)){ ?>  
                        <tr>
                          <td style="text-align: center;"><?=$s['kode_sayur']?></td>
                          <td style="text-align: center;"><?=$s['nama_sayur']?></td>
                          <td style="text-align: center;"> 
                            <a href="javascript:;" onclick="edit('<?=$s['kode_sayur']?>','<?=$s['nama_sayur']?>');">
                              <i class="mdi mdi-tooltip-edit btn-icon-prepend">
                              </i>
                            </a> 
                            ||
                            <a href="javascript:;">
                              <i class="mdi mdi-delete btn-icon-prepend" onclick="del('<?=$s['kode_sayur']?>');">
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
      function edit(kode_sayur,nama_sayur){
        $(".kode_sayur").val(kode_sayur);
        $(".nama_sayur").val(nama_sayur);
        $(".action").val('Ubah');
      }

      function batal(){
        $(".action").val('Simpan');
      }

      function del(kode_sayur){
        if(kode_sayur != ''){
          var r = confirm("Apakah Anda Yakin akan menanghapus ini ?");
          if (r == true) {
            window.location.href = 'form/include/proses.php?action=sayur&del='+kode_sayur;
          } 
        }
      }

    </script>

