<div class="alert alert-secondary">

<!-- Genel Etiketler -->
<?php 
	$dizi = array(
		'p' => '&lt;p&gt;&lt;/p&gt;',
		'span' => '&lt;span&gt;&lt;/span&gt;',
		'strong' => '&lt;strong&gt;&lt;/strong&gt;',
		'div' => '&lt;div&gt;&lt;/div&gt;',
		'pre' => '&lt;pre&gt;&lt;/pre&gt;',
		'code' => '&lt;code&gt;&lt;/code&gt;',
		'br' => '&lt;br&gt;',
		'hr' => '&lt;hr&gt;',
		'img' => '&lt;img src=&quot;&quot; alt=&quot;&quot; \/&gt;',
		'comment' => '&lt;!--  --&gt;',
		'a' => '&lt;a href=&quot;&quot;&gt;&lt;\/a&gt;',
		'kbd' => '&lt;kbd&gt;&lt;/kbd&gt;',
		'ul' => '&lt;ul&gt;\n\t\n&lt;/ul&gt;',
		'ol' => '&lt;ol&gt;\n\t\n&lt;/ol&gt;',
		'li' => '&lt;li&gt;&lt;/li&gt;',
		'table' => '&lt;table&gt;&lt;/table&gt;',
		'thead' => '&lt;thead&gt;&lt;/thead&gt;',
		'tbody' => '&lt;tbody&gt;&lt;/tbody&gt;',
		'th' => '&lt;th&gt;&lt;/th&gt;',
		'tr' => '&lt;tr&gt;&lt;/tr&gt;',
		'td' => '&lt;td&gt;&lt;/td&gt;',
		'lt' => '&amp;lt;',
		'gt' => '&amp;gt;',
		'quot' => '&amp;quot;',
		'amp' => '&amp;amp;',
		'//--' => '//--------------------------------------------------',
		'\'--' => '\'--------------------------------------------------',
		'ol&gt;li*5' => '&lt;ol&gt;\n\t&lt;li&gt;&lt;/li&gt;\n\t&lt;li&gt;&lt;/li&gt;\n\t&lt;li&gt;&lt;/li&gt;\n\t&lt;li&gt;&lt;/li&gt;\n\t&lt;li&gt;&lt;/li&gt;\n&lt;/ol&gt;',
		'ul&gt;li*5' => '&lt;ul&gt;\n\t&lt;li&gt;&lt;/li&gt;\n\t&lt;li&gt;&lt;/li&gt;\n\t&lt;li&gt;&lt;/li&gt;\n\t&lt;li&gt;&lt;/li&gt;\n\t&lt;li&gt;&lt;/li&gt;\n&lt;/ul&gt;'
	);

	foreach ($dizi as $key => $value) {
		echo '<span class="badge badge-secondary cursor-pointer" 
		onclick="metinKopyala(&quot;' . $value . '&quot;)">' . $key . '</span> ';
	}
?>