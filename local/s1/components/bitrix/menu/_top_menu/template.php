<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header__bottom">
        <ul class="main-menu">
          <!-- <li class="main-menu__item">
            <a href="" class="main-menu__link" title="������� � �������">�������</a>
          </li>
          <li class="main-menu__item">
            <a href="" class="main-menu__link" title="������� � ��� Instagram">Instagram</a>
          </li>
          <li class="main-menu__item">
            <a href="" class="main-menu__link" title="� ����� ��������">� ��������</a>
          </li>
          <li class="main-menu__item">
            <a href="" class="main-menu__link" title="��������� � ����">��������</a>
          </li> -->
<?foreach($arResult as $arItem):?>

	<?if ($arItem["PERMISSION"] > "D"):?>
		<li class="main-menu__item">
			<a href="<?=$arItem["LINK"]?>" class="main-menu__link" title="������� � �������"><?=$arItem["TEXT"]?></a>
		</li>
	<?endif?>

<?endforeach?>

	</ul>
</div>
<div class="menu-clear-left"></div>
<?endif?>
