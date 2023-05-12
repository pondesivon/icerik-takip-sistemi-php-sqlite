<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
   $title = "Emmet" . $kisaltma;
   require_once('header.php');
?>

<div class="container-fluid">
   <div class="row">
      <div class="col">
         <h1 class="page-title text-dark"><?php echo  $title; ?></h1>
         <textarea class="form-control text-monospace bg-gri textarea-fokus" id="emmet" name="emmet" placeholder="emmet.js kütüphanesi aracılığıyla hızlıca html etiketleri üretmeye yarayan bir araçtır." rows="30"></textarea>
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