<?php $this->layout('master', ['title' => $title]) ?>
<section class="w3l-contacts-12" id="contact">
	<div class="container py-5">
		<div class="contacts12-main py-md-3">
			<div class="header-section text-center">
				<h3 class="mb-md-5 mb-4">Escolha uma Matéria</h3>
			</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
.btn-group-lg>.btn, .btn-lg {
    padding: .5rem 1rem 5px 5px;
    font-size: 1.25rem;
    border-radius: .3rem;
    margin: 2px;
}
</style>

<?php 

	$connect = connect(); 

	$query = ("SELECT * FROM cdf_category ORDER BY name_category ASC ");
	$queryTests = $connect->prepare($query);
	$queryTests->execute();


	foreach ($queryTests as $testes => $key) {


		echo ' <a href="/question/estudent/'.$key->id_category.'" class="btn btn-primary btn-lg enable" tabindex="-1" role="button" aria-disabled="true">'.$key->name_category.'</a>' ;
		

	}


?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		</div>
	</div>
</section>