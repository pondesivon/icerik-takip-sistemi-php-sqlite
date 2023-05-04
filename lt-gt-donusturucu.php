<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
   $title = "lt gt Dönüştürücü" . $kisaltma;
   require_once('header.php');
?>

<div class="container">
   <div class="row">
      <div class="col">
         <h1 class="page-title text-dark">lt gt Dönüştürücü</h1>
         <p><textarea class="form-control text-monospace bg-gri textarea-fokus" id="lt-gt-donusturucu" name="lt-gt-donusturucu" placeholder="&lt; ve &gt; karakterlerini içeren bir metinde bu karakterleri &amp;lt; ve &amp;gt; şeklinde dönüştüren bir araçtır." rows="30" onmousemove="ltgtDonustur(false);"></textarea></p>
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