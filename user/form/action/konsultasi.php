<div class="main-panel">        
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
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
										$konsultasi= mysql_query ('
											SELECT
											*

											FROM
											tb_konsultasi tk,
											tb_user tu
											WHERE
											tk.id_user = tu.id_user
											');

											// perintah untuk membaca dan mengambil data dalam bentuk array
											while ($r = mysql_fetch_array ($konsultasi)){ ?>  
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
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>