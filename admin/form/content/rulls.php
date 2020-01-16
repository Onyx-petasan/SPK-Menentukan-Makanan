<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">

      <!-- awal isi -->

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Rulls</h4>
            
            <!-- inti isi awal -->
            <form action="form/include/proses.php?action=rulls" method="POST" class="form-horizontal">
              <div class="col-md-12">
                <input type="text" name="id_rulls" class="form-control id_rulls">
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
              <h4 class="card-title">Maka</h4>
              <!-- ini maka -->
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="text" name="maka1" class="form-control maka1">
                    </div>
                    <div class="form-group">
                      <input type="text" name="maka2" class="form-control maka2">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <div class="form-group">
                        <input type="text" name="maka3" class="form-control maka3">
                      </div>
                      <div class="form-group">
                        <input type="text" name="maka4" class="form-control maka4">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <div class="form-group">
                        <input type="text" name="maka5" class="form-control maka5">
                      </div>
                      <div class="form-group">
                        <input type="text" name="maka6" class="form-control maka6">
                      </div>
                    </div>                    
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <div class="form-group">
                        <input type="text" name="maka7" class="form-control maka7">
                      </div>
                      <div class="form-group">
                        <input type="text" name="maka8" class="form-control maka8">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <div class="form-group">
                        <input type="text" name="maka9" class="form-control maka9">
                      </div>
                      <div class="form-group">
                        <input type="text" name="maka10" class="form-control maka10">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <div class="form-group">
                        <input type="text" name="maka11" class="form-control maka11">
                      </div>
                      <div class="form-group">
                        <input type="text" name="maka12" class="form-control maka12">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <h4 class="card-title">Solusi</h4>
              <!-- ini maka -->
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" value="Pagi" disabled="" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi1" placeholder="Makanan Pokok" class="form-control solusi1">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi2" placeholder="Lauk Pauk" class="form-control solusi2">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi3" placeholder="Sayur" class="form-control solusi3">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi4" placeholder="Buah-buahan" class="form-control solusi4">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" value="Siang" disabled="" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi5" placeholder="Makanan Pokok" class="form-control solusi5">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi6" placeholder="Lauk Pauk" class="form-control solusi6">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi7" placeholder="Sayur" class="form-control solusi7">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi8" placeholder="Buah-buahan" class="form-control solusi8">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" value="Sore" disabled="" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi9" placeholder="Makanan Pokok" class="form-control solusi9">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi10" placeholder="Lauk-Pauk" class="form-control solusi10">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi11" placeholder="Sayur" class="form-control solusi11">
                    </div>
                    <div class="form-group">
                      <input type="text" name="solusi12" placeholder="Buah-buahan" class="form-control solusi12">
                    </div>
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
            <h4 class="card-title">Data Rule</h4>
            
            <!-- inti isi awal -->
            <div class="col-md-12">
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr class="table-info">
                      <th style="text-align: center;">No</th>
                      <th style="text-align: center;">Golongan Darah</th>
                      <th style="text-align: center;">Penyakit</th>
                      <th style="text-align: center;">Maka</th>
                      <th style="text-align: center;">Solusi</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    // Perintah untuk menampilkan data
                    $rulls= mysql_query ('
                      SELECT
                      r.*,
                      g.nama_golongandarah goda,
                      p.nama_penyakit nape,
                      m1.nama_makananpokok mp1,
                      m2.nama_makananpokok mp2,
                      m3.nama_makananpokok mp3,
                      m4.nama_makananpokok mp4,
                      m5.nama_makananpokok mp5,
                      m6.nama_makananpokok mp6,
                      m7.nama_makananpokok mp7,
                      m8.nama_makananpokok mp8,
                      m9.nama_makananpokok mp9,
                      m10.nama_makananpokok mp10,
                      m11.nama_makananpokok mp11,
                      m12.nama_makananpokok mp12,
                      l1.nama_laukpauk lp1,
                      l2.nama_laukpauk lp2,
                      l3.nama_laukpauk lp3,
                      l4.nama_laukpauk lp4,
                      l5.nama_laukpauk lp5,
                      l6.nama_laukpauk lp6,
                      l7.nama_laukpauk lp7,
                      l8.nama_laukpauk lp8,
                      l9.nama_laukpauk lp9,
                      l10.nama_laukpauk lp10,
                      l11.nama_laukpauk lp11,
                      l12.nama_laukpauk lp12,
                      s1.nama_sayur syr1,
                      s2.nama_sayur syr2,
                      s3.nama_sayur syr3,
                      s4.nama_sayur syr4,
                      s5.nama_sayur syr5,
                      s6.nama_sayur syr6,
                      s7.nama_sayur syr7,
                      s8.nama_sayur syr8,
                      s9.nama_sayur syr9,
                      s10.nama_sayur syr10,
                      s11.nama_sayur syr11,
                      s12.nama_sayur syr12,
                      b4.nama_buah bh4,
                      b5.nama_buah bh5,
                      b6.nama_buah bh6,
                      b7.nama_buah bh7,
                      b8.nama_buah bh8,
                      b9.nama_buah bh9,
                      b10.nama_buah bh10,
                      b11.nama_buah bh11,
                      b12.nama_buah bh12,
                      sm1.nama_makananpokok smp1,
                      sm2.nama_makananpokok smp2,
                      sm3.nama_makananpokok smp3,
                      sl1.nama_laukpauk slp1,
                      sl2.nama_laukpauk slp2,
                      sl3.nama_laukpauk slp3,
                      ss1.nama_sayur ssyr1,
                      ss2.nama_sayur ssyr2,
                      ss3.nama_sayur ssyr3,
                      sb1.nama_buah sbh1,
                      sb2.nama_buah solusi2
                      FROM
                      tb_rulls r
                      LEFT JOIN tb_golongandarah g ON (
                      g.kode_golongandarah = r.kode_1
                      )
                      LEFT JOIN tb_penyakit p ON (p.kode_penyakit = r.kode_2)
                      LEFT JOIN tb_makananpokok m1 ON (
                      m1.kode_makananpokok = r.maka1
                      )
                      LEFT JOIN tb_makananpokok m2 ON (
                      m2.kode_makananpokok = r.maka2
                      )
                      LEFT JOIN tb_makananpokok m3 ON (
                      m3.kode_makananpokok = r.maka3
                      )
                      LEFT JOIN tb_makananpokok m4 ON (
                      m4.kode_makananpokok = r.maka4
                      )
                      LEFT JOIN tb_makananpokok m5 ON (
                      m5.kode_makananpokok = r.maka5
                      )
                      LEFT JOIN tb_makananpokok m6 ON (
                      m6.kode_makananpokok = r.maka6
                      )
                      LEFT JOIN tb_makananpokok m7 ON (
                      m7.kode_makananpokok = r.maka7
                      )
                      LEFT JOIN tb_makananpokok m8 ON (
                      m8.kode_makananpokok = r.maka8
                      )
                      LEFT JOIN tb_makananpokok m9 ON (
                      m9.kode_makananpokok = r.maka9
                      )
                      LEFT JOIN tb_makananpokok m10 ON (
                      m10.kode_makananpokok = r.maka10
                      )
                      LEFT JOIN tb_makananpokok m11 ON (
                      m11.kode_makananpokok = r.maka11
                      )
                      LEFT JOIN tb_makananpokok m12 ON (
                      m12.kode_makananpokok = r.maka12
                      )
                      LEFT JOIN tb_laukpauk l1 ON (l1.kode_laukpauk = r.maka1)
                      LEFT JOIN tb_laukpauk l2 ON (l2.kode_laukpauk = r.maka2)
                      LEFT JOIN tb_laukpauk l3 ON (l3.kode_laukpauk = r.maka3)
                      LEFT JOIN tb_laukpauk l4 ON (l4.kode_laukpauk = r.maka4)
                      LEFT JOIN tb_laukpauk l5 ON (l5.kode_laukpauk = r.maka5)
                      LEFT JOIN tb_laukpauk l6 ON (l6.kode_laukpauk = r.maka6)
                      LEFT JOIN tb_laukpauk l7 ON (l7.kode_laukpauk = r.maka7)
                      LEFT JOIN tb_laukpauk l8 ON (l8.kode_laukpauk = r.maka8)
                      LEFT JOIN tb_laukpauk l9 ON (l9.kode_laukpauk = r.maka9)
                      LEFT JOIN tb_laukpauk l10 ON (l10.kode_laukpauk = r.maka10)
                      LEFT JOIN tb_laukpauk l11 ON (l11.kode_laukpauk = r.maka11)
                      LEFT JOIN tb_laukpauk l12 ON (l12.kode_laukpauk = r.maka12)
                      LEFT JOIN tb_sayur s1 ON (s1.kode_sayur = r.maka1)
                      LEFT JOIN tb_sayur s2 ON (s2.kode_sayur = r.maka2)
                      LEFT JOIN tb_sayur s3 ON (s3.kode_sayur = r.maka3)
                      LEFT JOIN tb_sayur s4 ON (s4.kode_sayur = r.maka4)
                      LEFT JOIN tb_sayur s5 ON (s5.kode_sayur = r.maka5)
                      LEFT JOIN tb_sayur s6 ON (s6.kode_sayur = r.maka6)
                      LEFT JOIN tb_sayur s7 ON (s7.kode_sayur = r.maka7)
                      LEFT JOIN tb_sayur s8 ON (s8.kode_sayur = r.maka8)
                      LEFT JOIN tb_sayur s9 ON (s9.kode_sayur = r.maka9)
                      LEFT JOIN tb_sayur s10 ON (s10.kode_sayur = r.maka10)
                      LEFT JOIN tb_sayur s11 ON (s11.kode_sayur = r.maka11)
                      LEFT JOIN tb_sayur s12 ON (s12.kode_sayur = r.maka12)
                      LEFT JOIN tb_buah b4 ON (b4.kode_buah = r.maka4)
                      LEFT JOIN tb_buah b5 ON (b5.kode_buah = r.maka5)
                      LEFT JOIN tb_buah b6 ON (b6.kode_buah = r.maka6)
                      LEFT JOIN tb_buah b7 ON (b7.kode_buah = r.maka7)
                      LEFT JOIN tb_buah b8 ON (b8.kode_buah = r.maka8)
                      LEFT JOIN tb_buah b9 ON (b9.kode_buah = r.maka9)
                      LEFT JOIN tb_buah b10 ON (b10.kode_buah = r.maka10)
                      LEFT JOIN tb_buah b11 ON (b11.kode_buah = r.maka11)
                      LEFT JOIN tb_buah b12 ON (b12.kode_buah = r.maka12)

                      LEFT JOIN tb_makananpokok sm1 ON (
                      sm1.kode_makananpokok = r.solusi1
                      )
                      LEFT JOIN tb_makananpokok sm2 ON (
                      sm2.kode_makananpokok = r.solusi5
                      )
                      LEFT JOIN tb_makananpokok sm3 ON (
                      sm3.kode_makananpokok = r.solusi9
                      )
                      LEFT JOIN tb_laukpauk sl1 ON (sl1.kode_laukpauk = r.solusi2)
                      LEFT JOIN tb_laukpauk sl2 ON (sl2.kode_laukpauk = r.solusi6)
                      LEFT JOIN tb_laukpauk sl3 ON (sl3.kode_laukpauk = r.solusi10)

                      LEFT JOIN tb_sayur ss1 ON (ss1.kode_sayur = r.solusi3)
                      LEFT JOIN tb_sayur ss2 ON (ss2.kode_sayur = r.solusi7)
                      LEFT JOIN tb_sayur ss3 ON (ss3.kode_sayur = r.solusi11)

                      LEFT JOIN tb_buah sb1 ON (sb1.kode_buah = r.solusi4)
                      LEFT JOIN tb_buah sb2 ON (sb2.kode_buah = r.solusi8)
                      LEFT JOIN tb_buah sb3 ON (sb3.kode_buah = r.solusi8)
                      ORDER BY
                      id_rulls
                      ') ;  //menampikan SEMUA data dari tabel Matakuliah

                $no = '1';
                                    // perintah untuk membaca dan mengambil data dalam bentuk array
                while ($r = mysql_fetch_array ($rulls)){ ?>  
                  <tr>
                    <td style="text-align: center;"><?= $no ?></td>
                    <td style="text-align: center;"><?=$r['goda']?></td>
                    <td style="text-align: center;"><?=$r['nape']?></td>
                    <td style="text-align: center;">
                      <?=$r['mp1']?> <?=$r['mp2']?> <?=$r['mp3']?> <?=$r['mp4']?> <?=$r['mp5']?> <?=$r['mp6']?> <?=$r['mp7']?> <?=$r['mp8']?> <?=$r['mp9']?> <?=$r['mp10']?> <?=$r['mp11']?><?=$r['mp12']?>

                      <?=$r['lp1']?> <?=$r['lp2']?> <?=$r['lp3']?> <?=$r['lp4']?> <?=$r['lp5']?> <?=$r['lp6']?> <?=$r['lp7']?> <?=$r['lp8']?> <?=$r['lp9']?> <?=$r['lp10']?> <?=$r['lp11']?> <?=$r['lp12']?>

                      <?=$r['syr1']?> <?=$r['syr2']?> <?=$r['syr3']?> <?=$r['syr4']?> <?=$r['syr5']?> <?=$r['syr6']?> <?=$r['syr7']?> <?=$r['syr8']?> <?=$r['syr9']?> <?=$r['syr10']?> <?=$r['syr11']?> <?=$r['syr12']?>

                      <?=$r['bh4']?> <?=$r['bh5']?> <?=$r['bh6']?> <?=$r['bh7']?> <?=$r['bh8']?> <?=$r['bh9']?> <?=$r['bh10']?> <?=$r['bh11']?> <?=$r['bh12']?>

                    </td>

                    <td style="text-align: center;">
                      Pagi : <?=$r['smp1']?> <?=$r['slp1']?> <?=$r['ssyr1']?> <?=$r['sbh1']?> <br><br>
                      Siang : <?=$r['smp2']?> <?=$r['slp2']?> <?=$r['ssyr2']?> <?=$r['sbh2']?> <br><br>
                      Sore : <?=$r['smp3']?> <?=$r['slp3']?> <?=$r['ssyr3']?> <?=$r['sbh3']?> 
                    </td>
                    <td style="text-align: center;"> 
                      <a href="javascript:;" onclick="edit('<?=$r['id_rulls']?>','<?=$r['kode_1']?>','<?=$r['kode_2']?>','<?=$r['maka1']?>','<?=$r['maka2']?>','<?=$r['maka3']?>','<?=$r['maka4']?>','<?=$r['maka5']?>','<?=$r['maka6']?>','<?=$r['maka7']?>','<?=$r['maka8']?>','<?=$r['maka9']?>','<?=$r['maka10']?>','<?=$r['maka11']?>','<?=$r['maka12']?>','<?=$r['solusi1']?>','<?=$r['solusi2']?>','<?=$r['solusi3']?>','<?=$r['solusi4']?>','<?=$r['solusi5']?>','<?=$r['solusi6']?>','<?=$r['solusi7']?>','<?=$r['solusi8']?>','<?=$r['solusi9']?>','<?=$r['solusi10']?>','<?=$r['solusi11']?>','<?=$r['solusi12']?>');">
                        <i class="mdi mdi-tooltip-edit btn-icon-prepend">
                        </i>
                      </a> 
                      ||
                      <a href="javascript:;">
                        <i class="mdi mdi-delete btn-icon-prepend" onclick="del('<?=$r['id_rulls']?>');">
                        </i>
                      </a>
                    </td>
                  </tr> 
                  <?php $no++; } ?>
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
  function edit(id_rulls,kode_1,kode_2,maka1,maka2,maka3,maka4,maka5,maka6,maka7,maka8,maka9,maka10,maka11,maka12,solusi1,solusi2,solusi3,solusi4,solusi5,solusi6,solusi7,solusi8,solusi9,solusi10,solusi11,solusi12){
    $(".id_rulls").val(id_rulls);
    $(".kode_1").val(kode_1);
    $(".kode_2").val(kode_2);
    $(".maka1").val(maka1);
    $(".maka2").val(maka2);
    $(".maka3").val(maka3);
    $(".maka4").val(maka4);
    $(".maka5").val(maka5);
    $(".maka6").val(maka6);
    $(".maka7").val(maka7);
    $(".maka8").val(maka8);
    $(".maka9").val(maka9);
    $(".maka10").val(maka10);
    $(".maka11").val(maka11);
    $(".maka12").val(maka12);
    $(".solusi1").val(solusi1);
    $(".solusi2").val(solusi2);
    $(".solusi3").val(solusi3);
    $(".solusi4").val(solusi4);
    $(".solusi5").val(solusi5);
    $(".solusi6").val(solusi6);
    $(".solusi7").val(solusi7);
    $(".solusi8").val(solusi8);
    $(".solusi9").val(solusi9);
    $(".solusi10").val(solusi10);
    $(".solusi11").val(solusi11);
    $(".solusi12").val(solusi12);
    $(".action").val('Ubah');
  }

  function batal(){
    $(".id_rulls").val(id_rulls);
    $(".kode_1").val(kode_1);
    $(".kode_2").val(kode_2);
    $(".maka1").val(maka1);
    $(".maka2").val(maka2);
    $(".maka3").val(maka3);
    $(".maka4").val(maka4);
    $(".maka5").val(maka5);
    $(".maka6").val(maka6);
    $(".maka7").val(maka7);
    $(".maka8").val(maka8);
    $(".maka9").val(maka9);
    $(".maka10").val(maka10);
    $(".maka11").val(maka11);
    $(".maka12").val(maka12);
    $(".solusi1").val(solusi1);
    $(".solusi2").val(solusi2);
    $(".solusi3").val(solusi3);
    $(".solusi4").val(solusi4);
    $(".solusi5").val(solusi5);
    $(".solusi6").val(solusi6);
    $(".solusi7").val(solusi7);
    $(".solusi8").val(solusi8);
    $(".solusi9").val(solusi9);
    $(".solusi10").val(solusi10);
    $(".solusi11").val(solusi11);
    $(".solusi12").val(solusi12);
    $(".action").val('Simpan');
  }

  function del(id_rulls){
    if(id_rulls != ''){
      var r = confirm("Apakah Anda Yakin akan menanghapus ini ?");
      if (r == true) {
        window.location.href = 'form/include/proses.php?action=rulls&del='+id_rulls;
      } 
    }
  }

</script>

