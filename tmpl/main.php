<div class="header_mobile"><a href="index.php?category=pizza" class="menu_body">МЕНЮ</a></div>
<div class="header">
<?if(isset($_SESSION['UA']) || !isset($_SESSION['RU']) && !isset($_SESSION['EN'])){
	$_SESSION['UA'] = 'UA';
	unset($_SESSION['RU']);
	unset($_SESSION['EN']);?>
<div class="bg-header"><b><a class="menu" href="/index.php?category=pizza">Піца</a></b><b><a class="menu" href="/index.php?category=drinks">Напої</b></a><b><a class="menu" href="/index.php?category=applications">Додатки</a></b><b><a class="menu" href="/index.php?category=action">Акція</a></b><b><a class="made_another" href="/index.php?made_someone">Зроби свою піцу</a></b></div>
<?}?>
<?if(isset($_SESSION['EN'])){
	$_SESSION['EN'] = 'EN';
	unset($_SESSION['RU']);
	unset($_SESSION['UA']);?>
<div class="bg-header"><b><a class="menu" href="/index.php?category=pizza">Pizza</a></b><b><a class="menu" href="/index.php?category=drinks">Drinks</b></a><b><a class="menu" href="/index.php?category=applications">Applications</a></b><b><a class="menu" href="/index.php?category=action">Action</a></b><b><a class="made_another" href="/index.php?made_someone">Make your pizza</a></b></div>
<?}?>
<?if(isset($_SESSION['RU'])){
	$_SESSION['RU'] = 'RU';
	unset($_SESSION['UA']);
	unset($_SESSION['EN']);?>
<div class="bg-header"><b><a class="menu" href="main.html#pizza">Пицца</a></b><b><a class="menu" href="/index.php?category=drinks">Напитки</b></a><b><a class="menu" href="/index.php?category=applications">Додатки</a></b><b><a class="menu" href="/index.php?category=action">Акция</a></b><b><a class="made_another" href="/index.php?made_someone">Сделай свою пиццу</a></b></div>
<?}?>
<div class="image">
 <img class="slide_show" src="image/slayd_1.png" name="slide_show">
</div>
</div>
<div class="info"><b class="retreat"></b><div class="pannels"><img src="image/shop.png" alt="alt" /></div><b class="retreat"></b><div class="pannels"><img src="image/shop1.png" alt="alt" /></div><b class="retreat"></b><div class="pannels"><img src="image/shop.png" alt="alt" /></div></div>