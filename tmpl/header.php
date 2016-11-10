<body onload="auto()">
<div class="wrapper"><div class="mainheader"><div class="defheader"><a class="short_cart1" onclick="this.className = (this.className == 'short_cart1' ? 'active-short_cart1' : 'short_cart1')" href="/index.php?category=pizza"><b class="menu1">МЕНЮ</b></a><b><a class="short_cart" onclick="this.className = (this.className == 'short_cart' ? 'active-short_cart' : 'short_cart')"><div class="rect"><?=$_SESSION['all_count'];?></div></a></b><div class="panel">
<?if(isset($text[0]) || isset($_SESSION['made_someone'])):?>
   <?if(isset($_SESSION['UA']) || !isset($_SESSION['RU']) && !isset($_SESSION['EN'])){?>
	<table><th>Зображення:</th><th>Назва товару:</th><th>Ціна:</th><th>Розмір:</th><th>Кількість:</th>
   <?}?>	
   <?if(isset($_SESSION['EN'])){?>
	<table><th>Image:</th><th>Things name:</th><th>Price:</th><th>Size:</th><th>Count:</th>
   <?}?>	
   <?if(isset($_SESSION['RU'])){?>
	<table><th>Изображение:</th><th>Название товара:</th><th>Цена:</th><th>Размер:</th><th>Количество:</th>
   <?}?>	
   <?if(isset($_SESSION['made_someone'])){?>
	<tr><td><img src="<?=$_SESSION['made_img'];?>"/></td><td><div class="titles"><?=$_SESSION['made_title'];?></div></td><td><div class="titles"><?=$_SESSION['pr_someone'];?></div></td><td>2</td><td><form method="POST"><input class="how_m" type="text" name="count" size="1" placeholder="<?=$_SESSION['ps'];?>"><input class="how_m_btn" type="submit" name="sub" value=""></form></td><td><?if(!isset($_GET['nav_id'])):?><a class="delete_cart" href="?delete=<?=255;?>">+</a><?endif;?></tr>
	<?}?><?
	//$counts = array();
	//$titles = array();

