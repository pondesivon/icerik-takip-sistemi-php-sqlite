<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
   $title = "Dosya Yükle" . $kisaltma;
   require_once('header.php');
?>

<?php
   if(isset($_POST['submit'])){

        $countfiles = count($_FILES['file']['name']);

        $totalFileUploaded = 0;
        $liste = "<ol>";
        for($i=0; $i<$countfiles; $i++){
             $filename = $_FILES['file']['name'][$i];

             ## Location
             $location = "yukleme/" . $filename;
             $extension = pathinfo($location, PATHINFO_EXTENSION);
             $extension = strtolower($extension);


            if(move_uploaded_file($_FILES['file']['tmp_name'][$i], $location)) {

                  $liste = $liste . "<li>" . $filename . "</li>";
                  $totalFileUploaded++;
            }
        }

        $liste = $liste . "</ol>";


        $toplam = "<hr><p class='text-success'>Yüklenen Toplam Dosya Sayısı: " . $totalFileUploaded . "</p>";
   }
   //https://makitweb.com/multiple-files-upload-at-once-with-php/
?>

<div class="container min-vh-100 bg-light">
   <div class="row">
      <div class="col-lg-9">
         <h1 class="page-title text-dark">Dosya Yükle</h1>
         <form method='post' action='dosya-yukle.php' enctype='multipart/form-data'>

           <div class="form-group">
              <div class="row">
                <div class="col">
                 <input type="file" name="file[]" class="form-control form-control-file" id="file" multiple>
                </div>
                <div class="col">
                 <input type='submit' class="form-control bg-gri" name='submit' value='Seçilen Dosyaları Yükle'>
                </div>
              </div>
             
              <?php
                if(isset($_POST['submit'])){
                    echo "<p>" . $liste . "</p>";
                    echo "<p>" . $toplam . "</p>";
                }
              ?>

           </div>
         </form>
      </div>
     <div class="col-lg-3">
         <p><?php require_once('kalip/etiket-listele-sidebar.php'); ?></p>
         <p><?php require_once('kalip/kategori-listele-sidebar.php') ?></p>
     </div>
   </div>
</div>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>