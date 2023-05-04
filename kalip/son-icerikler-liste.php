<!-- İçerik Tablosu Alanı Başlangıç --->
<ul class="list-group">

    <!-- Listeleme Alanı Başlangıç -->
    <li class="list-group-item bg-gri"><strong>Son İçerikler</strong></li>
    <?php
        $sql ="SELECT * FROM (
        SELECT * FROM icerik WHERE icerik_tur='icerik' ORDER BY id DESC LIMIT 20)
        ORDER BY id DESC;";

        $sonuc = $db->query($sql);

        while($kayit = $sonuc->fetchArray(SQLITE3_ASSOC)) {
            require('icerik-satir.php');
        }
    ?>
    <!-- Listeleme Alanı Bitiş  -->

</table>
<!-- İçerik Tablosu Alanı Bitiş --->