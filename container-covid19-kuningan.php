# ------ #
# 20210911 : Create Github Repo As Cisco DevAsc Student #
# https://github.com/lukisugianto/API-covid19-kuningan #
# ------ #

<div class="container-covid19">
	<?php

		$string = file_get_contents("http://covid19.kuningankab.go.id/api/latest-full-v2");
		$datacovid19 = json_decode($string, true);
		
		$datacovid19_tglupdate			= $datacovid19[0]['field_covid19_tanggal_update'];
		
		$kontakerat_total				= $datacovid19[0]['field_kontakerat_total'];
		$kontakerat_discarded			= $datacovid19[0]['field_kontakerat_discarded'];
		$kontakerat_karantina			= $datacovid19[0]['field_kontakerat_karantina'];
		
		$kasus_suspek_total				= $datacovid19[0]['field_suspek_total'];
		$kasus_suspek_discarded			= $datacovid19[0]['field_suspek_discarded'];
		$kasus_suspek_karantina			= $datacovid19[0]['field_suspek_karantina'];
		
		$rapid_positif_total			= $datacovid19[0]['field_rapid_positif_total'];
		$rapid_positif_sembuh			= $datacovid19[0]['field_rapid_positif_sembuh'];
		$rapid_positif_karantina		= $datacovid19[0]['field_rapid_positif_karantina'];
		$rapid_positif_meninggal		= $datacovid19[0]['field_rapid_positif_meninggal'];
		
		$propable_total					= $datacovid19[0]['field_propable_total'];
		$probable_discarded				= $datacovid19[0]['field_probable_discarded'];
		$probable_masih_karantina		= $datacovid19[0]['field_probable_masih_karantina'];
		$probable_meninggal				= $datacovid19[0]['field_probable_meninggal'];
		
		$konfirmasi_total				= $datacovid19[0]['field_konfirmasi_total'];
		$konfirmasi_discarded			= $datacovid19[0]['field_konfirmasi_discarded'];
		$konfirmasi_karantina			= $datacovid19[0]['field_konfirmasi_karantina'];
		$konfirmasi_meninggal			= $datacovid19[0]['field_konfirmasi_meninggal'];
		
		?>

		  <div class="row row-covid19-atas">
		  <?php echo "Update Perkembangan COVID-19</br> di Kabupaten Kuningan</br>( " . $datacovid19_tglupdate . " WIB )" ; ?>
		  </div>
			
		  
			<div class="row row-covid19-inti">
				<div class="row row-label-angka-covid19 ">
					<div class="col col-sm-12 grouplabelcovid">
					  KASUS RAPID POSITIF
					 </div>
				</div>
		        <div class="row row-label-angka-covid19 ">
					<div class="col col-sm-8 labelcovid">
					  Total
					 </div>
					<div class="col col-sm-4 angkacovid">
					  <?php echo $rapid_positif_total ?>
					</div>
				</div>
				
				<div class="row row-label-angka-covid19">
					<div class="col col-sm-8 labelcovid">
					  Sembuh
					 </div>
					<div class="col col-sm-4 angkacovid">
					  <?php echo $rapid_positif_sembuh ?>
					</div>
				</div>
				
				<div class="row row-label-angka-covid19">
					<div class="col col-sm-8 labelcovid">
					  Karantina
					 </div>
					<div class="col col-sm-4 angkacovid">
					  <?php echo $rapid_positif_karantina ?>
					</div>
				</div>
				
				<div class="row row-label-angka-covid19">
					<div class="col col-sm-8 labelcovid">
					  Meninggal
					 </div>
					<div class="col col-sm-4 angkacovid">
					  <?php echo $rapid_positif_meninggal ?>
					</div>
				</div>
				
				<div class="row row-label-angka-covid19 ">
					<div class="col col-sm-12 grouplabelcovid">
					  KASUS KONFIRMASI
					 </div>
				</div>
				
				<div class="row row-label-angka-covid19">
					<div class="col col-sm-8 labelcovid">
					  Total
					 </div>
					<div class="col col-sm-4 angkacovid">
					  <?php echo $konfirmasi_total ?>
					</div>
				</div>
				
				<div class="row row-label-angka-covid19">
					<div class="col col-sm-8 labelcovid">
					  Discarded
					 </div>
					<div class="col col-sm-4 angkacovid">
					  <?php echo $konfirmasi_discarded ?>
					</div>
				</div>
				
				<div class="row row-label-angka-covid19">
					<div class="col col-sm-8 labelcovid">
					  Karantina
					 </div>
					<div class="col col-sm-4 angkacovid">
					  <?php echo $konfirmasi_karantina ?>
					</div>
				</div>
				
				<div class="row row-label-angka-covid19">
					<div class="col col-sm-8 labelcovid">
					  Meninggal
					 </div>
					<div class="col col-sm-4 angkacovid">
					  <?php echo $konfirmasi_meninggal ?>
					</div>
				</div>
			
		  </div>
			 
		  <div class="row row-covid19-bawah">
			<?php echo "<a href='http://covid19.kuningankab.go.id/rekapitulasi-data-kasus-covid-19-kabupaten-kuningan' target='_blank'> Data Selengkapnya >></a> " ; ?>
		  </div>
	  
</div>