<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <title><?$APPLICATION->ShowTitle()?></title>
  <?$APPLICATION->ShowHead()?>
  <link href="<?=SITE_TEMPLATE_PATH?>css/main.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&end;subset=latin,cyrillic' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>

  <div id="panel"><?$APPLICATION->ShowPanel();?></div>

  <!-- Верхний колонтитул -->

  <div class="page-wrapper">
    <div class="header">
      <!-- Логотип -->
      <div class="header__top">
        <?$APPLICATION->IncludeComponent(
        	"bitrix:main.include",
        	"",
        	Array(
        		"AREA_FILE_SHOW" => "file",
        		"PATH" => "/include/company_logo.php",
        		"EDIT_TEMPLATE" => ""
        	)
        );?>
      </div>
      <!-- Меню -->
      <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
      	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
      	"MAX_LEVEL" => "1",	// Уровень вложенности меню
      	"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
      	"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
      	"DELAY" => "N",	// Откладывать выполнение шаблона меню
      	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
      	"MENU_CACHE_TYPE" => "N",	// Тип кеширования
      	"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
      	"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
      	"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
      	),
      	false
      );?>
    </div>
