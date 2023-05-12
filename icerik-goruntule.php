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
      <div class="col">
         <!-- Üst Başlık -->
         <a href="icerik-duzenle.php?id=<?php echo $kayit['id']; ?>" class="_duzenle">
            <h1 class="baslik page-title text-dark">
               <?php echo $kayit['baslik']; ?>
            </h1>
         </a>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-9">
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

            <!-- Bilgiler -->
            <span class="yazar badge badge-dark"></span>
            <?php 
               $timestamp = strtotime($kayit['eklenme_tarihi']); 
               $tarih = Arac::TurkceTarih(date('d F Y - H:i', $timestamp));
            ?>
            <div class="alert alert-dark"><strong>İçerik Bilgileri</strong></div>
            <table class="table table-bordered bg-acik-gri">
               <tr>
                  <td><strong>Kategori</strong></td>
                  <td><?php echo HTMLYapi::KategoriOlusturBaglanti($kayit['kategori']); ?></td>
               </tr>
               <tr>
                  <td><strong>Etiketler</strong></td>
                  <td><?php echo HTMLYapi::EtiketOlusturBaglanti($kayit['etiket']); ?></td>
               </tr>
               <tr>
                  <td><strong>Eklenme Tarihi</strong></td>
                  <td><?php echo $tarih; ?></td>
               </tr>
               <tr>
                  <td><strong>Yazar</strong></td>
                  <td><?php echo $yazar; ?></td>
               </tr>
               <tr>
                  <td><strong>İşlemler</strong></td>
                  <td><?php include 'kalip/islemler.php'; ?></td>
               </tr>
            </table>
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