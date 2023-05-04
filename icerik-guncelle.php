<?php
   //--------------------------------------------------
   //Gerekli dosyaları çağır.
   //--------------------------------------------------
   require_once('getir.php');

   //--------------------------------------------------
   //Bilgileri değişkene aktar.
   //--------------------------------------------------
   $baslik = SQLite3::escapeString($_POST['baslik']);
   $icerik_html = SQLite3::escapeString($_POST['icerik-html']);
   $icerik_sade = SQLite3::escapeString($_POST['icerik-sade']);
   $icerik_tur = SQLite3::escapeString($_POST['icerik-tur']);
   $kategori = SQLite3::escapeString($_POST['kategori']);
   $etiket = SQLite3::escapeString($_POST['etiket']);
   $baglanti = SQLite3::escapeString($_POST['baglanti']);
   $dosya = Arac::case_converter($baslik) . ".txt"; //SQLite3::escapeString($_POST['dosya']);
   $id = $_POST['id'];
   //$baglanti = Arac::BaglantiMetniOlustur($baslik);


   //--------------------------------------------------
   //Güncelleme sorgusu çalıştır.
   //--------------------------------------------------
   $sql ="UPDATE icerik SET 
            baslik='$baslik', 
            icerik_html='$icerik_html', 
            icerik_sade='$icerik_sade',
            icerik_tur='$icerik_tur',
            kategori='$kategori',
            etiket='$etiket',
            baglanti='$baglanti',
            dosya='$dosya' 
            WHERE id='$id'";

   $sonuc = $db->exec($sql);

   //--------------------------------------------------
   //Sorgu sonucuna göre bilgilendir.
   //--------------------------------------------------
   if(!$sonuc) {
      $dbMesaj = $db->lastErrorMsg() . "\n" . $db->lastErrorCode();
      Arac::GunlukDosyasiOlustur("icerik-guncelle.php", $dbMesaj);

      echo $db->lastErrorMsg();
   } else {
      $stil = "border:3px solid #ffdc73; padding:20px; border-radius:5px; 
      background-color:#fffaab;font-size: 25px;color: #6f532e;";
      $mesaj = "İçerik başarılı bir şekilde güncellendi." . " [" . $db->changes() . "]";
      $metin = "<p style='$stil'>$mesaj</p>";

      Arac::GunlukDosyasiOlustur("Guncelleme", $mesaj);
      echo $metin;
   }

   //--------------------------------------------------
   //İçerik okuma sayfasına yönlendir.
   //--------------------------------------------------
   header('Refresh:1;url=icerik-duzenle.php?id=' . $id);