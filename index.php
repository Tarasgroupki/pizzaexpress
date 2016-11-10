<?php
$dir = "Mysqli";
session_start();
header('Content-type: text/html; charset=utf-8');
include 'config.php';
include 'classes/Page.php';
include 'classes/'.$dir.'/Database.php';
include 'classes/Cart.php';
//define('QUANTITY_NEWS',5);
try{ 
$page = new Page();
$cart = new Cart();	
//print_r($_SESSION);
if(isset($_GET['UA'])){
	$_SESSION['UA'] = 'UA';
	unset($_SESSION['RU']);
	unset($_SESSION['EN']);
}
if(isset($_GET['RU'])){
	$_SESSION['RU'] = 'RU';
	unset($_SESSION['UA']);
	unset($_SESSION['EN']);
}
if(isset($_GET['EN'])){
	$_SESSION['EN'] = 'EN';
	unset($_SESSION['UA']);
	unset($_SESSION['RU']);
}
if(isset($_POST['sub'])){
	$count = $_POST['count'];
	$price_someone = $_SESSION['p_someone'];	
	$price_someone = $price_someone * $count;
	$ps = $price_someone / $_SESSION['p_someone'];
	$_SESSION['ps'] = $ps;
	$_SESSION['pr_someone'] = $price_someone;
}
if(isset($_POST['Took'])){
	for($n = 0;$n<7;$n++){
		$mass[$n] = $_POST['m'.$n];
		if($mass[$n] != NULL){
			$mass1[] = $mass[$n];
		}
	}
	//print_r($mass1);
	$_SESSION['ps'] = 1;
	if(!is_null($mass1)){
	$_SESSION['made_someone'] = implode($mass1,',');
	}
	$_SESSION['made_title'] = 'Піца-зроби сам';
	//echo $_SESSION['made_someone'];
	if(isset($_POST['m1'])){
		$price_someone += 20;
	}
	if(isset($_POST['m2'])){
		$price_someone += 30;
	}
	if(isset($_POST['m3'])){
		$price_someone += 40;
	}
	if(isset($_POST['m4'])){
		$price_someone += 30;
	}
	if(isset($_POST['m5'])){
		$price_someone += 15;
	}
	if(isset($_POST['m6'])){
		$price_someone += 25;
	}
	if(isset($_POST['m7'])){
		$price_someone += 35;
	}
	$_SESSION['p_someone'] = $price_someone;
	$_SESSION['pr_someone'] = $price_someone;
	$_SESSION['made_img'] = 'image/products/madesomeone_cart.jpg';
//print_r($_SESSION);
	}
	if($_GET['delete'] == 255){
		unset($_SESSION['made_someone']);
		unset($_SESSION['made_title']);
		unset($_SESSION['pr_someone']);
		unset($_SESSION['made_img']);
		unset($_SESSION['p_someone']);
		unset($_SESSION['ps']);
	}
    echo $page->get_body(NULL,'head');
	if(isset($_GET['delete'])){
	unset($_SESSION['cart']);
	unset($_SESSION['clock'.$_GET['delete']]);
	unset($_SESSION['price'.$_GET['delete']]);
	$b = $_GET['delete'];
	unset($_SESSION['counter'.$b]);
}		
for($i=0;$i<14;$i++){
if(isset($_GET['clock'.$i])) {
	if($_GET['clock'.$i] != $var['cl'.$i]){$var['cl'.$i] = $_GET['clock'.$i];}
	if($var['cl'.$i] != NULL){$j = $i-1;$_SESSION['clock'.$i] = $var['cl'.$i];
	}
	}
	$_SESSION['short_cart'] = 'n';
if($_GET['clock'.$i] != $var1['cl'.$i]){$var1['cl'.$i] = $_GET['clock'.$i];}
	if($var1['cl'.$i] != NULL ){$i1.$i = $var1['cl'.$i];$st = 2;}
	$reg[0] = $_SESSION;
	
	}	
	if(isset($_GET['inser']) && ($_SESSION['name'] != NULL) || isset($_GET['inser']) && ($_SESSION['made_someone'] != NULL)){
	//header("Location: http://www.pizzaexpress.com.ua/index.php?category");
	$nm = $_GET['nm'];
	$e_mail = $_GET['e-mail'];
	$address = $_GET['address'];
	$price = $_SESSION['price_short_cart'];
	$name = $_SESSION['name'];
	$count = $_SESSION['counts'];
	$plus = $_SESSION['plus'];
	$made_someone = $_SESSION['made_someone'];
	$page->ins_order($nm,$e_mail,$address,$price,$name,$count,$plus,$made_someone);
	$message = 'Назва піци:'.$name.'Загальна ціна:'.$price.'Кількість:'.$count.'Додаток:'.$plus.'Склад саморобної піци:'.$made_someone;
	$result = mail('pizzaexpresslviv@gmail.com', 'Замовлення№1', $message);
	echo $message;
	unset($_SESSION['name']);
	unset($_SESSION['price_short_cart']);
	unset($_SESSION['made_someone']);
	unset($_SESSION['made_title']);
	unset($_SESSION['pr_someone']);
	unset($_SESSION['made_img']);
	unset($_SESSION['p_someone']);
	unset($_SESSION['ps']);
	unset($_SESSION['p_someone']);
	for($z = 0;$z<10;$z++){//-Продумай логіку числа кількості товарів;
	unset($_SESSION['clock'.$z]);
	unset($_SESSION['counter'.$z]);
	}
	
	
	
}//session_destroy();
if(isset($_GET['delete_from_cart'])){
	unset($_SESSION['name']);
	unset($_SESSION['price_short_cart']);
	unset($_SESSION['made_someone']);
	unset($_SESSION['made_title']);
	unset($_SESSION['pr_someone']);
	unset($_SESSION['made_img']);
	unset($_SESSION['p_someone']);
	unset($_SESSION['ps']);
	unset($_SESSION['p_someone']);
	for($z = 0;$z<10;$z++){//-Продумай логіку числа кількості товарів;
	unset($_SESSION['clock'.$z]);
	unset($_SESSION['counter'.$z]);
	}
}

   if(isset($_SESSION['short_cart'])){
   //$text[0] = $page->get_header_menu();
   $reg[0] = $_SESSION;
   $reg[0]['ps'] = NULL;
   $reg[0]['counts'] = NULL;
   $reg[0]['all_count'] = NULL;
   $text[0] = $page->item($reg);}
	elseif(!isset($_GET['clock']) && !isset($_SESSION['short_cart'])){
		$text[0] =  NULL;
	}
	echo $page->get_body($text,'header');
	if(isset($_GET['in_cart'])){
		$text = $_SESSION;
		  $reg[0]['ps'] = NULL;
   $reg[0]['counts'] = NULL;
   $reg[0]['all_count'] = NULL;
   $text[0] = $page->item($reg);
	 echo $page->get_body($text,'big_cart');
}
	if(isset($_GET['category'])){
		$category = $_GET['category'];
		$text = $page->get_all($category);
		echo $page->get_body($text,'things');
	}
	if(isset($_GET['sail'])){
	echo $page->get_body(NULL,'insert_order');
}
if(isset($_GET['made_someone'])){
	echo $page->get_body(NULL,'made_someone');
}

elseif(!isset($_GET['category']) && !isset($_GET['in_cart']) && !isset($_GET['sail']) && !isset($_GET['made_someone'])){
	echo $page->get_body(NULL,'main');
	}
	//echo $reload;

//print_r($_SESSION);
//session_destroy();
//	echo $page->get_body($text,'main');
    /*
	$text1 = $page->get_sidebar_menu();
	echo $page->get_menu($text1,'sidebar');
if(isset($_GET['id'])){
	$id = (int)$_GET['id'];
	if($id != 0){
		if(isset($_POST['sbm'])){
			$log = $_SESSION['login'];
			$txt = $_POST['comment'];
			$page->insert_com($txt,$id,$log);
		}
		$text = $page->get_one($id);
		echo $page->get_body($text,'view');
		
		//$text = $page->select_com($id);
		//echo $page->get_body($text,'comment');
		
	}
	else{
		exit('Wrong parameter!!!');
	}
	//$text = $page->get_one($id);
}

if(isset($_GET['mark'])){
	$mark = $_GET['mark'];
	$clocks = $page->get_product($mark);
	$count_clocks = count($clocks);
$nav = $page->navigation($count_clocks);
	$text = array($page->get_product($mark),$nav);
	echo $page->get_body($text,'things');
	
}
elseif((!isset($_GET['id'])) && (!isset($_GET['mark'])) && (!isset($_GET['account'])) && (!isset($_GET['registration'])) && (!isset($_GET['cart'])) && (!isset($_GET['search'])) && (!isset($_GET['new_products']))&& (!isset($_GET['search'])) && (!isset($_GET['new_products']))&& (!isset($_GET['search'])) && (!isset($_GET['new_products']))&& (!isset($_GET['account1'])) && (!isset($_GET['Login'])) && !isset($_GET['sail'])){
	//$text = $page->get_all();
	
	$clocks = $page->get_clock();
	$count_clocks = count($clocks);
	//$text1 = 
	//$count_clocks = count($text1);
	//$get_on_one_page = ceil($count_clocks / QUANTITY_NEWS);
	//echo $get_on_one_page;
	/*for($i = 1;$i<$get_on_one_page;$i++){
		$pages[] = $i;
	}
	$nav = $page->navigation($count_clocks);
	
	$text = array($page->get_clock(),$nav);
	echo $page->get_body($text,'things');
}

if(isset($_GET['Login']) && !isset($_SESSION['login'])){
	
	
	echo $page->get_body(NULL,'account');
}
if(isset($_POST['Login'])){
	if(!empty($_POST['Login']) && !empty($_POST['Password'])){
	$_SESSION['login'] = $_POST['Login'];
	$_SESSION['Password'] = md5($_POST['Password']);
	}
	echo $text[0]['Login'];
	

}
if(isset($_GET['Login']) && isset($_SESSION['login'])){
	print $_SESSION['login'];
	$login = $_SESSION['login'];
	$password = $_SESSION['Password'];
	print $password;
	$text = $page->get_user($login,$password);
	echo $page->get_body($text,'logined_acc');
}

if(isset($_GET['Exit'])){
	unset($_SESSION['login']);
	unset($_SESSION['password']);
}
if(isset($_GET['registration'])){
	
	echo $page->get_body($text,'registration');
}
if(isset($_POST['Touch'])){
		$picture=$_POST['pict'];
		$name = $_POST['name'];
		$login = $_POST['login'];
		$password = md5($_POST['password']);
		$visit_cart = $_POST['visit_cart'];
		$page->ins_data($login,$password,$name,$visit_cart,$picture);
	}
if(isset($_GET['cart'])){
	echo $_SERVER['QUERY_STRING'];
	$g = $page->item($reg);
	$_SESSION['cart'] = $g[0]['price'];
	echo $cart->get_cart($g,'cart');
}
$cart = $_SESSION['cart'];
if(isset($_GET['new_products'])){
	$_SERVER['REQUEST_URI'] = '/index';
	echo $_SERVER['QUERY_STRING'];
	echo $_SERVER['REQUEST_URI'];
	$clocks = $page->get_date();
	$count_clocks = count($clocks);
	$nav = $page->navigation($count_clocks );
	$text1 = array($page->get_date(),$nav);
	echo $page->get_body($text1,'things');
}


if(isset($_GET['search'])){
	$srch = $_GET['search1'];
	$clocks = $page->get_search($srch);
	$count_clocks = count($clocks);
	$nav = $page->navigation($count_clocks);
	$text = array($page->get_search($srch),$nav);
	echo $page->get_body($text,'things');
}
ob_end_clean();*/
echo $page->get_body(NULL,'footer');
if(!is_object($page) && !is_object($cart)){
	throw new Exception();
}
}
catch(Exception $e){
	exit('There is modified object!');
}
?>