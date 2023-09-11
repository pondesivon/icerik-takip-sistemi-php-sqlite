<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
    $title = $siteAdi . $kisaltma;
    require_once('header.php');
?>

<div class="container min-vh-100 bg-light">
    <div class="row">
        <div class="col">
            <!-- Üst Başlık Ve Yönlendirme Alanı -->
            <h1 class="page-title text-dark">
                <?php echo $title; ?>
                <a href="icerik-ekle.php" class="btn btn-dark float-right">İçerik Ekle</a>
            </h1>

            <!-- Tanım Alanı -->
            <p class="lead" style="display:none;">Ağırlıklı olarak programlama, webmaster ve bilgisayar konularındaki içeriklerin paylaşıldığı kişisel veri tabanı.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <p><?php require_once('kalip/son-icerikler.php'); ?></p>
        </div>
        <div class="col-lg-3">
            <?php require_once('sidebar.php'); ?>
        </div>
    </div>    
</div>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>