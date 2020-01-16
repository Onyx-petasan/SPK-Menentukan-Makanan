<div class="main-panel">        
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<?php
						$kode_1 = $_POST[kode_1];
						$kode_2 = $_POST[kode_2];
						?>
						<!-- inti isi awal -->
						<div class="col-md-12">
							<div class="table-responsive pt-3">
								<table class="table table-bordered">
									<thead>
										<tr class="table-info">
											<th style="text-align: center;">Nama Konsultan</th>
											<th style="text-align: center;">Golongan Darah</th>
											<th style="text-align: center;">Penyakit</th>
											<th style="text-align: center;">Yang Harus Di Makan</th>
											<th style="text-align: center;">Solusi</th>
										</tr>
									</thead>
									<tbody>
										<?php 
                    					// Perintah untuk menampilkan data
										$rulls= mysql_query ('
											SELECT
											r.*, g.nama_golongandarah goda,
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
											LEFT JOIN tb_laukpauk sl1 ON (
											sl1.kode_laukpauk = r.solusi2
											)
											LEFT JOIN tb_laukpauk sl2 ON (
											sl2.kode_laukpauk = r.solusi6
											)
											LEFT JOIN tb_laukpauk sl3 ON (
											sl3.kode_laukpauk = r.solusi10
											)
											LEFT JOIN tb_sayur ss1 ON (ss1.kode_sayur = r.solusi3)
											LEFT JOIN tb_sayur ss2 ON (ss2.kode_sayur = r.solusi7)
											LEFT JOIN tb_sayur ss3 ON (ss3.kode_sayur = r.solusi11)
											LEFT JOIN tb_buah sb1 ON (sb1.kode_buah = r.solusi4)
											LEFT JOIN tb_buah sb2 ON (sb2.kode_buah = r.solusi8)
											LEFT JOIN tb_buah sb3 ON (sb3.kode_buah = r.solusi8)

											WHERE
											r.kode_1 = "'.$kode_1.'" AND
											r.kode_2 = "'.$kode_2.'"

											') ;  
			                				//menampikan SEMUA data dari tabel Matakuliah
											// perintah untuk membaca dan mengambil data dalam bentuk array
											while ($r = mysql_fetch_array ($rulls)){ ?>  
												<tr>
													<td style="text-align: center;"><?php echo $data['nama']?></td>
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
												</tr>

												<?php 
												$a=$data['id_user'];
												$b=$r['goda'];
												$c=$r['nape'];
												$d=$r['mp1'];
												$e=$r['mp2'];
												$f=$r['mp3'];
												$g=$r['mp4'];
												$h=$r['mp5'];
												$i=$r['mp6'];
												$j=$r['mp7'];
												$k=$r['mp8'];
												$l=$r['mp9'];
												$m=$r['mp10'];
												$n=$r['mp11'];
												$o=$r['mp12'];
												$p=$r['lp1'];
												$q=$r['lp2'];
												$ra=$r['lp3'];
												$s=$r['lp4'];
												$t=$r['lp5'];
												$u=$r['lp6'];
												$v=$r['lp7'];
												$w=$r['lp8'];
												$x=$r['lp9'];
												$y=$r['lp10'];
												$z=$r['lp11'];
												$aa=$r['lp12'];
												$ab=$r['syr1'];
												$ac=$r['syr2'];
												$ad=$r['syr3'];
												$ae=$r['syr4'];
												$af=$r['syr5'];
												$ag=$r['syr6'];
												$ah=$r['syr7'];
												$ai=$r['syr8'];
												$aj=$r['syr9'];
												$ak=$r['syr10'];
												$al=$r['syr11'];
												$am=$r['syr12'];
												$an=$r['bh4'];
												$ao=$r['bh5'];
												$ap=$r['bh6'];
												$aq=$r['bh7'];
												$ar=$r['bh8'];
												$as=$r['bh9'];
												$at=$r['bh10'];
												$au=$r['bh11'];
												$av=$r['bh12'];

												$aw=$r['smp1'];
												$ax=$r['slp1'];
												$ay=$r['ssyr1'];
												$az=$r['sbh1'];
												$ba=$r['smp2'];
												$bb=$r['slp2'];
												$bc=$r['ssyr2'];
												$bd=$r['sbh2'];
												$be=$r['smp3'];
												$bf=$r['slp3'];
												$bg=$r['ssyr3'];
												$bh=$r['sbh3'];

												 $no++; } ?>
											</tbody>
										</table>
										<?php
										$konsul =mysql_query("
					                    INSERT INTO 
					                        tb_konsultasi (id_user,kode_1,kode_2,maka1,maka2,maka3,maka4,maka5,maka6,maka7,maka8,maka9,maka10,maka11,maka12,maka13,maka14,maka15,maka16,maka17,maka18,maka19,maka20,maka21,maka22,maka23,maka24,maka25,maka26,maka27,maka28,maka29,maka30,maka31,maka32,maka33,maka34,maka35,maka36,maka37,maka38,maka39,maka40,maka41,maka42,maka43,maka44,maka45,solusi1,solusi2,solusi3,solusi4,solusi5,solusi6,solusi7,solusi8,solusi9,solusi10,solusi11,solusi12)
					                    VALUES 
					                        ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$ra','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$ab','$ac','$ad','$ae','$af','$ag','$ah','$ai','$aj','$ak','$al','$am','$an','$ao','$ap','$aq','$ar','$as','$at','$au','$av','$aw','$ax','$ay','$az','$ba','$bb','$bc','$bd','$be','$bf','$bg','$bh')
					                ");
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

