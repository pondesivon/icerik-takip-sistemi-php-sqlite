<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
    $title = "Sayfa Listele" . $kisaltma;
    require_once('header.php');
?>

<?php 
    require_once('sayfalama.php');
    $sayfa = $_GET['sayfa'] ?? 1;

    //--------------------------------------------------
    //Sayfalama İşlemleri
    //--------------------------------------------------
    //sayfalama.php için $toplamIcerikSayisi değişkenini 
    //belirliyoruz. Buradan toplam sayfa sayısını bulacak 
    //ve aşağıda sayfalama yapacak.
    //--------------------------------------------------
    $icerikSayisiSql = "SELECT COUNT(*) FROM icerik WHERE icerik_tur='sayfa'";
    $count = $db->querySingle($icerikSayisiSql);
    $toplamIcerikSayisi = $count;
    $toplamSayfaSayisi = ceil($toplamIcerikSayisi / $sayfaBasiIcerik);

    //--------------------------------------------------
    //İçerik Listeleme Sorgusu
    //--------------------------------------------------
    $sql ="SELECT * FROM icerik WHERE icerik_tur='sayfa' 
           ORDER BY id DESC LIMIT '$sayfaBasiIcerik' OFFSET '$offset'";
    $sira = $offset;
    $sonuc = $db->query($sql);

    if ($toplamSayfaSayisi > 1) {
        //--------------------------------------------------
        //Sayfalama div Elementi Başlangıç
        //--------------------------------------------------
        $sayfalamaHTML = '<div class="row mb-2">';

        //--------------------------------------------------
        //Sayfa numaralarını oluştur.
        //--------------------------------------------------
        $sayfalamaHTML = $sayfalamaHTML . '<div class="col-lg-10">';
        for ($i = 1; $i <= $toplamSayfaSayisi; $i++) {
          $active = ($i == $gecerliSayfa) ? "active" : "";
          $sayfalamaHTML = $sayfalamaHTML 
            . "<a class='badge badge-secondary' href='?sayfa=$i' class='$active'>$i</a>&nbsp;";
        }
        $sayfalamaHTML = $sayfalamaHTML . "</div>";

        //--------------------------------------------------
        //İleri geri butonlarını oluştur.
        //--------------------------------------------------
        $sayfalamaHTML = $sayfalamaHTML . '<div class="col-lg-2">';
        $sayfalamaHTML = $sayfalamaHTML 
            . '<a href="icerik-listele.php?sayfa=' . ($sayfa+1) 
            . '" class="btn btn-dark float-right mr-1">▷</a>';

        $sayfalamaHTML = $sayfalamaHTML 
            . '<a href="icerik-listele.php?sayfa=' . ($sayfa-1) 
            . '" class="btn btn-dark float-right mr-1">◁</a>';
        
        $sayfalamaHTML = $sayfalamaHTML . "</div>";

        //--------------------------------------------------
        //Sayfalama div Elementi Bitiş
        //--------------------------------------------------
        $sayfalamaHTML = $sayfalamaHTML . '</div>';        
    } else {
        $sayfalamaHTML = "";
    }
?>

<div class="container min-vh-100 bg-light">
    <div class="row">
        <div class="col">
            <!-- Üst Başlık Ve Yönlendirme Alanı -->
            <h1 class="page-title text-dark">
                <?php echo $title . " <span class='text-success'>(". $count . " Sonuç)"; ?><a href="index.php" class="btn btn-dark float-right">İçerik Ekle</a>
                <?php echo HtmlYapi::BirSayfaIleriGit("icerik-listele.php?sayfa=", $sayfa); ?>
                <?php echo HtmlYapi::BirSayfaGeriGit("icerik-listele.php?sayfa=", $sayfa); ?>
            </h1>            
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-lg-9 mt-3">
            <?php //echo $sayfalamaHTML; ?>

            <!-- İçerik Tablosu Alanı Başlangıç --->
            <table class="table table-bordered bg-acik-gri _table-striped">

                <!-- PHP İle Satır Listele Başlangıç -->
                <?php
                    require_once('kalip/tablo-baslik.php');

                    while($kayit = $sonuc->fetchArray(SQLITE3_ASSOC)) {
                        require('kalip/tablo-satir.php');                        
                    }
                ?>
            </table>
            <!-- İçerik Tablosu Alanı Bitiş --->

            <?php echo $sayfalamaHTML; ?> 
        </div>
        <div class="col-lg-3">
            <?php require_once('sidebar.php'); ?>
        </div>
    </div>
</div>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>