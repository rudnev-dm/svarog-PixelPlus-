
<div class="footer">
  <div class="footer__top">
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
  <div class="footer__bottom  clearfix">

    <!-- ������� ������ -->

    <?$APPLICATION->IncludeComponent(
    	"bitrix:main.include",
    	"",
    	Array(
    		"AREA_FILE_SHOW" => "file",
    		"PATH" => "/include/payment_methods.php",
    		"EDIT_TEMPLATE" => ""
    	)
    );?>

    <!-- �opyright -->

    <?$APPLICATION->IncludeComponent(
    	"bitrix:main.include",
    	"",
    	Array(
    		"AREA_FILE_SHOW" => "file",
    		"PATH" => "/include/copyright_new.php",
    		"EDIT_TEMPLATE" => ""
    	)
    );?>

    <!-- ����������� -->

    <?$APPLICATION->IncludeComponent(
    	"bitrix:main.include",
    	"",
    	Array(
    		"AREA_FILE_SHOW" => "file",
    		"PATH" => "/include/developer.php",
    		"EDIT_TEMPLATE" => ""
    	)
    );?>
  </div>
</div>
</div>
</body>
</html>
