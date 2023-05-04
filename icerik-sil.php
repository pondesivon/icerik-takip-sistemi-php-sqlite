<?php
   //--------------------------------------------------
   //Gerekli dosyaları çağır.
   //--------------------------------------------------
   require_once('getir.php');

   //--------------------------------------------------
   //Not id değerini al.
   //--------------------------------------------------
   $id = $_GET['id'];

   //--------------------------------------------------
   //Sorgu metni oluştur.
   //--------------------------------------------------
   $sql ="DELETE FROM icerik WHERE id=$id ";

   //--------------------------------------------------
   //Sorgu çalıştır.
   //--------------------------------------------------
   $sonuc = $db->exec($sql);

   //--------------------------------------------------
   //Sorgu sonucuna göre işlem yap.
   //--------------------------------------------------
   if(!$sonuc) {
      echo $db->lastErrorMsg();
   } else {
      $stil = "border:3px solid #ff7373; padding:20px; border-radius:5px; background-color:#ffcfca;font-size: 25px;color: #823d3d;";
      $mesaj = "İçerik başarılı bir şekilde silindi." . " [" . $db->changes() . "]";
      $metin = "<p style='$stil'>$mesaj</p>";
      
      echo $metin;      
   }

   //--------------------------------------------------
   //Yönlendirme yap.
   //--------------------------------------------------
   header('Refresh:1;url=icerik-listele.php');