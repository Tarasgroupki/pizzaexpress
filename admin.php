<?php
$dir = "Mysqli";
session_start();
header('Content-type: text/html; charset=utf-8');
include 'config.php';
include "classes/Adm.php";
include "classes/".$dir."/Admin.php";
include "classes/Page.php";
include "classes/".$dir."/Database.php";
try{
$page = new Page();
$admin = new Adm();
echo $page->get_body(NULL,'head');
    //$text[0] = $page->get_header_menu();
		//echo $page->get_body($text,'main');
 $text = $admin->to_Admm();
 $ra = $page->get_body($text,'to_admin');
echo $ra;


$hash = $_POST['Admin_login'].''.$_POST['Admin_Pass'];
//if($hash != NULL){
$_SESSION['hash'] = $hash;
	$hash2 = $_SESSION['hash']; 
if(isset($_GET['adm'])){
$text[0]['hash'] = md5($hash2);
}//}

if(md5($hash2) == $text[0]['hash']){
$_SESSION['adm'] = md5($hash2);}
if(isset($_GET['Ex'])){
	unset($_SESSION['adm']);
}
	if(isset($_SESSION['adm'])){
$text = $page->get_admin();
echo $page->get_body($text,'admin_sidebar');

if($_GET['adm'] == 'Товар'){
	$text = $page->get_thing();
	echo $page->get_body($text,'insert_things');
	//echo $page->get_body(NULL,'insert_things');
	
}
if(isset($_GET['ins'])){
	
	$image = $_GET['img'];
	$title = $_GET['title'];
	$mark = $_GET['mark'];
	$country = $_GET['country'];
	$description = $_GET['description'];
	$short_description = $_GET['short_description'];
	$price = $_GET['price'];
	$year = $_GET['year'];
	$admin->insert_thing($image,$title,$mark,$country,$description,$short_description,$price,$year);
    
}
if(isset($_GET['sel_id'])){
	$idsl = $_GET['sel_id'];
	$text = $admin->selected_things($idsl);
	echo $page->get_body($text,'admin_update');
}
if(isset($_POST['smb'])){
	$title_ua = $_POST['title_ua'];
	$title_ru = $_POST['title_ru'];
	$title_en = $_POST['title_en'];
	$image = $_POST['image'];
	$image_cart = $_POST['image_cart'];
	$desc_ua = $_POST['description_ua'];
	$desc_ru = $_POST['description_ru'];
	$desc_en = $_POST['description_en'];
	$category_name = $_POST['category_name'];
	$size_ua = $_POST['size_ua'];
	$size_ru = $_POST['size_ru'];
	$size_en = $_POST['size_en'];
	$price = $_POST['price'];
	echo $title_ua;echo $title_ru;echo $title_en;echo $image;echo $image_cart;
	echo $desc_ua;echo $desc_ru;echo $desc_en;echo $category_name;echo $size_ua;
	echo $size_ru;echo $size_en;echo $price;
	//$admin->update_things($title_ua,$title_ru,$title_en,$image,$image_cart,$desc_ua,$desc_ru,$desc_en,$category_name,$size_ua,$size_ru,$size_en,$price);
}
/*if(($_GET['adm'] == 'Категорії') || isset($_GET['insert']) || isset($_GET['update1'])){
	echo $page->get_body($text,'insert_categories');
	if(isset($_GET['insert'])){
		
		$insert = $_GET['category'];
		$admin->insert_cat($insert);
	}
	//if(isset($_GET['update1'])){
		if(($_GET['adm'] == 'Категорії')){
		//$update = $_GET['category1'];
		//$admin->update_categories($update);
		$text1 = $page->get_sidebar_menu();
	echo $page->get_menu($text1,'insert_categories');}
}
//echo md5($hash);
if(isset($_GET['ad'])){
	$_SESSION['ad'] = $_GET['ad'];
}
if(isset($_GET['ad']) || isset($_GET['update1'])){
	$ad = $_SESSION['ad'];
	$update = $_GET['category1'];
	$admin->update_cat($update,$ad);
	$text = $page->get_sidebar_menu();
	echo $page->get_body($text,'insert_cat');
	//echo $admin->get_ad($ad);
	
}
if(isset($_GET['dellete'])){
	$delete = $_GET;
	//print_r($delete);
	$admin->delete_cat($delete);
}*/
if(isset($_GET['dellete1'])){
	$delete = $_GET;
	//print_r($delete);
	$admin->delete_thing($delete);
}
/*if($_GET['adm'] == 'Коментарі'){
 //$id_com = ;
 $text = $admin->own();
echo $page->get_body($text,'delete_comments');
}
if(isset($_GET['adm_category'])){
	$id_com = $_GET['adm_category'];
	$text = $admin->com($id_com);
	echo $page->get_body($text,'select_del_com');
}
if(isset($_GET['dellete_comment'])){
	$delete_com = $_GET;
	print_r($delete_com);
	$admin->delete_comments($delete_com);
}*/
if($_GET['adm'] == 'Замовлення'){
	$text = $admin->get_orders();
	echo $page->get_body($text,'orders');
}
if(isset($_GET['order_id'])){
	$order = $_GET['order_id'];
	$text = $admin->get_one_order($order);
	echo $page->get_body($text,'watch_order');
}
if(isset($_POST['delete_orders'])){
	$del_order = $_POST;
	$admin->delete_orders($del_order);
}
/*if($_GET['adm'] == 'Користувачі'){
	echo $page->get_body(NULL,'user_status_controller');
	//$text = $admin->user_status($login,$status);
}
if(isset($_POST['transform'])){
	$login = $_POST['Login'];
	$status = $_POST['status'];
	$admin->user_status($login,$status);
}*/
//echo $page->get_body(NULL,'footer');
if(!is_object($page) || !is_object($admin)){
	throw new Exception();
}}}
catch(Exception $e){
	exit('There is modified object!');
}
