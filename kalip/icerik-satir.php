<li class="list-group-item bg-acik-gri">
<a class="text-primary" href="icerik-goruntule.php?id=<?php echo $kayit['id']; ?>" class="text text-danger">
<strong><?php echo $kayit['baslik']; ?></strong>
</a>
<br><span class="text-secondary"><?php echo strip_tags(explode("<!-- bol -->", $kayit['icerik_html'])[0]); ?></span>
<br><div class="duzenleme-alani mt-2">
    <a href="icerik-goruntule.php?id=<?php echo $kayit['id']; ?>" target="_blank" class="badge bg-gri text-dark mr-1">oku</a>
    <a href="icerik-duzenle.php?id=<?php echo $kayit['id']; ?>" target="_blank" class="badge bg-gri text-dark mr-1">düzenle</a>
    <a href="icerik-sil.php?id=<?php echo $kayit['id']; ?>" target="_blank" class="badge bg-gri text-dark mr-1">sil</a>
    <a href="statik-sayfa.php?id=<?php echo $kayit['id']; ?>" target="_blank" class="badge bg-gri text-dark mr-1">statik</a>
</div>
</li>