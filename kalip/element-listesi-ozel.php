<!-- İçerik Yapıları -->
<?php 
	$dizi = array(
		'Standart' => '&lt;p class=&quot;lead&quot;&gt;&lt;/p&gt;\n&lt;!-- bol --&gt;\n&lt;div class=&quot;alert alert-dark&quot;&gt;&lt;strong&gt;Kod&lt;/strong&gt;&lt;/div&gt;\n',
		'Bölüm' => '&lt;div class=&quot;alert alert-dark&quot;&gt;&lt;strong&gt;&lt;\/strong&gt;&lt;\/div&gt;\n',
		'Kod' => '&lt;div class=&quot;alert alert-dark&quot;&gt;&lt;strong&gt;Kod&lt;\/strong&gt;&lt;\/div&gt;\n',
		'Kod (Açıklamalı)' => '&lt;div class=&quot;alert alert-dark&quot;&gt;&lt;strong&gt;Kod (Açıklamalı)&lt;\/strong&gt;&lt;\/div&gt;\n',
		'Not' => '&lt;div class=&quot;alert alert-dark&quot;&gt;&lt;strong&gt;Not&lt;\/strong&gt;&lt;\/div&gt;\n',
		'Alt Başlık' => '&lt;p class=&quot;text-danger&quot;&gt;&lt;strong&gt;&lt;\/strong&gt;&lt;\/p&gt;\n',
		'Alt Bölüm' => '&lt;p class=&quot;mb-2 pb-1 text-danger border-danger border-bottom border-2&quot;&gt;&lt;strong&gt;&lt;\/strong&gt;&lt;\/p&gt;\n',
		'hr Bölüm' => '\n&lt;hr class=&quot;bolum&quot;&gt;\n\n',
		'Böl' => '&lt;!-- bol --&gt;\n',
		'Ekran Görüntüsü' => '<div class=&quot;alert alert-dark&quot;><strong>Ekran Görüntüsü</strong></div>\n<p><a href=&quot;yukleme/&quot;><img class=&quot;img-fluid d-block&quot; src=&quot;yukleme/&quot; alt=&quot;&quot;></a><p>\n\n',
		'Veri' => '&lt;div class=&quot;alert alert-dark&quot;&gt;&lt;strong&gt;Veri&lt;/strong&gt;&lt;/div&gt;\n&lt;p&gt;Konu ile ilgili örnek bir veri setine aşağıdaki bağlantıdan ulaşabilirsiniz.&lt;/p&gt;\n&lt;p&gt;&lt;a class=&quot;btn btn-outline-dark btn-sm&quot; target=&quot;_blank&quot; href=&quot;yukleme/&quot; rel=&quot;noopener&quot;&gt;&lt;/a&gt;&lt;/p&gt;\n\n',
		'İndirme Bağlantısı' => '&lt;div class=&quot;alert alert-dark&quot;&gt;&lt;strong&gt;İndirme Bağlantısı&lt;/strong&gt;&lt;/div&gt;\n&lt;p&gt;Konu ile ilgili örnek dosyayı bu bağlantıdan indirebilirsiniz.&lt;/p&gt;\n&lt;p&gt;&lt;a class=&quot;btn btn-danger pl-5 pr-5 text-decoration-none fw-bold&quot; target=&quot;_blank&quot; href=&quot;yukleme/&quot; rel=&quot;noopener&quot;&gt;İndir&lt;/a&gt;&lt;/p&gt;',
		'Yararlanılan Kaynaklar' => '&lt;div class=&quot;alert alert-dark&quot;&gt;&lt;strong&gt;Yararlanılan Kaynaklar&lt;/strong&gt;&lt;/div&gt;\n&lt;div class=&quot;yararlanilan-kaynaklar list-group mb-3&quot;&gt;\n	&lt;a href=&quot;&quot; rel=&quot;nofollow noopener&quot; target=&quot;_blank&quot; class=&quot;list-group-item bg-light text-secondary cursor-pointer&quot;&gt;&lt;/a&gt;\n	&lt;a href=&quot;&quot; rel=&quot;nofollow noopener&quot; target=&quot;_blank&quot; class=&quot;list-group-item bg-light text-secondary cursor-pointer&quot;&gt;&lt;/a&gt;\n	&lt;a href=&quot;&quot; rel=&quot;nofollow noopener&quot; target=&quot;_blank&quot; class=&quot;list-group-item bg-light text-secondary cursor-pointer&quot;&gt;&lt;/a&gt;\n&lt;/div&gt;'
	);

	foreach ($dizi as $key => $value) {
		echo '<span class="badge badge-secondary cursor-pointer" 
		onclick="metinKopyala(\'' . $value . '\')">' . $key . '</span> ';
	}
?>

<br><!-- prism.js Yapıları -->
<?php 
	$dizi = array(
		'visual basic'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-vb&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'excel formula'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-excel-formula&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'csharp'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-csharp&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'php'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-php&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'html'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'css'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-css&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'javascript'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'plain text'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-plain-text&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'regexp'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-regexp&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'genel'=>'&lt;p&gt;&lt;pre&gt;&lt;code class=&quot;language-&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;', 
		'genel (mark)'=>'&lt;p&gt;&lt;pre data-line=&quot;&quot;&gt;&lt;code class=&quot;language-&quot;&gt;\n\n&lt;\/code&gt;&lt;\/pre&gt;&lt;\/p&gt;'
	);

	foreach ($dizi as $key => $value) {
		echo '<span class="badge badge-secondary cursor-pointer" 
		onclick="metinKopyala(\'' . $value . '\')">' . $key . '</span> ';
	}
?>

<!-- Düzenleme Yapıları -->
<?php 
	$dizi = array(
		'Trim Yap' => 'trimYap();',
		'Sade İçeriği Al' => 'sadeIcerigiAl();document.getElementById(\'icerik-sade-tab-baslik\').click();',
		'lt-gt Dönüştür (sade)' => 'ltgtDonustur();'
	);

	foreach ($dizi as $key => $value) {
		echo '<span class="badge badge-secondary cursor-pointer" 
		onclick="' . $value . '">' . $key . '</span> ';
	}
?>