<?php 
//--------------------------------------------------
//Gerekli dosyaları çağır.
//--------------------------------------------------
require_once('getir.php');

//--------------------------------------------------
//Statik dosyaları oluştur.
//--------------------------------------------------
$sql = "SELECT * FROM icerik WHERE icerik_tur = 'icerik'";

$sonuc = $db->query($sql);
$arsivListe = "";
while($kayit = $sonuc->fetchArray(SQLITE3_ASSOC)) {
	$yeniDosya = "statik\\" . $kayit['baglanti'] . ".html";

	$sonucMetin = $statikDosyaKalip1 
		. "<!-- Title Alani Baslangic -->\n"
		. "	<title>" . $kayit['baslik'] . "</title>"
		. "\n	<!-- Title Alani Bitis -->\n\n"
		. $statikDosyaKalip2
		. '<h1 class="mt-3">' . $kayit['baslik'] . '</h1>'
		."<hr class=\"mt-1 mb-1\">"
		. $kayit['icerik_html']
		. "\n\n<div class=\"alert alert-dark\"><strong>Etiketler</strong></div>"
		. HTMLYapi::EtiketOlusturDuz($kayit["etiket"])
		. "<hr>"
		. $statikDosyaKalip3;

	//$arsivListe = $arsivListe . '<li class="str"><a class="bgl" href="icerik/' . $kayit['baglanti'] . ".html" . '">' . $kayit['baslik'] . '</a></li><br>';
	$arsivListe = $arsivListe . '&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class="str"&gt;&lt;a class="bgl" href="icerik/' . $kayit['baglanti'] . ".html" . '"&gt;' . $kayit['baslik'] . '&lt;/a&gt;&lt;/li&gt;' . "<br>";

	$doc = fopen($yeniDosya, "w");
	file_put_contents($yeniDosya, $sonucMetin);
	fclose($doc);
}

echo '&lt;ol id="liste"&gt;<br>' . $arsivListe . "&lt;/ol&gt;";
?>

<!--
<form action="statik.php" method="post">
	<button class="btn btn-primary">Statik Sayfa Oluştur</button>
</form>
-->