<?php $this->layout('master', ['title' => $title]) ?>
<section class="w3l-contacts-12" id="contact">
	<div class="container py-5">
			<div class="header-section text-center">
				<h3 class="mb-md-5 mb-4"><?php echo $titles->name_sub_category; ?></h3>
			</div>
<section class="w3l-contacts-12" id="contact">
	<div class="container py-5" style="border: 1px solid #868686; border-radius: 3px; margin: 10px auto; text-align: left; width: 99%; padding: 25px;">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php 

$id = $aulas->id_sub_question;

$connect = connect();
$queyPergunta = ("SELECT id_question, name_question FROM cdf_new_question WHERE id_sub_question = $id ORDER BY RAND() LIMIT 10");
$resultPergunta = $connect->prepare($queyPergunta);
$resultPergunta->execute();


	$n = 1;
	echo '<form action="" method="post" accept-charset="utf-8">';
	while($rowPergunta = $resultPergunta->fetch(PDO::FETCH_ASSOC)){
		extract($rowPergunta);

		$result = count($rowPergunta);
	echo "<br><br><strong>".$n++.") ".$name_question."</strong><br><br>";






	$queryResposta = "SELECT id_answer, name_answer_1 FROM cdf_new_answer WHERE id_control_answer = $id_question ORDER BY RAND() LIMIT 5";

	$resultResposta = $connect->prepare($queryResposta);
	$resultResposta->execute();
	$a = "a";
	while($rowResposta = $resultResposta->fetch(PDO::FETCH_ASSOC)){
		extract($rowResposta);
		$name_answer = explode("|", $name_answer_1);
		echo '

	 <div class="form-check">
  <input class="form-check-input" type="radio" name="'.$name_question.'" value="'.$id_answer.' id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    '.$a++.") ".$name_answer[0].'
  </label>
</div>

		';
	}


}

echo ' <br><br>

<div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">ENVIAR RESPOSTAS</button>
</div>

</form>

';

?>
</div>
</section>


	</div>
</section>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
