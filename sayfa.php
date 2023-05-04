<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
	$title = "İçerik Listele" . $kisaltma;
	require_once('header.php');
?>

<div class="container min-vh-100">
	<div class="row">
		<div class="col">
			<!-- Üst Başlık Ve Yönlendirme Alanı -->
			<h1 class="page-title text-dark">
				<?php echo $title; ?>
				<a href="icerik-ekle.php" class="btn btn-dark float-right">İçerik Ekle</a>
			</h1>

			<!-- İçerik Tablosu Alanı Başlangıç --->
			<table class="table table-bordered table-secondary _table-striped">

				<!-- Tablo Satır Listeleme Başlangıç -->
				<?php
					require_once('sayfalama.php');

					$sql ="SELECT * FROM icerik WHERE icerik_tur='icerik' LIMIT '$sayfaBasiIcerik' OFFSET '$offset'";
					$sonuc = $db->query($sql);
					$sira = $offset;

					require_once('kalip/tablo-baslik.php');

					while($kayit = $sonuc->fetchArray(SQLITE3_ASSOC)) {
						require('kalip/tablo-satir.php');
					}
				?>
				<!-- Tablo Satır Listeleme Bitiş -->

			</table>
			<!-- İçerik Tablosu Alanı Başlangıç --->

		</div>
	</div>
</div>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>