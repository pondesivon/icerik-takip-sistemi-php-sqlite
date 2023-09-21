<?php 
//--------------------------------------------------
//Gerekli dosyaları çağır.
//--------------------------------------------------
require_once('getir.php');

//--------------------------------------------------
//Statik sayfa oluştur.
//--------------------------------------------------
$id = $_GET['id'];
$sql = "SELECT * FROM icerik WHERE id=$id";

$sonuc = $db->query($sql);
$kayit = $sonuc->fetchArray(SQLITE3_ASSOC);

$yeniDosya = "statik\\" . $kayit['baglanti'] . ".html";

$sonucMetin = $statikDosyaKalip1 
	. "<!-- Title Alani Baslangic -->\n"
	. "	<title>" . $kayit['baslik'] . "</title>"
	. "\n	<!-- Title Alani Bitis -->\n\n"
	. $statikDosyaKalip2
	. '<h1 class="mt-3">' . $kayit['baslik'] . '</h1>'
	."<hr class=\"mt-1 mb-1\">"
	. $kayit['icerik_html']
	. '<div class="alert alert-info"><strong>Etiketler: </strong>' . $kayit['etiket'] . '</div>'
	. $statikDosyaKalip3;

	echo '&lt;li class="str"&gt;&lt;a class="bgl" href="icerik/' . $kayit['baglanti'] . ".html" . '"&gt;' . $kayit['baslik'] . '&lt;/a&gt;&lt;/li&gt;';

	$doc = fopen($yeniDosya, "w");
	file_put_contents($yeniDosya, $sonucMetin);
	fclose($doc);
?>