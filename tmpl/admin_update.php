<body onload="src()">
<form method="POST">
<?foreach($text[0] as $item){?>
<?if(strlen($item) < 20){?>
<input id="un" type="text" value="<?=$item;?>"/>
<?}?>
<br />
<?if(strlen($item) > 20){?>
<textarea>
<?=$item;?>
</textarea>
<?}}?>
<input type='submit' name = 'smb'>
</form>