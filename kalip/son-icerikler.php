<!-- İçerik Tablosu Alanı Başlangıç --->
<table class="table table-bordered bg-acik-gri _table-striped">

    <!-- Listeleme Alanı Başlangıç -->
    <?php
        $sql ="SELECT * FROM (
        SELECT * FROM icerik WHERE icerik_tur='icerik' ORDER BY id DESC LIMIT 20)
        ORDER BY id DESC;";

        $sonuc = $db->query($sql);

        require_once('tablo-baslik.php');
        while($kayit = $sonuc->fetchArray(SQLITE3_ASSOC)) {
            require('tablo-satir.php');
        }
    ?>
    <!-- Listeleme Alanı Bitiş  -->

</table>
<!-- İçerik Tablosu Alanı Bitiş --->