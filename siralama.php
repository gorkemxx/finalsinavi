<?php

require("baglan.php");
	$sorgu = $db->prepare("SELECT * FROM veri2 ORDER BY id");
	$sorgu->execute([]);
	$islem=$sorgu->fetchall(PDO::FETCH_ASSOC);
?>
<table style="width:33%">
  <tr>
    <th>id</th>
    <th>ad</th> 
    <th>date</th>
	<th>sayi</th> 
    <th>boolen</th>
	<th>sifre</th>
	<th>sil</th> 
	<th>düzenle</th> 
  </tr>
 
  <?php
  foreach($islem as $key){
	?>  
 <tr>
    <td><?=$key['id']?></td>
    <td><?=$key['ad']?></td> 
    <td><?=$key['date']?></td>
	<td><?=$key['sayi']?></td>
    <td><?php $bool=$key['boolen'];
	if($bool==1){
		echo "true";
	}else{
		echo "false";
	}
	?></td> 
	<td><?=$key['sifre']?></td>
    <td><button><a href="sil.php?id=<?=$key['id']?>">Sil</a></button></td>
	<td><button><a href="duzenleme.php?id=<?=$key['id']?>">Düzenle</a></button></td>
	<?php   }?>
  </tr>
  <tr>
  </tr>
</table>