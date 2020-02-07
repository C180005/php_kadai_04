<?php require 'header.php';?>
<main>
	<div class="clearfix">
<?php
require 'list_all.php';
$area_selected = @$_GET['area'];
if ($area_selected == '-- 地域を選んで下さい --')
    header('Location: list.php');
else
    echo '<h2>' . $area_selected . 'のレストラン</h2>';
$shop_no_selected[] = shop0;
foreach ($shop_no as $val) {
    if ($$val['area'] == $area_selected) {
        $shop_no_selected[] = $val;
    }
}
require 'shop_table.php'; ?>
</main>
<?php require 'footer.php';?>
    