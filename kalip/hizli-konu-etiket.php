	<!-- Genel Etiketler -->
	<?php 
		$etiket_liste = "microsoft excel,microsof excel vba,chsarp,php,javascript,jquery,bootstrap,html,css,xml,bat,mysql,sqlite,açıklamalı içerik,düzenli ifadeler";

		$dizi = explode(",", $etiket_liste);

		$yeniDizi = array();

		foreach  ($dizi as $d) {
			$oge = '<span class="badge badge-secondary cursor-pointer text-wrap" onclick="metinKopyala(\'' . $d . '\')">' . $d . '</span>';
			array_push($yeniDizi, $oge);
		}

		echo "<p>" . implode(" ", $yeniDizi) . "</p>";
	?>

	<!-- Microsoft Excel Etiketleri -->
	<?php 
		// $etiket_liste = "microsoft excel,microsoft excel vba,microsoft excel vba çalışma kitabı işlemleri,microsoft excel vba çalışma sayfası işlemleri,microsoft excel vba listeleme işlemleri,microsoft excel vba döngü işlemleri,microsoft excel vba matematik işlemleri";

		// $dizi = explode(",", $etiket_liste);

		// $yeniDizi = array();

		// foreach  ($dizi as $d) {
		// 	$oge = '<span class="badge badge-secondary cursor-pointer text-wrap" onclick="metinEkle(\'hizli-konu-etiket\',\'' . $d . ', \')">' . $d . '</span>';
		// 	array_push($yeniDizi, $oge);
		// }

		// echo implode(" ", $yeniDizi);
	?>