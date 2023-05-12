<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
   $title = "İçerik Ekle" . $kisaltma;
   require_once('header.php');
?>

<div class="container-fluid">
   <div class="row">
      <div class="col">
         <!-- Form Alanı Başlangıç -->
         <form action="icerik-kaydet.php" method="post">
            <!-- Üst Başlık -->
            <h1 class="page-title text-dark">
               <?php echo $title; ?>
               <!-- <button type="submit" class="btn btn-dark float-right">Kaydet</button> -->
            </h1>

            <div class="row">
               <div class="col-lg-9">
                  <!-- İçerik Başlığı -->
                  <div class="form-group">
                     <!-- Başlık -->
                     <input id="baslik" type="text" class="form-control text-monospace bg-gri mb-1" placeholder="Başlık" name="baslik" onblur="baglantiMetniniYazdir();">

                     <!-- Baglanti -->
                     <input id="baglanti" type="text" class="form-control bg-gri textarea-fokus mb-1" name="baglanti" placeholder="Bağlantı">
                  </div>
                  
                  <!-- İçerik Tab Alanı -->
                  <ul class="nav nav-tabs bg-gri" id="myTab" role="tablist">
                    <li class="nav-item bg-gri">
                      <a class="nav-link active" id="icerik-html-tab-baslik" data-toggle="tab" href="#icerik-html-tab-alan" role="tab" aria-controls="icerik-html-tab-baslik" aria-selected="true">İçerik (HTML)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link bg-gri" id="icerik-sade-tab-baslik" data-toggle="tab" href="#icerik-sade-tab-alan" role="tab" aria-controls="icerik-sade-tab-baslik" aria-selected="false">İçerik (Sade)</a>
                    </li>
                  </ul>
                  <div class="tab-content bg-gri" id="myTabContent">
                    <div class="tab-pane fade show active" id="icerik-html-tab-alan" role="tabpanel" aria-labelledby="icerik-html-tab-icerik">
                     <!-- İçerik HTML -->
                     <div class="form-group">
                        <textarea class="form-control text-monospace bg-gri textarea-fokus" name="icerik-html" placeholder="İçerik (HTML)" id="icerik-html" rows="30"></textarea>
                     </div>
                    </div>
                    <div class="tab-pane fade" id="icerik-sade-tab-alan" role="tabpanel" aria-labelledby="icerik-sade-tab-icerik">
                     <!-- İçerik Sade -->
                     <div class="form-group">
                        <textarea class="form-control text-monospace bg-gri textarea-fokus" name="icerik-sade" placeholder="İçerik (Sade)" id="icerik-sade" rows="30" onmousemove="ltgtDonustur('icerik-sade', true);"></textarea>
                     </div>                 
                    </div>
                  </div>                  
               </div>
               <div class="col-lg-3">
                  <!-- Kaydetme Butonu Ve Bağlantı -->
                  <div class="btn-group btn-block float-right mb-1" role="group" aria-label="Kayıt Ve Görüntüleme">
                     <button class="btn btn-dark float-right btn-block">Kaydet</button>
                     <a href="#" target="_blank" class="btn btn-warning float-right ml-1">⌖</a>
                  </div>

                  <!-- Kategori -->
                  <input type="text" class="form-control bg-gri mb-1" name="kategori" placeholder="Kategori" value="<?php echo $varsayilan_kategori; ?>">       

                  <!-- Etiket -->
                  <textarea id="hizli-konu-etiket" type="text" class="form-control bg-gri textarea-fokus mb-1" name="etiket" placeholder="Etiketler" rows="6"><?php echo $varsayilan_etiket; ?></textarea>

                  <!-- Etiket Öneri -->
                 <button class="btn btn-secondary btn-block mb-1" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                   Etiket Kopyala
                 </button>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body mb-1 bg-gri">
                      <?php require_once('kalip/hizli-konu-etiket.php'); ?>
                    </div>
                  </div>

                  <!-- İçerik Tür -->
                  <input id="_icerik-tur" type="text" class="form-control bg-gri mb-1 textarea-fokus" name="icerik-tur" placeholder="İçerik Türü" value="<?php echo $varsayilan_icerik_tur; ?>">
                  
                  <!-- Hızlı Menü -->
                  <?php require_once("kalip/element-listesi-standart.php"); ?><br>
                  <?php require_once("kalip/element-listesi-ozel.php"); ?><hr>

                  <?php require_once('kalip/arac-listele-sidebar.php'); ?>
               </div>
            </div>          
         </form>
         <!-- Form Alanı Bitiş -->
      </div>
   </div>

  
</div>

<!-- Emmet Script Başlangıç -->
<script src="js/emmet.min.js"></script>
<script>
   emmet.require('textarea').setup({
   pretty_break: true, // enable formatted line breaks (when inserting 
                       // between opening and closing tag) 
   use_tab: true       // expand abbreviations by Tab key
   });
</script>
<!-- Emmet Script Bitiş -->

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>