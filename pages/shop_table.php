<?php //require 'list_all_03.php';  ?>
<table class="list">
<?php
$ar = $array_restaurant;
foreach ($shop_no_selected as $tt) {
    // $ar = $array_restaurant;
    $g1 = $array_restaurant->{$tt}['id'];
    $g2 = $array_restaurant->{$tt}['photo_alt'];
    $g3 = $array_restaurant->{$tt}['photo_src'];
    $g4 = $array_restaurant->{$tt}['photo_title'];
    $g5 = $array_restaurant->{$tt}['photo_desc'];
    if ($tt != "shop0") {
        echo "<tr>
                      <td class='photo'><img width='110' alt={$g2}
        				    src={$g3}/>
                      </td>
        				<td class='info'>
        				    <dl>
                            <dt>{$g4}</dt>
                            <dd>{$g5} </dd>
                          </dl>
                       </td>
                       <td class='detail'><a href='detail_03.php?id={$g1}'>詳細</a></td>
                       </tr>";

    }
}
?>
    </table>