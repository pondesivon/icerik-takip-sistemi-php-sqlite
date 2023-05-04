<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
	$title = "Sorgu Çalıştır" . $kisaltma;
	require_once('header.php');
?>

<div class="container min-vh-100" onload="sorguKutusunaOdaklan();">
	<div class="row">
		<div class="col">
				<!-- Üst Başlık Ve Yönlendirme Alanı -->
				<h1 class="page-title text-dark">
					<?php echo $title; ?>
				</h1>			
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form action="sorgu.php" method="post">

		      <!-- İçerik -->
		      <div class="form-group">
		      	<div class="row">
		      		<div class="col-lg-7">
				         <textarea class="form-control text-monospace bg-gri textarea-fokus" id="s" name="s" placeholder="Sorgu" id="exampleFormControlTextarea1" onkeypress="sorguCalistir();" onmousenter="sorguKutusunaOdaklan();" rows="4"><?php echo isset($_POST['s']) ? $_POST['s'] : "SELECT * FROM icerik WHERE icerik_html LIKE '%%'"; ?></textarea>
		      		</div>
		      		<div class="col-lg-1">
						<button id="calistir" class="btn btn-dark float-right">Çalıştır</button>	      			
		      		</div>
		      		<div class="col-lg-4">
							<ol class="bg-gri">
								<li><a href="#" onclick="sorguMetni('s', 'SELECT * FROM icerik');">Tüm İçerikleri Listele</a></li>
								<li><a href="#" onclick="sorguMetni('s', 'SELECT * FROM icerik WHERE baslik LIKE \'%%\'');">Başlıklarda Arama Yap</a></li>
								<li><a href="#" onclick="sorguMetni('s', 'SELECT * FROM icerik WHERE icerik_html LIKE \'%%\'');">İçeriklerde Arama Yap</a></li>
								<li><a href="#" onclick="sorguMetni('s', 'SELECT * FROM icerik WHERE etiket LIKE \'%%\'');">Etiketlerde Arama Yap</a></li>
								<li><a href="#" onclick="sorguMetni('s', 'SELECT * FROM icerik WHERE baslik || \'\\n\' || icerik_html || \'\\n\' || etiket LIKE \'%%\'');">Başlık + İçerik (HTML) + Etiket</a></li>
							</ol>
		      		</div>
		      	</div>
		      </div>		
			</form>

			<!-- İçerik Tablosu Alanı Başlangıç --->
			<table class="table table-bordered table-secondary _table-striped">

				<!-- Tablo Satır Listeleme Başlangıç -->
				<?php
					if ($_POST) {
						$sql = $_POST['s'];
						$sira = 0;
						$sonuc = $db->query($sql);

	                    require_once('kalip/tablo-baslik.php');
	                    
	                    while($kayit = $sonuc->fetchArray(SQLITE3_ASSOC)) {
	                        require('kalip/tablo-satir.php');
	                    }
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