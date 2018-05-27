<?php

require("baglan.php");

	$sorgu = $db->prepare("SELECT * FROM veri2 WHERE id=:id");
	$sorgu->execute([
		'id' => $_GET['id']
	]);
	$islem=$sorgu->fetch(PDO::FETCH_ASSOC);
	if(!empty($_POST['submit'])){
		
		$query = $db->prepare("UPDATE veri2 SET ad = :ad , date=:date ,sayi=:sayi , boolen=:boolen WHERE id = :id");
		$islem2 =$query->execute([
		'ad' => $_POST['ad'],
		'date' => $_POST['date'],
		'sayi' => $_POST['sayi'],
		'boolen' => $_POST['boolen'],
		'id' => $_GET['id']
	]);
	if($islem2){
		echo "Veriler eklendi";
		header( "refresh:5;url=duzenleme.php?id=".$_GET['id'] ); 
	}
		else{
			echo "Bir sorun meydana geldi";
		}
	}

?>
<form method="post">
<label>Ad giriniz</label></br>
<input type="text" name="ad" value="<?=$islem['ad']?>"></br>
<label>Tarih giriniz 2017-01-01 Şeklinde</label></br>
<input type="date" name="date" value="<?=$islem['date']?>"></br>
<label>Sayı Giriniz</label></br>
<input type="number" name="sayi" value="<?=$islem['sayi']?>"></br>
<label>Boolen 1 veya 0 girin</label></br>
<input type="text" name="boolen" value="<?=$islem['boolen']?>"></br>
<label>Şifre Giriniz</label></br>
<input type="password" name="sifre" value="<?=$islem['sifre']?>" disabled></br>
<input type="hidden" value="1" name="submit">
<input type="submit" value="duzenle">
</form>