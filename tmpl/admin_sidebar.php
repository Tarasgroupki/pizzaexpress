<div id="sidebar">

<div id = "menu-header"><p class="menu-header">Адмін панель</div>
<ul>
<?php if(isset($text)){?>
	<? foreach($text as $item){?>
	<li><a href="/admin.php?adm=<?=$item['name'];?>"><?=$item['name'];?></a></li>
<hr />
	<?}?>
<?}?>
</ul>
</div>