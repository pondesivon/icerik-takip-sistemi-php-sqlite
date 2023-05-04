function baglantiMetniOlustur(metin) {
	var tr = ["Ğ", "Ü", "Ş", "İ", "Ö", "Ç", "ı", "ğ", "ü", "ş", "ö", "ç"];
	var en = ["g", "u", "s", "i", "o", "c", "i", "g", "u", "s", "o", "c"];

	var ozelKarakter = [
		"'", "^", "+", "%", "&", "/", "(", ")", "=", "?", 
		"_", "<", ">", "£", "$", "#", "½", "{", "}", "[", 
		"]", "\\", "|", ";", ":", "¨", "~", "\`", "\´", 
		".", ",", " ", "!", "\""];

	var metin = metin.toLocaleLowerCase('tr-TR');
	metin = metin.trim();

	for (var i=0; i<tr.length; i++) {
		metin = metin.replaceAll(tr[i], en[i]);
	}

	for (var j=0; j<ozelKarakter.length; j++) {
		metin = metin.replaceAll(ozelKarakter[j], "-");
	}

	metin = metin.replace(/-+/g, '-');
	metin = metin.trim('-');

	return metin;
}

function karakterTrim (str, chr) {
	if (chr === "]") chr = "\\]";
	if (chr === "^") chr = "\\^";
	if (chr === "\\") chr = "\\\\";

	return str.replace(new RegExp(
		"^[" + chr + "]+|[" + chr + "]+$", "g"), "");

	//https://stackoverflow.com/a/32516190
}

function baglantiMetniniYazdir() {
	var baslik = document.getElementById('baslik');
	var baglanti = document.getElementById('baglanti');
	baglanti.value = karakterTrim(baglantiMetniOlustur(baslik.value), "-");
}


function tabloSatirSaydir() {
	document.getElementById("baslik").innerText = 
	"Başlık (" + parseInt(document.getElementsByTagName("tr").length - 1) + ")";
}

function ltgtDonustur(donusum=true) {
	if (donusum == true) {
		var str = document.getElementById("lt-gt-donusturucu").value; 
		var n = str.replace("&lt;", "<").replace("&gt;",">");
		document.getElementById("lt-gt-donusturucu").value = n;
		//https://stackoverflow.com/a/18387865
	} else {
		var str = document.getElementById("lt-gt-donusturucu").value;
		var n = str.replace("<", "&lt;").replace(">","&gt;");
		document.getElementById("lt-gt-donusturucu").value = n;
		//https://stackoverflow.com/a/18387865
	}
}

function buyukKuDonustur() {
	var str = document.getElementById("icerik-sade").value; 
	var n = str.replace("&lt;", "<").replace("&gt;",">");
	document.getElementById("icerik-sade").value = n;
	//https://stackoverflow.com/a/18387865
}

function trimYap() {
	let icerik = document.getElementById("icerik-html");
	icerik.value = icerik.value.trim();	
}

function sayfaninBasinaGit() {
	window.scrollTo(0, 0);
}

function sayfaninSonunaGit() {
	window.scrollTo(0, document.body.scrollHeight);
}

function sorguMetni(id, metin) {
	document.getElementById(id).innerText = metin;
}

function metinEkle(id, metin) {
	var element = document.getElementById(id);
	var baslangicPoz = element.selectionStart;
	var bitisPoz = element.selectionEnd;

	if (element.selectionStart || element.selectionStart == '0') {


		element.value = element.value.substring(0, baslangicPoz)
			+ metin
			+ element.value.substring(bitisPoz, element.value.length);

		element.focus();
	} else {
		element.vale += metin;
	}

	element.selectionStart = baslangicPoz + metin.length;
	element.selectionEnd = bitisPoz + metin.length;
	//https://stackoverflow.com/a/11077016
}

function sadeIcerigiAl() {

	var baslik = document.getElementById("baslik");
	let icerik = document.getElementById("icerik-html");
	var icerik_sade = document.getElementById("icerik-sade");

	// matches a number, some characters and another number
	var reg1 = /<p><pre><code class\="language\-(\w{1,})">/;
	var reg2 = /<\/code><\/pre><\/p>/;
	var newStr = icerik.value.replace(reg1, "é").replace(reg2, "é");

	icerik_sade.value = newStr.split("é")[1].trim();
	// "Java-Script"
}

//--------------------------------------------------
//sorgu.php tuş ile sorgu çalıştır.
//--------------------------------------------------
function sorguCalistir() {
	var kutu = document.getElementById('s');

	kutu.addEventListener("keydown", function(e) {
	  if(e.ctrlKey && e.keyCode === 13) {
	    event.preventDefault();
	    
	    document.getElementById("calistir").click();
	  }
	});

	kutu.focus();
}

function sorguKutusunaOdaklan() {
	var kutu = document.getElementById('s');
	kutu.selectionStart=kutu.value.length;
	kutu.focus();
}

function kelimeAra() {
	var kutu = document.getElementById('kelime-footer');

	kutu.addEventListener("keydown", function(e) {
	  if(e.keyCode === 13) {
	    event.preventDefault();
	    
	    document.getElementById("kelime-ara-footer").click();
	  }
	});

	kutu.focus();
}

function kelimeAraAjax(kelime, anlam) {
	
	//ad ve soyad değişkenlerine name değeri "ad" ve
	//"soyad" ismine sahip "input" etiketlerinin "value"
	//değerlerini alıyoruz. Sizinde bildiğiniz gibi bizim
	//gireceğimiz isim ve soyisim input etiketinin value
	//kısmı oluyor.
	//kelime = $('input[name="kelime-footer"]').val();
	//anlam = $('input[name="soyad"]').val();
	
	
	//$.get() fonksiyonu çalışıyor. index.html dosyasındaki
	//name değeri "a" olan div etiketinin içine ismi yazdıracak.
	$.get('sozluk.php', 
			{yazi: kelime},
			function (gelen_cevap) { 
				$('input[name="kelime-footer"]').html(kelime);
			}
		 );

		 
	//Yine $.get() fonksiyonu çalışıyor. index.html dosyasındaki
	//name değeri "s" olan div etiketinin içine soyismi yazdıracak.
	 $.get('sozluk.php', 
			{yazi: anlam},
			function (gelen_cevap) { 
				$('input[name="anlam-footer"]').html(anlam);
			}
		 );
}


//--------------------------------------------------
//Statik sayfalardan veri tabanına aktarma süreci
//için işlemleri kolaylaştırmak amacıyla kullanılan
//metot. Başlık ve sade içerik bilgilerini ilgili
//form alanlarına (başlık input elementine 
//tıkladığımızda) dağıtıyor.
//--------------------------------------------------
//function Ata() {
//
//	var baslik = document.getElementById("baslik");
//	let icerik = document.getElementById("icerik-html");
//	var icerik_sade = document.getElementById("icerik-sade");
//
//	var deger = icerik.value.replace("<p class=\"lead\">", "é");
//	
//	var dizi = deger.split('é');
//
//	baslik.value=dizi[0];
//	icerik.value='<p class="lead">' + dizi[1];
//
//
//	// matches a number, some characters and another number
//	var reg1 = /<p><pre><code class\="language\-(\w{1,})">/;
//	var reg2 = /<\/code><\/pre><\/p>/;
//	var newStr = icerik.value.replace(reg1, "é").replace(reg2, "é");
//
//	icerik_sade.value = newStr.split("é")[1].trim();
//	// "Java-Script"
//}