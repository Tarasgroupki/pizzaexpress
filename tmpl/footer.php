<div class="footer">
<div class="main_footer">
<img class="footer_logo" src="image/logo_na_nizhniy_shaptsi.png" alt="Error">
<div class="footer_logo_main"></div>
<?if(isset($_SESSION['UA']) || !isset($_SESSION['RU']) && !isset($_SESSION['EN'])){?>
<div class="sure">Слідкуй за новинами у соціальних мережах</div>
<?}?>
<?if(isset($_SESSION['EN'])){?>
<div class="sure">Follow the news on social networks</div>
<?}?>
<?if(isset($_SESSION['RU'])){?>
<div class="sure">Следи за новостями в социальных сетях</div>
<?}?>
<b class="telephone">(044)222-11-11</b>
<div class="socials"><a class="facebook" target="blank" rel="nofollow noopener" href=""></a><a class="vk" target="blank" rel="nofollow noopener" href=""></a><a class="instagram" target="blank" rel="nofollow noopener" href=""></a>
</div>
<div class="footer2">
<div class = "footer_logo2"></div>
<?if(isset($_SESSION['UA']) || !isset($_SESSION['RU']) && !isset($_SESSION['EN'])){?>
<p class="about">Копірайт 2016 Усі права захищені</div></p>
<p class="about1">Копірайт 2016 Усі права захищені<b class="telephone1">(044)222-11-11</b></p>
</div></div>
<ul class="footer_menu">
<li class="sitemap"><a href="#" class="foot">Про нас </a>|</li>
<li class="sitemap"><a href="#" class="foot">Відгуки </a>|</li>
<li class="sitemap"><a href="#" class="foot">Вакансії </a></li>
</ul>
<?}?>
<?if(isset($_SESSION['EN'])){?>
<p class="about">Copyright 2016 All rights reserved</div></p>
<p class="about1">Copyright 2016 All rights reserved<b class="telephone1">(044)222-11-11</b></div></p>
</div></div>
<ul class="footer_menu">
<li class="sitemap"><a href="#" class="foot">About us </a>|</li>
<li class="sitemap"><a href="#" class="foot">Reviews </a>|</li>
<li class="sitemap"><a href="#" class="foot">Jobs </a></li>
</ul>
<?}?>
<?if(isset($_SESSION['RU'])){?>
<p class="about">Копирайт 2016 Все права защищены</div></p>
<p class="about1">Копирайт 2016 Все права защищены<b class="telephone1">(044)222-11-11</b></div></p>
</div></div>
<ul class="footer_menu">
<li class="sitemap"><a href="#" class="foot">Про нас </a>|</li>
<li class="sitemap"><a href="#" class="foot">Отзывы </a>|</li>
<li class="sitemap"><a href="#" class="foot">Вакансии </a></li>
</ul>
<?}?>
<div class="footer_line">
<hr />
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/slideshow.js"></script>
<script src="js/panels.js"></script>
<script src="js/active_link.js"></script>
<script src="js/mobile.js"></script>
<script src="js/made_someone.js"></script>
</body>
</html>