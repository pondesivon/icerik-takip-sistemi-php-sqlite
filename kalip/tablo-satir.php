<tr>
	<!-- Sıra -->
	<!-- <td><?php //echo $sira = $sira + 1; ?></td> -->

	<!-- id -->
	<!-- <td><?php //echo $kayit['id']; ?></td> -->

	<!-- Başlık -->
	<td>
		<a class="text-primary" href="icerik-goruntule.php?id=<?php echo $kayit['id']; ?>" class="text text-danger">
		<strong><?php echo $kayit['baslik']; ?></strong>
		</a>
		<br><span class="text-secondary"><?php echo strip_tags(explode("<!-- bol -->", $kayit['icerik_html'])[0]); ?></span>
	</td>

	<!-- İçerik -->
	<!-- <td><?php //echo $kayit['icerik']; ?></td> -->

	<!-- Etiketler -->
	<!-- <td class="text-secondary"><?php //echo $kayit['etiketler']; ?></td> -->

	<!-- Düzenleme Alanı -->
	<td>
		<div class="btn-group duzenleme-alani">
			<?php include 'islemler.php'; ?>
		</div>		
	</td>
</tr>