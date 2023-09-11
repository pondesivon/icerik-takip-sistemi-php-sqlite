<ul class="list-group">
	<li class="list-group-item list-group-item-dark"><strong>Etiketler</strong></li>
	<?php 
		//--------------------------------------------------
		//$etiket_liste parametre.php dosyasından geliyor.
		//--------------------------------------------------
		$dizi = explode(",",$etiket_liste);

		foreach  ($dizi as $d) {
			echo '<li class="list-group-item bg-acik-gri"><a class="text-dark" href="etiket.php?terim=' . $d . '">' . $d . '</a></li>';
		}
	?>
</ul>