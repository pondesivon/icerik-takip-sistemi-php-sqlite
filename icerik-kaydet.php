<?php
   //--------------------------------------------------
   //Gerekli dosyaları çağır.
   //--------------------------------------------------
   require_once('getir.php');

   //--------------------------------------------------
   //Bilgileri değişkenlere aktar.
   //--------------------------------------------------
   $baslik = SQLite3::escapeString($_POST['baslik']);
   $icerik_html = SQLite3::escapeString($_POST['icerik-html']);
   $icerik_sade = SQLite3::escapeString($_POST['icerik-sade']);
   $icerik_tur = SQLite3::escapeString($_POST['icerik-tur']);
   $kategori = SQLite3::escapeString($_POST['kategori']);
   $etiket = SQLite3::escapeString($_POST['etiket']);
   $baglanti = SQLite3::escapeString($_POST['baglanti']);
   $dosya = Arac::case_converter($baslik) . ".txt";

   //--------------------------------------------------
   //Sorgu metni oluştur.
   //--------------------------------------------------
   $sql ="INSERT INTO icerik(baslik, icerik_html, icerik_sade, icerik_tur, kategori, etiket, baglanti, dosya) 
          VALUES('$baslik', '$icerik_html', '$icerik_sade', '$icerik_tur', '$kategori', '$etiket', '$baglanti', '$dosya')";

   //--------------------------------------------------
   //Sorgu çalıştır.
   //--------------------------------------------------
   $sonuc = $db->exec($sql);

   //--------------------------------------------------
   //Sorgu sonucuna göre işlem yap.
   //--------------------------------------------------
   if(!$sonuc) {
      $dbMesaj = $db->lastErrorMsg() . "\n" . $db->lastErrorCode();
      //Arac::GunlukDosyasiOlustur("icerik-kaydet.php", $dbMesaj);
   
      echo $db->lastErrorMsg();
   } else {
      $dbMesaj = $db->lastErrorMsg() . "\n" . $db->lastErrorCode();
      //Arac::GunlukDosyasiOlustur("icerik-kaydet.php", $dbMesaj);

      $stil = "border:3px solid #aaff70; padding:20px; border-radius:5px; 
         background-color:#d6ffa5;font-size: 25px;color: #4b643a;";
      $mesaj = "İçerik başarılı bir şekilde kaydedildi.";
      echo "<p style='$stil'>$mesaj</p>";
   }

   //--------------------------------------------------
   //Yönlendirme yap.
   //--------------------------------------------------
   //header('Refresh:1;url=icerik-listele.php');
   $sonID = $db->lastInsertRowID();
   header('Refresh:1;url=icerik-duzenle.php?id=' . $sonID);