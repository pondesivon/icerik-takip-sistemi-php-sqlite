<!-- Kategori Listesi Başlangıç -->
<ul class="list-group">
    <li class="list-group-item list-group-item-dark"><strong>Kategoriler</strong></li>
    <?php 
        //$kategori_liste degisken.php dosyasından geliyor.
        $dizi = explode(",", $kategori_liste);

        foreach  ($dizi as $d) {
            echo '<li class="list-group-item bg-acik-gri"><a class="text-dark" href="kategori.php?terim=' . $d . '">' . $d . '</a></li>';
        }
    ?>
</ul>
<!-- Kategori Listesi Bitiş -->
