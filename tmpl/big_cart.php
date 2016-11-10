<div class="big_cart">
<div class="delivery">
Умови доставки:
<br />
1.Доставка здійснюється в межах Львова.
<br />
2.Вартість доставки становить 25грн.
<br />
3.Доставка за місо узгоджується оператором.
<br />
4.Середній час доставки 45хв.
<br />
5.Якщо сума замовлення перевищує 250грн-доставка безкоштовна
</div>
<?//print_r($text);?>
<div class="all_title_in_cart">
<div class="title_in_cart">
В КОШИКУ
</div>
<div class="ttls"><th><b class="th_cart1">Назва</b></th><th><b class="th_cart">Ціна</b></th><th><b class="th_cart">Розмір/Вага</b></th><th><b class="th_cart">Кількість</b></th><th><b class="th_cart2">Всього</b></th></div>
<div class="slash">
</div>
<?for($i = 0;$i<count($text[0]);$i++){?>
<tr><td><img src="<?=$text[0][$i][0]['image_cart'];?>"/></td><td><div class="titles_big_cart"><div id="name-data"></div><?=$_POST['number'];?><?=$text[0][$i][0]['title_ua'];?></div></td><td><div class="price_big_cart"><?=$text[0][$i][0]['price'];?></div></td><td><div class="size_big_cart"><?=$text[0][$i][0]['size_ua'];?></div></td><td><?$j = $text[0][$i][0]['id'] - 1;?><?//=$_SESSION['counter'.$text[0][$i][0]['id']];?></td><td><form method="POST"><input class="how_m_big_cart" type="text" name="count<?=$text[0][$i][0]['id'];?>" size="1" placeholder="<?=$_SESSION['counter'.$text[0][$i][0]['id']];?>"><input class="how_m_btn_big_cart" type="submit" name="sub<?=$text[0][$i][0]['id'];?>" value=""></form></td><td><div class="price_one"><?=$text[0][$i][0]['price'] * $_SESSION['counter'.$text[0][$i][0]['id']];?></div></td><td><?if(!isset($_GET['nav_id'])):?><a class="delete_cart_big_cart" href="?delete=<?=$_SESSION['clock'.$text[0][$i][0]['id']];?>">+</a><?endif;?>
<?}?>
<div class="slash1">
</div>
<div class="all_in">ВСЬОГО:</div>
<table class="about_all_in">
<tr><td>Попередній підсумок</td><td><?=$_SESSION['price_short_cart'];?>грн</td></tr>
<tr><td>Доставка</td><td>25грн</td></tr>
<tr><td>Всього</td><td><?=$_SESSION['price_short_cart'] + 25;?>грн</td></tr>
</table>
<a href="/index.php?sail"><input class="big_cart_btn" type="submit" value="ОФОРМИТИ"></div></a>
</div>
</div>