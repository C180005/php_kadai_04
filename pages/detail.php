<?php
require 'header_detail.php';
require 'list_all.php';
require 'list_review_all.php';
?>
<main>
	<article id="description">
		<h2>レストラン詳細</h2>
		<table class="list">
<?php
$id_selected = @$_GET['id'];
$ar = $array_restaurant;
$av = $array_view;
$is = $id_selected;
$shop = "shop"."$is";
$g2 = $ar->{$shop}['photo_alt'];
$g3 = $ar->{$shop}['photo_src'];
$g4 = $ar->{$shop}['photo_title'];
$g5 = $ar->{$shop}['photo_desc'];
$r1 = $av->{$shop}['id'];
$r2 = $av->{$shop}['star'];
$r3 = $av->{$shop}['review'];
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
               </tr>";

?>
			</table>
	</article>
	<article id="reviews">
		<h2>レビュ一覧</h2>
<?php echo "{$r3}"; ?>
	</article>
	<article id="review">
		<h2>レビュを書き込む</h2>
		<form name="review_form" action="detail.php" method="post">
			<table class="review">
				<tr>
					<th>お名前</th>
					<td><input type="text" name="reviewer" /></td>
				</tr>
				<tr>
					<th>ポイント</th>
					<td><input type="radio" name="point" value="1" id="1" /> <label
						for="1">1</label> <input type="radio" name="point" value="2"
						id="2" /> <label for="2">2</label> <input type="radio"
						name="point" value="3" id="3" checked /> <label for="3">3</label>
						<input type="radio" name="point" value="4" id="4" /> <label
						for="4">4</label> <input type="radio" name="point" value="5"
						id="5" /> <label for="5">5</label></td>
				</tr>
				<tr>
					<th>レビュ</th>
					<td><textarea name="comment"></textarea></td>
				</tr>
			</table>
			<input type="submit" value="投稿" /> <input type="reset" value="クリア" />
		</form>
	</article>
</main>
<?php require 'footer.php';?>
