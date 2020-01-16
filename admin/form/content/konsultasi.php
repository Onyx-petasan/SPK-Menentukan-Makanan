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
													<td style="text-align: center;"><?=$r['nama']?></td>
													<td style="text-align: center;"><?=$r['kode_1']?></td>
													<td style="text-align: center;"><?=$r['kode_2']?></td>
													<td style="text-align: center;">
														<?=$r['maka1']?> <?=$r['maka2']?> <?=$r['maka3']?> <?=$r['maka4']?> <?=$r['maka5']?><?=$r['maka6']?> <?=$r['maka7']?> <?=$r['maka8']?> <?=$r['maka9']?> <?=$r['maka10']?> <?=$r['maka11']?> <?=$r['maka12']?> <?=$r['maka13']?> <?=$r['maka14']?> <?=$r['maka15']?><?=$r['maka16']?> <?=$r['maka17']?> <?=$r['maka18']?> <?=$r['maka19']?> <?=$r['maka20']?> <?=$r['maka21']?> <?=$r['maka22']?> <?=$r['maka23']?> <?=$r['maka24']?> <?=$r['maka25']?> <?=$r['maka26']?> <?=$r['maka27']?> <?=$r['maka28']?> <?=$r['maka29']?> <?=$r['maka30']?> <?=$r['maka31']?> <?=$r['maka32']?> <?=$r['maka33']?> <?=$r['maka34']?> <?=$r['maka35']?> <?=$r['maka36']?> <?=$r['maka37']?> <?=$r['maka38']?> <?=$r['maka39']?> <?=$r['maka40']?> <?=$r['maka41']?> <?=$r['maka42']?> <?=$r['maka43']?> <?=$r['maka44']?> <?=$r['maka45']?>

													</td>

													<td style="text-align: center;">
														Pagi : <?=$r['solusi1']?> <?=$r['solusi2']?> <?=$r['solusi3']?> <?=$r['solusi4']?> <br><br>
														Siang : <?=$r['solusi5']?> <?=$r['solusi6']?> <?=$r['solusi7']?> <?=$r['solusi8']?> <br><br>
														Sore : <?=$r['solusi9']?> <?=$r['solusi10']?> <?=$r['solusi11']?> <?=$r['solusi12']?> 
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>