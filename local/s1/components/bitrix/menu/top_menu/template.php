<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header__bottom">
        <ul class="main-menu">
          <!-- <li class="main-menu__item">
            <a href="" class="main-menu__link" title="Перейти в каталог">Каталог</a>
          </li>
          <li class="main-menu__item">
            <a href="" class="main-menu__link" title="Перейти в наш Instagram">Instagram</a>
          </li>
          <li class="main-menu__item">
            <a href="" class="main-menu__link" title="О нашей компании">О компании</a>
          </li>
          <li class="main-menu__item">
            <a href="" class="main-menu__link" title="Свяжитесь с нами">Контакты</a>
          </li> -->
<?foreach($arResult as $arItem):?>

	<?if ($arItem["PERMISSION"] > "D"):?>
		<li class="main-menu__item">
			<a href="<?=$arItem["LINK"]?>" class="main-menu__link" title="Перейти в каталог"><?=$arItem["TEXT"]?></a>
		</li>
	<?endif?>

<?endforeach?>

	</ul>
</div>
<div class="menu-clear-left"></div>
<?endif?>
