<script>
document.write(sum);
</script>
<form class="made_pizza_someone" method="POST">
<?if(isset($_SESSION['UA']) || !isset($_SESSION['RU']) && !isset($_SESSION['EN'])){?>
<input class="onion" type="checkbox" name="m1" value="Цибуля"><b class="md_sm_title">Цибуля</b>
<button class="md_sm_btn" id="btn" type="button">Test1!</button>
<br />
<input class="Mozarella" type="checkbox" name="m2" value="Моцарелла"><b class="md_sm_title">Моцарелла</b>
<button class="md_sm_btn" id="btn1" type="button">Test2!</button>
<br />
<input class="Ham" type="checkbox" name="m3" value="Шинка"><b class="md_sm_title">Шинка</b>
<button class="md_sm_btn" id="btn2" type="button">Test3!</button>
<br />
<input class="Salami" type="checkbox" name="m4" value="Салямі"><b class="md_sm_title">Салямі</b>
<button class="md_sm_btn" id="btn3" type="button">Test4!</button>
<br />
<input class="Sprat" type="checkbox" name="m5" value="Шпроти"><b class="md_sm_title">Шпроти</b>
<button class="md_sm_btn" id="btn4" type="button">Test5!</button>
<br />
<input class="Tuna" type="checkbox" name="m6" value="Тунець"><b class="md_sm_title">Тунець</b>
<button class="md_sm_btn" id="btn5" type="button">Test6!</button>
<br />
<input class="Pepper" type="checkbox" name="m7" value="Перець Чилі"><b class="md_sm_title">Перець Чилі</b>
<button class="md_sm_btn" id="btn6" type="button">Test7!</button>
<br />
<?}?>
<?if(isset($_SESSION['EN'])){?>
<input class="onion" type="checkbox" name="m1" value="Цибуля"><b class="md_sm_title">Onion</b>
<button class="md_sm_btn" id="btn" type="button">Test1!</button>
<br />
<input class="Mozarella" type="checkbox" name="m2" value="Моцарелла"><b class="md_sm_title">Mozarella</b>
<button class="md_sm_btn" id="btn1" type="button">Test2!</button>
<br />
<input class="Ham" type="checkbox" name="m3" value="Шинка"><b class="md_sm_title">Ham</b>
<button class="md_sm_btn" id="btn2" type="button">Test3!</button>
<br />
<input class="Salami" type="checkbox" name="m4" value="Салямі"><b class="md_sm_title">Salami</b>
<button class="md_sm_btn" id="btn3" type="button">Test4!</button>
<br />
<input class="Sprat" type="checkbox" name="m5" value="Шпроти"><b class="md_sm_title">Sprat</b>
<button class="md_sm_btn" id="btn4" type="button">Test5!</button>
<br />
<input class="Tuna" type="checkbox" name="m6" value="Тунець"><b class="md_sm_title">Tuna</b>
<button class="md_sm_btn" id="btn5" type="button">Test6!</button>
<br />
<input class="Pepper" type="checkbox" name="m7" value="Перець Чилі"><b class="md_sm_title">Chili Pepper</b>
<button class="md_sm_btn" id="btn6" type="button">Test7!</button>
<br />
<?}?>
<?if(isset($_SESSION['RU'])){?>
<input class="onion" type="checkbox" name="m1" value="Цибуля"><b class="md_sm_title">Лук</b>
<button class="md_sm_btn" id="btn" type="button">Test1!</button>
<br />
<input class="Mozarella" type="checkbox" name="m2" value="Моцарелла"><b class="md_sm_title">Моцарелла</b>
<button class="md_sm_btn" id="btn1" type="button">Test2!</button>
<br />
<input class="Ham" type="checkbox" name="m3" value="Шинка"><b class="md_sm_title">Ветчина</b>
<button class="md_sm_btn" id="btn2" type="button">Test3!</button>
<br />
<input class="Salami" type="checkbox" name="m4" value="Салямі"><b class="md_sm_title">Салями</b>
<button class="md_sm_btn" id="btn3" type="button">Test4!</button>
<br />
<input class="Sprat" type="checkbox" name="m5" value="Шпроти"><b class="md_sm_title">Шпроты</b>
<button class="md_sm_btn" id="btn4" type="button">Test5!</button>
<br />
<input class="Tuna" type="checkbox" name="m6" value="Тунець"><b class="md_sm_title">Тунец</b>
<button class="md_sm_btn" id="btn5" type="button">Test6!</button>
<br />
<input class="Pepper" type="checkbox" name="m7" value="Перець Чилі"><b class="md_sm_title">Перец Чили</b>
<button class="md_sm_btn" id="btn6" type="button">Test7!</button>
<br />
<?}?>
<input class="md_sm_btn" type="submit" name="Took" value="Send">
</form>
<div id="fg">0</div>