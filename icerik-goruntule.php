<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<!-- İlgili notu getiren sorguyu çalıştır. -->
<?php
   $id = $_GET['id'];
   $sql ="SELECT * FROM icerik WHERE id=$id";
   $sonuc = $db->query($sql);
   $kayit = $sonuc->fetchArray(SQLITE3_ASSOC);
?>

<?php 
   $title = $kayit['baslik'] . $kisaltma;
   require_once('header.php');
?>

<div class="container min-vh-100 bg-light">
   <div class="row">
      <div class="col-lg-9">
         <!-- Üst Başlık Ve Yönlendirme Butonları -->
         <h1 class="baslik page-title text-dark"><?php echo $kayit['baslik']; ?></h1>
         <span class="yazar badge badge-dark"><?php echo $yazar; ?></span>
         <?php 
            $timestamp = strtotime($kayit['eklenme_tarihi']); 
            $tarih = Arac::TurkceTarih(date('d F Y - H:i', $timestamp));
         ?>
         <span class="eklenme-tarihi badge badge-dark"><?php echo $tarih; ?></span>
         <a href="icerik-duzenle.php?id=<?php echo $kayit['id']; ?>" class="duzenle badge badge-dark">Düzenle</a>

         <!--
         <a href="icerik-listele.php" class="btn btn-info _float-right">İçerik Listesi</a>         
         <a href="icerik-ekle.php" class="btn btn-dark float-right">İçerik Ekle</a>
         -->

         <!-- id Bilgisi -->
         <input type="hidden" name="id" value="<?php echo $kayit['id']; ?>">

         <!-- İçerik Alanı -->
         <div class="form-group">

            <!-- Ana İçerik -->
            <div class="icerik mt-2"><?php echo $kayit['icerik_html']; ?></div>

            <!-- Etiket -->
            <div class="kategori-ve-etiketler">
               <form action="etiket.php" method="get">
                  <!-- Konu etiketlerini html tag ile sar. -->
                  <div class="alert alert-dark"><strong>Kategori - Etiketler</strong></div>
                  <p>
                     <span class="konu-kategori"><?php echo HTMLYapi::KategoriOlusturBaglanti($kayit['kategori']); ?></span>
                     <span class="konu-etiket"><?php echo HTMLYapi::EtiketOlusturBaglanti($kayit['etiket']); ?></span>
                  </p>
               </form>
            </div>
         </div>         
      </div>
     <div class="col-lg-3">
         <p><?php require_once('kalip/etiket-listele-sidebar.php'); ?></p>
         <p><?php require_once('kalip/kategori-listele-sidebar.php') ?></p>
     </div>
   </div>
</div>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>