//$count_str = implode($counts,",");
//$title_str = implode($titles,",");?>
	<?for($i = 0;$i<count($text[0]);$i++){?>
	<?//$text[1][$i+1][0] = $text[1][]?>
	<?//print_r($text);?>
	<?//print_r($_SESSION);?>	
	<?if(isset($_GET['nav_id'])):?><a href="?nav_id=<?=$_GET['nav_id'];?>&delete=<?=$_SESSION['clock'.$text[0][$i][0]['id']];?>">+</a><?endif;?></td></tr>
	<?if(!isset($_SESSION['counter'.$text[0][$i][0]['id']]) && !isset($_POST['boom'])){$_SESSION['counter'.$text[0][$i][0]['id']] = 1;}
	if(isset($_POST['sub'.$text[0][$i][0]['id']])){echo '123';?>
<?$_SESSION['counter'.$text[0][$i][0]['id']] = $_POST['count'.$text[0][$i][0]['id']];
$_SESSION['sub'.$i] = $_POST['sub'.$text[0][$i][0]['id']];
//$counts = $_POST['count'.$text[1][$i][0]['id']];
//$_SESSION['count_themes'] = implode($counts,",");
$text[0][$i][0]['price'] = $text[0][$i][0]['price'] * $_POST['count'.$text[0][$i][0]['id']];
$_SESSION['price'.$text[0][$i][0]['id']] = $text[0][$i][0]['price'];

	//}

?>

<?}
$counts[] = $_SESSION['counter'.$text[0][$i][0]['id']];
//print_r($counts);
$all_count += $counts[$i];
$_SESSION['all_count'] = $all_count;
$titles[] = $text[0][$i][0]['title_ua'];
if(isset($_SESSION['made_someone']) && isset($_SESSION['name'])){
	$counts[count($counts)] = $_SESSION['ps'];
	$titles[count($titles)] = $_SESSION['made_title'];
}

$count_str = implode($counts,",");
$title_str = implode($titles,",");

$_SESSION['pri'] = $price;
$_SESSION['name'] = $title_str;
$_SESSION['counts'] = $count_str;

//$_SESSION['count'] = $count_str;
echo $count_str;
if($_SESSION['price'.$text[0][$i][0]['id']] != NULL){
$text[0][$i][0]['price'] = $_SESSION['price'.$text[0][$i][0]['id']];}?>
	<?if(isset($_SESSION['UA']) || !isset($_SESSION['RU']) && !isset($_SESSION['EN'])){?>
	<?if(isset($text[0])){?>
	<tr><td><img src="<?=$text[0][$i][0]['image_cart'];?>"/></td><td><div class="titles"><div id="name-data"></div><?=$_POST['number'];?><?=$text[0][$i][0]['title_ua'];?></div></td><td><div class="titles"><?=$text[0][$i][0]['price'];?></div></td><td class="size_in"><?=$text[0][$i][0]['size_ua'];?></td><td><form method="POST"><input class="how_m" type="text" name="count<?=$text[0][$i][0]['id'];?>" size="1" placeholder="<?=$_SESSION['counter'.$text[0][$i][0]['id']];?>"><input class="how_m_btn" type="submit" name="sub<?=$text[0][$i][0]['id'];?>" value=""></form></td><td><?if(!isset($_GET['nav_id'])):?><a class="delete_cart" href="?delete=<?=$_SESSION['clock'.$text[0][$i][0]['id']];?>">+</a><?endif;?>
    <?}?>

	<?}if(isset($_SESSION['EN'])){?>
		<tr><td><img src="<?=$text[0][$i][0]['image_cart'];?>"/></td><td><div class="titles"><div id="name-data"></div><?=$_POST['number'];?><?=$text[0][$i][0]['title_en'];?></div></td><td><div class="titles"><?=$text[0][$i][0]['price'];?></div></td><td class="size_in"><?=$text[0][$i][0]['size_en'];?></td><td><form method="POST"><input class="how_m" type="text" name="count<?=$text[0][$i][0]['id'];?>" size="1" placeholder="<?=$_SESSION['counter'.$text[0][$i][0]['id']];?>"><input type="submit" name="sub<?=$text[0][$i][0]['id'];?>" value=""></form></td><td><?if(!isset($_GET['nav_id'])):?><a class="delete_cart" href="?delete=<?=$_SESSION['clock'.$text[0][$i][0]['id']];?>">+</a><?endif;?>
	<?}if(isset($_SESSION['RU'])){?>
		<tr><td><img src="<?=$text[0][$i][0]['image_cart'];?>"/></td><td><div class="titles"><div id="name-data"></div><?=$_POST['number'];?><?=$text[0][$i][0]['title_ru'];?></div></td><td><div class="titles"><?=$text[0][$i][0]['price'];?></div></td><td class="size_in"><?=$text[0][$i][0]['size_ru'];?></td><td><form method="POST"><input class="how_m" type="text" name="count<?=$text[0][$i][0]['id'];?>" size="1" placeholder="<?=$_SESSION['counter'.$text[0][$i][0]['id']];?>"><input type="submit" name="sub<?=$text[0][$i][0]['id'];?>" value=""></form></td><td><?if(!isset($_GET['nav_id'])):?><a class="delete_cart" href="?delete=<?=$_SESSION['clock'.$text[0][$i][0]['id']];?>">+</a><?endif;?>
	<?}?>
	<br/>
	
<?
if(isset($_POST['sub'.$text[0][$i][0]['id']])){
	//$_SESSION['how'.$text[0][$i][0]['id']] = $_POST['count'.$text[0][$i][0]['id']];
}
?>	
	<?php
$count = 1;
//echo count($text[1]);
//for($i = 0;$i<count($text[1]);$i++){
	//echo "123";
	//$count = array();
if(isset($_POST['sub'.$i]) && !isset($_POST['boom'])){
	//$count[$i] = $_POST['count'.$i];
	$_SESSION['count'.$i] = $count[$i];
//	$count[$i] = $_SESSION['count'.$i];
	//$j = $i - 1;
	$_SESSION['count'.$i] = $_SESSION['counter'.$i];
}//}
//print_r($_SESSION);
$price += $text[0][$i][0]['price'];
$_SESSION['price_short_cart'] = $price * $count;

	//if($_SESSION['counter'.$i] != NULL){
//echo $_SESSION['price_short_cart'];
echo $text[0][$i][0]['id'];
//print_r($text[1]);
?><?}?>
	<?endif;?>
	<?
	if(isset($_SESSION['made_someone']) && !isset($_SESSION['name'])){
	$count_str = $_SESSION['ps'];
	$title_str = $_SESSION['made_title'];
}
$_SESSION['name'] = $title_str;
$_GET['counts'] = $count_str;
	$price = $price + $_SESSION['pr_someone'];
	$_SESSION['price_short_cart'] = $price;?>
	<?if(!isset($text[0]) && !isset($_SESSION['made_someone'])){?>
	<?
	echo "Ваша корзина порожня!!!";
	}?>
	</table>
	<hr />
	<a class="in_cart" href="/index.php?in_cart">Також в кошику</a>
	<a class="delete_from_cart" href="/index.php?delete_from_cart">Очистити кошик</a>
	<form method="get">
	<input type="checkbox" name="plus" value="Value">Value
	<input type="checkbox" name="plus" value="Value1">Value1
	<input type="checkbox" name="plus" value="Value2">Value2
<div class="cart_price"><?=$price;?></div>	
<a href="/index.php?sail"><input id="cart_btn" type="submit" name="sail" value="ЗАМОВИТИ"></a>
</form>
</div>
<?if(isset($_GET['category'])){?>
<div class="head"><div class="logo"></div><div id="languages"><a class="lan" href="/index.php?category=<?=$_GET['category'];?>&EN"><b class="language">EN</b></a><a class="lan" href="/index.php?category=<?=$_GET['category'];?>&UA"><b class="language">UA</b></a><a class="lan" href="/index.php?category=<?=$_GET['category'];?>&RU"><b class="language">RU</b></a></div></div></div><div class="jump_cart"></div></div>
<?}?>
<?if(!isset($_GET['category'])){?>
<div class="head"><div class="logo"></div><div id="languages"><a class="lan" href="/index.php?EN"><b class="language">EN</b></a><a class="lan" href="/index.php?UA"><b class="language">UA</b></a><a class="lan" href="/index.php?RU"><b class="language">RU</b></a></div></div></div><div class="jump_cart"></div></div>
<?}?>
<div class="underline_header"></div><?=$price;?>