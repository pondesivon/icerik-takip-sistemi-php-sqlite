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

<div class="container min-vh-100">
   <div class="row">
      <div class="col-lg-9">
         <!-- Üst Başlık Ve Yönlendirme Butonları -->
         <h1 class="page-title text-dark">
            <?php echo $kayit['baslik']; ?>
            <a href="icerik-duzenle.php?id=<?php echo $kayit['id']; ?>" class="btn btn-dark float-right">Düzenle</a>
         </h1>
         <!--
         <a href="icerik-listele.php" class="btn btn-info _float-right">İçerik Listesi</a>         
         <a href="icerik-ekle.php" class="btn btn-dark float-right">İçerik Ekle</a>
         -->


<?php $deger = "document.getElementById('kelime').value = window.getSelection(); document.getElementById('kelime-ara').click();"; ?>
<?php 
    $kelime = strtolower(trim($_GET['kelime']));
    $sql2 ="SELECT * FROM kelimeler WHERE kelime='$kelime'";
    $kelime_sonuc = $sozdb->query($sql2);
    $kelime_liste = $kelime_sonuc->fetchArray(SQLITE3_ASSOC);
?>

      <div style="overflow-y: scroll; height:400px;" class="icerik" id="icerik" onmouseup="<?php echo $deger; ?>"><?php echo $kayit['icerik_html']; ?></div>
<form>
  <div class="row">
    <div class="col-lg-9">
    </div>
    <div class="col-lg-3 sticky">
    </div>
  </div>
</form>
            <p><form class="form-group" action="icerik-goruntule2.php" method="">
            </form></p>
            
         </div>
         <div class="col-lg-3 float-left">
            <form>
               <input class="form-control" type="hidden" name="id" value="<?php echo $kayit['id']; ?>">
               <input class="form-control" type="text" id="kelime" name="kelime" value="<?php echo $kelime; ?>">
               <textarea class="form-control" id="anlam" rows="10"><?php echo $kelime_liste['anlam']; ?></textarea>
               <input class="form-control" type="submit" id="kelime-ara" value="Ara">               
            </form>            
         </div>
      </div>
   </div>
</div>


<script>
        function loadData() {
            $.ajax({
                type: 'GET',
                url: 'getUsers.php',
                dataType: 'json',
                success: function(data) {
                    var tableHtml = '';
                    $.each(data, function(index, user) {
                        tableHtml += '<tr><td>' + user.id + '</td>'
                                    +'<td>' + user.name + '</td>'
                                    +'<td>' + user.email + '</td>'
                                    +'<td>' + user.phone + '</td>'
                                    +'<td><button class="updateUserButton" data-id="' + user.id + '">Update</button><button class="deleteUserButton" data-id="' + user.id + '">Delete</button></td></tr>';
                    });
                    $('#icerik').html(tableHtml);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error getting users: ' + errorThrown);
                }
            });
        }
</script>


<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>