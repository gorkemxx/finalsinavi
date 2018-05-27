<?php

require("baglan.php");
if(!isset($_POST['Gönder'])){
	
	$sorgu = $db->prepare("INSERT INTO veri2 SET ad=:ad , date=:date ,sayi=:sayi , boolen=:boolen ,sifre=:sifre");
	$islem=$sorgu->execute([
		'ad' => $_POST['ad'],
		'date' => $_POST['date'],
		'sayi' => $_POST['sayi'],
		'boolen' => $_POST['boolen'],
		'sifre' => md5($_POST['sifre'])
	]);
	if($islem){
		echo "Veriler eklendi";
	}
else{
	echo "Bir sorun meydana geldi";
}
}
?>
<a href="siralama.php">Sıralamya Git</a>
<form method="post">
<label>Ad giriniz</label></br>
<input type="text" name="ad"></br>
<label>Tarih giriniz 2017-01-01 Şeklinde</label></br>
<input type="date" name="date"></br>
<label>Sayı Giriniz</label></br>
<input type="number" name="sayi"></br>
<label>Boolen 1 veya 0 girin</label></br>
<input type="text" name="boolen"></br>
<label>Şifre Giriniz</label></br>
<input type="password" name="sifre"></br>
<input type="submit" value="Gönder">
</form>