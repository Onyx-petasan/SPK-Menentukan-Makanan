<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">

      <!-- awal isi -->

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Input Buah-Buahan</h4>
            
            <!-- inti isi awal -->
            <form action="form/include/proses.php?action=buah" method="POST" class="form-horizontal">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="kode_buah" class="form-control kode_buah" placeholder="Masukan Kode buah">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="nama_buah" class="form-control nama_buah" placeholder="Masukan Nama buah">
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
            <h4 class="card-title">Data Buah-Buahan</h4>
            
            <!-- inti isi awal -->
            <div class="col-md-12">
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr class="table-info">
                      <th style="text-align: center;">Kode Buah</th>
                      <th style="text-align: center;">Nama Buah</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    // Perintah untuk menampilkan data
                    $buah= mysql_query ('
                      SELECT 
                        *
                      FROM 
                      tb_buah
                      ORDER BY
                      kode_buah
                      ') ;  //menampikan SEMUA data dari tabel Matakuliah

                    // perintah untuk membaca dan mengambil data dalam bentuk array
                      while ($b = mysql_fetch_array ($buah)){ ?>  
                        <tr>
                          <td style="text-align: center;"><?=$b['kode_buah']?></td>
                          <td style="text-align: center;"><?=$b['nama_buah']?></td>
                          <td style="text-align: center;"> 
                            <a href="javascript:;" onclick="edit('<?=$b['kode_buah']?>','<?=$b['nama_buah']?>');">
                              <i class="mdi mdi-tooltip-edit btn-icon-prepend">
                              </i>
                            </a> 
                            ||
                            <a href="javascript:;">
                              <i class="mdi mdi-delete btn-icon-prepend" onclick="del('<?=$b['kode_buah']?>');">
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
      function edit(kode_buah,nama_buah){
        $(".kode_buah").val(kode_buah);
        $(".nama_buah").val(nama_buah);
        $(".action").val('Ubah');
      }

      function batal(){
        $(".action").val('Simpan');
      }

      function del(kode_buah){
        if(kode_buah != ''){
          var r = confirm("Apakah Anda Yakin akan menanghapus ini ?");
          if (r == true) {
            window.location.href = 'form/include/proses.php?action=buah&del='+kode_buah;
          } 
        }
      }

    </script>

