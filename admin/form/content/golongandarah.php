<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">

      <!-- awal isi -->

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Input Golongan Darah</h4>
            
            <!-- inti isi awal -->
            <form action="form/include/proses.php?action=golongandarah" method="POST" class="form-horizontal">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="kode_golongandarah" class="form-control kode_golongandarah" placeholder="Masukan Kode golongandarah">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="nama_golongandarah" class="form-control nama_golongandarah" placeholder="Masukan Nama golongandarah">
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
            <h4 class="card-title">Data Golongan Darah</h4>
            
            <!-- inti isi awal -->
            <div class="col-md-12">
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr class="table-info">
                      <th style="text-align: center;">Kode golongan darah</th>
                      <th style="text-align: center;">Nama golongan darah</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    // Perintah untuk menampilkan data
                    $golongandarah= mysql_query ('
                      SELECT 
                        *
                      FROM 
                      tb_golongandarah
                      ORDER BY
                      kode_golongandarah
                      ') ;  //menampikan SEMUA data dari tabel Matakuliah

                    // perintah untuk membaca dan mengambil data dalam bentuk array
                      while ($g = mysql_fetch_array ($golongandarah)){ ?>  
                        <tr>
                          <td style="text-align: center;"><?=$g['kode_golongandarah']?></td>
                          <td style="text-align: center;"><?=$g['nama_golongandarah']?></td>
                          <td style="text-align: center;"> 
                            <a href="javascript:;" onclick="edit('<?=$g['kode_golongandarah']?>','<?=$g['nama_golongandarah']?>');">
                              <i class="mdi mdi-tooltip-edit btn-icon-prepend">
                              </i>
                            </a> 
                            ||
                            <a href="javascript:;">
                              <i class="mdi mdi-delete btn-icon-prepend" onclick="del('<?=$g['kode_golongandarah']?>');">
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
      function edit(kode_golongandarah,nama_golongandarah){
        $(".kode_golongandarah").val(kode_golongandarah);
        $(".nama_golongandarah").val(nama_golongandarah);
        $(".action").val('Ubah');
      }

      function batal(){
        $(".action").val('Simpan');
      }

      function del(kode_golongandarah){
        if(kode_golongandarah != ''){
          var r = confirm("Apakah Anda Yakin akan menanghapus ini ?");
          if (r == true) {
            window.location.href = 'form/include/proses.php?action=golongandarah&del='+kode_golongandarah;
          } 
        }
      }

    </script>

