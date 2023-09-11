<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
   $title = "Bağlantı Oluşturucu" . $kisaltma;
   require_once('header.php');
?>

<div class="container-fluid min-vh-100">
   <div class="row">
      <div class="col">
         <h1 class="page-title text-dark"><?php echo $title; ?></h1>         
      </div>
   </div>
   <div class="row">
      <div class="col-lg-6">
         <textarea class="form-control text-monospace bg-gri textarea-fokus" id="baglanti-liste" name="baglanti-liste" placeholder="Bağlantıları alt alta listeleyin." rows="10" onmouseenter="this.select();"></textarea>
      </div>
      <div class="col-lg-6">
      <p>      
         <textarea class="form-control text-monospace bg-gri textarea-fokus" id="sonuc" name="sonuc" placeholder="Sonuç alanı." rows="10" onmouseenter="this.select();"></textarea>
      </p>
      <p><input type="button" id="sonuc" value="Yararlanılan Kaynaklar" onclick="document.getElementById('sonuc').value = yararlanilanKaynaklarBaglantiOlustur(document.getElementById('baglanti-liste').value);"></p>
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