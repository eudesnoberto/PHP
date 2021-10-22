<?php $this->layout('master', ['title' => $title]) ?>
<?php 
 
$connect = connect();
$category = $_GET['id_category'];

$subCategory = ("SELECT * FROM cdf_sub_category WHERE id_sub_category = '%$category%' ORDER BY name_sub_category");
$categorySub = $connect->prepare($subCategory);
$categorySub->execute();

echo "<label>Sub-categoria: </label><select name='cidade'>n";
while($rowCategory = $categorySub->fetch(PDO::FETCH_ASSOC)){
	extract($rowCategory);
    echo "<option value='$id_sub_category'>$name_sub_category</option>n";
}
echo "</select>n";
