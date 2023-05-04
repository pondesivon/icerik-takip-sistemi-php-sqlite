<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php
	$title = "Hakkında" . $kisaltma;
	require_once('header.php');
?>

<div class="container min-vh-100 bg-light">
	<div class="row">
		<div class="col">
			<h1 class="page-title text-dark"><?php echo $title; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-9 mt-3">				
<div class="alert alert-dark"><strong>Kaynak</strong></div>
<p>Şu bağlantıdaki kaynağın proje amacına göre yeniden düzenlenmiş halidir: <a href="https://www.youtube.com/watch?v=-frCfUepNiA" target="_blank">Database CRUD PHP Desktop application with SQLite</a></p>
<p>Projenin asıl versiyonuna ait kaynak kodu bu adrestedir: <a href="https://drive.google.com/file/d/1Gl9SnsJlbP33RDkGzu4N5oDEB5FYC25W" target="_blank">https://drive.google.com/file/d/1Gl9SnsJlbP33RDkGzu4N5oDEB5FYC25W</a></p>

<div class="alert alert-dark"><strong>Amaç</strong></div>
<ul>
	<li>PHP ve SQLite tabanlı bir not defteridir.</li>
	<li>Temel PHP, veri tabanı (SQLite) CRUD, arama, listeleme vs. işlemleri ile ilgili bir örnek olması amacıyla hazırlanmıştır.</li>
</ul>

<div class="alert alert-dark"><strong>Alt Yapı</strong></div>
<ul>
	<li>PHP</li>
	<li>SQLite</li>
	<li>Bootstrap 4.4.1</li>
	<li>Javascript</li>
	<li>HTML</li>
	<li>CSS</li>
	<li>emmet.js</li>
	<li>prism.js</li>
</ul>

<div class="alert alert-dark"><strong>Sorumluluk Reddi</strong></div>
<p>Bu script örnek olması amacıyla hazırlanmıştır ve script kullanımı ile ilgili herhangi bir sorumluluk kabul edilmemektedir.</p>			
		</div>
        <div class="col-lg-3">
        	<?php require_once('sidebar.php'); ?>
        </div>
	</div>
</div>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>