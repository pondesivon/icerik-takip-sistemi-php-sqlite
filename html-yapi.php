<?php
class HtmlYapi {

  public static function BirSayfaIleriGit($url, $sayfa) {
    $deger = '<a href="' . $url . ($sayfa+1) 
           . '" class="btn btn-dark float-right mr-1">▷</a>';

    return $deger;
  }

  public static function BirSayfaGeriGit($url, $sayfa) {
    $deger = '<a href="' . $url . ($sayfa-1) 
           . '" class="btn btn-dark float-right mr-1">◁</a>';

    return $deger;
  }

  public static function KategoriOlusturBaglanti($kategori) {
    $dizi =  explode(",", $kategori);

       $kategori = trim($kategori);

       $kategori = "<a href='kategori.php?terim=$kategori' name='etiket' "
                ."_target='_blank' class='text-danger kategori'>" . $kategori . "</a>";

      return $kategori;
  }

  public static function EtiketOlusturBaglanti($etiketMetin) {
    $dizi =  explode(",", $etiketMetin);

    $baglantiDizi = array();

    foreach ($dizi as $oge) {
       $oge = trim($oge);

       $oge = "<a href='etiket.php?terim=$oge' name='etiket' "
                ."class='konu-etiket'>" . $oge . "</a>";
       array_push($baglantiDizi, $oge);
    }

    return implode(", ", $baglantiDizi);
  }

  public static function EtiketOlusturDuz($etiketMetin) {
    $dizi =  explode(",", $etiketMetin);

    $baglantiDizi = array();

    foreach ($dizi as $oge) {
       $oge = trim($oge);

       $oge = "<span class='btn btn-light bg-gri'>" . $oge . "</span>";
       array_push($baglantiDizi, $oge);
    }

    return implode(" ", $baglantiDizi);
  }  
}