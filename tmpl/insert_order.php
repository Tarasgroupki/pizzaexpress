<?=$_GET['plus'];?>
<?$_SESSION['plus'] = $_GET['plus'];?>
<div align="center" class="form">
<form method="GET">
Ім'я:<input name="nm" required placeholder="|Name" />
<br />
E-mail:<input name="e-mail" required placeholder="|E-mail" />
<br />
Адреса:<input name="address" required placeholder="|Адреса" />
<br />
<input type="submit" name="inser" />
</form>
</div>