<?php require 'header_03.php';?>
<main>
	<div class="clearfix">
		<h2>地域を選んで下さい</h2>
		<form action="list_selected_03.php" name="search_form" method="get">
<?php
require 'area_class_03.php';
$listbox = "<select name=\"area\">\n";
for ($i = 0; $i < count($area); $i ++) {
    $listbox .= "\t<option value=\"{$area[$i]}\">{$area[$i]}</option>\n";
}
$listbox .= "</select>\n";
echo "{$listbox}";
?>
			<input type="submit" value="検索" />
		</form>
	</div>
</main>
<?php require 'footer_03.php';?>