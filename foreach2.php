<?php
	$products[] = ['name' => 'Tov1',  'price' => 1000];
	$products[] = ['name' => 'Tov2',  'price' => 2000];
	$products[] = ['name' => 'Tov3',  'price' => 3000];

	foreach($products as $product){
	if($product['price'] > 1000)
		echo $product['name']. '<br>';
}
