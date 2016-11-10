<div class="header">
<?if(isset($_SESSION['UA']) || !isset($_SESSION['RU']) && !isset($_SESSION['EN'])){
	$_SESSION['UA'] = 'UA';
	unset($_SESSION['RU']);
	unset($_SESSION['EN']);?>
<div class="bg-header"><b><a class="menu" href="/index.php?category=pizza">Піца</a></b><b><a class="menu" href="/index.php?category=drinks">Напої</b></a><b><a class="menu" href="/index.php?category=applications">Додатки</a></b><b><a class="menu" href="/index.php?category=action">Акція</a></b><b><a class="made_another" href="/index.php?made_someone">Зроби свою піцу</a></b></div>
<div class="bg-header_mobile"><b><a class="menu_mobile" href="/index.php?category=pizza">Піца</a></b><b><a class="menu_mobile" href="/index.php?category=drinks">Напої</b></a><b><a class="menu_mobile" href="/index.php?category=applications">Додатки</a></b><b><a class="menu_mobile" href="/index.php?category=action">Акція</a></b></div>
<?}?>
<?if(isset($_SESSION['EN'])){
	$_SESSION['EN'] = 'EN';
	unset($_SESSION['RU']);
	unset($_SESSION['UA']);?>
<div class="bg-header"><b><a class="menu" href="/index.php?category=pizza">Pizza</a></b><b><a class="menu" href="/index.php?category=drinks">Drinks</b></a><b><a class="menu" href="/index.php?category=applications">Applications</a></b><b><a class="menu" href="/index.php?category=action">Action</a></b><b><a class="made_another" href="/index.php?made_someone">Make your pizza</a></b></div>
<div class="bg-header_mobile"><b><a class="menu_mobile" href="/index.php?category=pizza">Pizza</a></b><b><a class="menu_mobile" href="/index.php?category=drinks">Drinks</b></a><b><a class="menu_mobile" href="/index.php?category=applications">Applications</a></b><b><a class="menu_mobile" href="/index.php?category=action">Action</a></b></div>
<?}?>
<?if(isset($_SESSION['RU'])){
	$_SESSION['RU'] = 'RU';
	unset($_SESSION['UA']);
	unset($_SESSION['EN']);?>
<div class="bg-header"><b><a class="menu" href="main.html#pizza">Пицца</a></b><b><a class="menu" href="/index.php?category=drinks">Напитки</b></a><b><a class="menu" href="/index.php?category=applications">Додатки</a></b><b><a class="menu" href="/index.php?category=action">Акция</a></b><b><a class="made_another" href="/index.php?made_someone">Сделай свою пиццу</a></b></div>
<div class="bg-header_mobile"><b><a class="menu_mobile" href="main.html#pizza">Пицца</a></b><b><a class="menu_mobile" href="/index.php?category=drinks">Напитки</b></a><b><a class="menu_mobile" href="/index.php?category=applications">Додатки</a></b><b><a class="menu_mobile" href="/index.php?category=action">Акция</a></b></div>
<?}?>
</div>
<div class="together_all_thing">
<div class="made_someone"><div class="thing_someone"><div class="thing_img_someone"></div><div class="thing_title_someone"><b>Створи свою піцу</b></div><div class="thing_description_someone"></div><a href="index.php?made_someone"><div class="thing_btn_someone"></div></a></div></div>
<div class="all_thing">
<?//print_r($_SESSION);?>
<?for($i = 0;$i<count($text[0]);$i++){?>
<?if(isset($_GET['UA']) || isset($_SESSION['UA']) || !isset($_SESSION['RU']) && !isset($_SESSION['EN'])){	
	$_SESSION['UA'] = 'UA';
	unset($_SESSION['RU']);
	unset($_SESSION['EN']);?>
<div class="mob_thing"><img class="thing_img" src="<?=$text[0][$i]['image'];?>"  alt="Error" /><div class="thing_title"><b><?=$text[0][$i]['title_ua'];?></b></div><div class="thing_description"><?=$text[0][$i]['description_ua'];?></div><div class="size"><b><?=$text[0][$i]['size_ua'];?></b></div><a href="/index.php?clock<?=$text[0][$i]['id'];?>=<?=$text[0][$i]['id'];?>"><div class="thing_btn"></div></a></div>
<?if($i%2 == 0){?>
<div class="thing"><img class="thing_img" src="<?=$text[0][$i]['image'];?>"  alt="Error" /><div class="thing_title"><b><?=$text[0][$i]['title_ua'];?></b></div><div class="thing_description"><?=$text[0][$i]['description_ua'];?></div><div class="size"><b><?=$text[0][$i]['size_ua'];?></b></div><a href="/index.php?clock<?=$text[0][$i]['id'];?>=<?=$text[0][$i]['id'];?>"><div class="thing_btn"></div></a></div>
<?}if($i % 2 != 0){?>
<div class="thing1"><img class="thing_img" src="<?=$text[0][$i]['image'];?>"  alt="Error" /><div class="thing_title"><b><?=$text[0][$i]['title_ua'];?></b></div><div class="thing_description"><?=$text[0][$i]['description_ua'];?></div><div class="size"><b><?=$text[0][$i]['size_ua'];?></b></div><a href="/index.php?clock<?=$text[0][$i]['id'];?>=<?=$text[0][$i]['id'];?>"><div class="thing_btn"></div></a></div>
<?}}if(isset($_GET['RU']) || isset($_SESSION['RU'])){
	$_SESSION['RU'] = 'RU';
	unset($_SESSION['UA']);
	unset($_SESSION['EN']);?>
<div class="mob_thing"><img class="thing_img" src="<?=$text[0][$i]['image'];?>"  alt="Error" /><div class="thing_title"><b><?=$text[0][$i]['title_ru'];?></b></div><div class="thing_description"><?=$text[0][$i]['description_ru'];?></div><div class="size"><b><?=$text[0][$i]['size_ru'];?></b></div><a href="/index.php?clock<?=$text[0][$i]['id'];?>=<?=$text[0][$i]['id'];?>"><div class="thing_btn"></div></a></div>
<?if($i%2 == 0){?>
<div class="thing"><img class="thing_img" src="<?=$text[0][$i]['image'];?>"  alt="Error" /><div class="thing_title"><b><?=$text[0][$i]['title_ru'];?></b></div><div class="thing_description"><?=$text[0][$i]['description_ru'];?></div><div class="size"><b><?=$text[0][$i]['size_ru'];?></b></div><a href="/index.php?clock<?=$text[0][$i]['id'];?>=<?=$text[0][$i]['id'];?>"><div class="thing_btn"></div></a></div>
<?}if($i % 2 != 0){?>
<div class="thing1"><img class="thing_img" src="<?=$text[0][$i]['image'];?>"  alt="Error" /><div class="thing_title"><b><?=$text[0][$i]['title_ru'];?></b></div><div class="thing_description"><?=$text[0][$i]['description_ru'];?></div><div class="size"><b><?=$text[0][$i]['size_ru'];?></b></div><a href="/index.php?clock<?=$text[0][$i]['id'];?>=<?=$text[0][$i]['id'];?>"><div class="thing_btn"></div></a></div>
<?}}if(isset($_GET['EN']) || isset($_SESSION['EN'])){
	$_SESSION['EN'] = 'EN';
	unset($_SESSION['RU']);
	unset($_SESSION['UA']);?>
<div class="mob_thing"><img class="thing_img" src="<?=$text[0][$i]['image'];?>"  alt="Error" /><div class="thing_title"><b><?=$text[0][$i]['title_en'];?></b></div><div class="thing_description"><?=$text[0][$i]['description_en'];?></div><div class="size"><b><?=$text[0][$i]['size_en'];?></b></div><a href="/index.php?clock<?=$text[0][$i]['id'];?>=<?=$text[0][$i]['id'];?>"><div class="thing_btn"></div></a></div>
<?if($i%2 == 0){?>
<div class="thing"><img class="thing_img" src="<?=$text[0][$i]['image'];?>"  alt="Error" /><div class="thing_title"><b><?=$text[0][$i]['title_en'];?></b></div><div class="thing_description"><?=$text[0][$i]['description_en'];?></div><div class="size"><b><?=$text[0][$i]['size_en'];?></b></div><a href="/index.php?clock<?=$text[0][$i]['id'];?>=<?=$text[0][$i]['id'];?>"><div class="thing_btn"></div></a></div>
<?}if($i % 2 != 0){?>
<div class="thing1"><img class="thing_img" src="<?=$text[0][$i]['image'];?>"  alt="Error" /><div class="thing_title"><b><?=$text[0][$i]['title_en'];?></b></div><div class="thing_description"><?=$text[0][$i]['description_en'];?></div><div class="size"><b><?=$text[0][$i]['size_en'];?></b></div><a href="/index.php?clock<?=$text[0][$i]['id'];?>=<?=$text[0][$i]['id'];?>"><div class="thing_btn"></div></a></div>

<?}}}?>
</div></div>