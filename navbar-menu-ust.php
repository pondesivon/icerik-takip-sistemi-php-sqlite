<!-- Navbar Başlangıç -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark _sticky-top">
<a class="navbar-brand btn btn-secondary" href="index.php"><?php echo $siteAdi; ?></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarColor02">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item _active">
      <a class="nav-link" href="index.php">Başlangıç <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="icerik-listele.php">İçerikler</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ortam.php">Ortam</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="icerik-ekle.php">Yeni</a>
    </li>
    <li class="nav-item bg-dark">
    <div class="dropdown bg-dark">
      <a class="nav-link _dropdown-toggle text-success" href="icerik-ekle.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onmouseenter="$('#icerik-dropdown-ust').show();">Araç...</a>
      <div id="icerik-dropdown-ust" class="dropdown-menu bg-dark text-light" aria-labelledby="dropdownMenuButton"  onmouseleave="$('#icerik-dropdown-ust').hide();">
        <a class="dropdown-item bg-dark text-light" href="icerik-ekle.php">İçerik Ekle</a>
        <a class="dropdown-item bg-dark text-light" href="emmet.php">Emmet</a>
        <a class="dropdown-item bg-dark text-light" href="lt-gt-donusturucu.php">lt gt Dönüştürücü</a>
        <a class="dropdown-item bg-dark text-light" href="dosya-yukle.php">Dosya Yükle</a>
        <a class="dropdown-item bg-dark text-light" href="ortam.php">Ortam</a>
        <a class="dropdown-item bg-dark text-light" href="sorgu.php">Sorgu</a>
        <a class="dropdown-item bg-dark text-light" href="sayfa-listele.php">Sayfalar</a>
        <a class="dropdown-item bg-dark text-light" href="<?php echo $hakkindaSayfasi; ?>">Hakkında</a>
      </div>
    </div>     
    </li>
  </ul>
  <span class="btn btn-secondary float-right mr-2" onclick="sayfaninBasinaGit();">▲</span>
  <span class="btn btn-secondary float-right mr-2" onclick="sayfaninSonunaGit();">▼</span>
  <form class="form-inline my-2 my-lg-0" method="GET" action="ara.php">
    <input name="terim" class="form-control mr-sm-2" type="text" placeholder="Arama Yap...">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Ara</button>
  </form>
</div>
</nav>
<!-- Navbar Bitiş -->