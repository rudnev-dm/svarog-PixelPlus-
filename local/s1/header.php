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

  <!-- ������� ���������� -->

  <div class="page-wrapper">
    <div class="header">
      <!-- ������� -->
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
      <!-- ���� -->
      <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
      	"ROOT_MENU_TYPE" => "top",	// ��� ���� ��� ������� ������
      	"MAX_LEVEL" => "1",	// ������� ����������� ����
      	"CHILD_MENU_TYPE" => "top",	// ��� ���� ��� ��������� �������
      	"USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
      	"DELAY" => "N",	// ����������� ���������� ������� ����
      	"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
      	"MENU_CACHE_TYPE" => "N",	// ��� �����������
      	"MENU_CACHE_TIME" => "3600",	// ����� ����������� (���.)
      	"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
      	"MENU_CACHE_GET_VARS" => "",	// �������� ���������� �������
      	),
      	false
      );?>
    </div>
