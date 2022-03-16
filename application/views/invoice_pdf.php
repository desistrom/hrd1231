<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
	<h1><?=$row[0]['nama_client']?></h1>
	<h3><?=$row[0]['surname_client']?></h3>
	<table>
		<tr>
			<td>Nama Item</td>
			<td>Nama Kuantitas</td>
			<td>Nama Harga</td>
			<td>Nama Diskon</td>
			<td>Nama Deskripsi</td>
			<td>Nama Grup</td>
		</tr>
		<?php
          $decode = json_decode($row[0]['item']);
          foreach ($decode as $key => $value) {
          if(isset($value->item)){
        ?>
          <tr>
          	<td><?=$value->item?></td>
          	<td><?=$value->kuantitas?></td>
          	<td><?=$value->harga?></td>
          	<td><?=$value->diskon?></td>
          	<td><?=$value->deskripsi?></td>
          	<td><?=$value->grup?></td>
          </tr>
        <?php } } ?>
		
	</table>
	<?php
      $decode2 = json_decode($row[0]['item']);
        foreach ($decode2 as $key => $value2) {
          if(isset($value2->item)){
            if ($value2->kuantitas == '') {
              $value2->kuantitas = 0;
            }
            $subharga[] = ($value2->harga * $value2->kuantitas) - ($value2->harga * $value2->diskon / 100);
          }
          else{
            $subharga[] = 0;
          }
        }
        $arrayharga = array_sum($subharga);
        $pajakppn = $arrayharga * 10/100;
        $totalharga = $arrayharga + $pajakppn;
    ?>
    Sub Total : <?=$arrayharga?><br>
    Pajak Kuotasi : <?=$pajakppn?><br>
    Total : <?=$totalharga?>
</body>
</html>