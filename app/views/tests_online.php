<?php $this->layout('master', ['title' => $title]) ?>
<section class="w3l-contacts-12" id="contact">
	<div class="container py-5">
		<div class="contacts12-main py-md-3">
			<div class="header-section text-center">
				<h3 class="mb-md-5 mb-4"><?php echo $categoria->name_category; ?></h3>
			</div>

<?php 


	$get = $subcategoria->id_sub_category;


	$connect = connect(); 

	$query = ("SELECT * FROM cdf_sub_category WHERE id_sub_category = $get ORDER BY name_sub_category ASC ");
	$queryTests = $connect->prepare($query);
	$queryTests->execute();


	foreach ($queryTests as $testes => $key) {
		
		echo '<a href="/question/estudents/' .$key->id.'">'.strtoupper($key->name_sub_category).' - </a>';

	}


?>
		</div>
	</div>
</section>