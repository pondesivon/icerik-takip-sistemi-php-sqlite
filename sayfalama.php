<?php
	$sayfaBasiIcerik = 20;
	$toplamIcerikSayisi = 1100;

	// Calculate the total number of pages
	$toplamSayfaSayisi = ceil($toplamIcerikSayisi / $sayfaBasiIcerik);

	// Determine the current page number
	$gecerliSayfa = $_GET['sayfa'] ?? 1;

	// Calculate the offset value for your SQL query
	$offset = ($gecerliSayfa - 1) * $sayfaBasiIcerik;