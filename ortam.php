<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<?php 
    $title = "Ortam Dosyaları" . $kisaltma;
    require_once('header.php');
?>


<div class="container min-vh-100 bg-light">
    <div class="row">
        <div class="col">
            <!-- Üst Başlık Ve Yönlendirme Alanı -->
            <h1 class="page-title text-dark">
                <?php echo $title; ?><a href="index.php" class="btn btn-dark float-right">İçerik Ekle</a>
                <?php //echo HtmlYapi::BirSayfaIleriGit("icerik-listele.php?sayfa=", $sayfa); ?>
                <?php //echo HtmlYapi::BirSayfaGeriGit("icerik-listele.php?sayfa=", $sayfa); ?>
            </h1>            
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-lg-9 mt-3">
        	<!-- Dosya Yükleme Alanı -->
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
			<p class="mb-2 pb-1 text-danger border-danger border-bottom border-2"><strong>Dosya Yükle</strong></p>
	         <form method='post' action='ortam.php' enctype='multipart/form-data'>

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
	        <hr class="bolum">
			<!-- Dosya Dizisi -->
	        <?php
	        	$klasor = "yukleme"; 
	        	$dosyalar = Arac::KlasordekiDosyalariDiziyeAktar($klasor);
	        ?>

			<!-- Dosya Listeleme Alanı -->  	
	        <p class="mb-2 pb-1 text-danger border-danger border-bottom border-2"><strong>Ortam Dosyaları</strong> (<?php echo count($dosyalar); ?> Sonuç)</p>

			<!-- Listeleme İşlemi Başlangıç -->
			<div class="list-group mb-3">
				<?php 
					foreach ($dosyalar as $dosya) {
						print("<a class='list-group-item text-dark' href=\"$klasor/$dosya\">$dosya</a>");
					}
				?>
			</div>
			<!-- Listeleme İşlemi Bitiş -->
        </div>
        <div class="col-lg-3">
            <?php require_once('sidebar.php'); ?>
        </div>
    </div>
</div>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>