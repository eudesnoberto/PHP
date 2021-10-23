
<?php $this->layout('master', ['title' => $title]) ?>
<? // if(!logado() OR !logger()): redirect('/'); endif; ?>
<?php echo getFlash('message'); 

?>


<section class="w3l-contacts-12" id="contact">
	<div class="container py-5">
		<div class="contacts12-main py-md-3">
			<div class="header-section text-center">
				<h3 class="mb-md-5 mb-4">Cadastrar Nova Pergunta</h3>
			</div>
			<form action="/question/add" method="post">
				<div class="main-input">


<?php echo getFlash('name_category'); ?>

<!--
<script type="text/javascript">

function getComboA(selectObject) {

var dados = selectObject.value;
var input = document.getElementById('hiddens');
input.value = dados;

}

</script>
-->

<select id="states"  name="name_category"></select>

<select id="cities" name="name_sub_category"></select>



<?php echo getFlash('name_question'); ?>
<textarea type="text" name="name_question" class="contact-input" minlength="5" maxlength="1000" required="required" placeholder="Pergunta"></textarea>

<?php echo getFlash('name_answer_1'); ?>
<input type="text" name="name_answer_1[]" class="contact-input" minlength="5" maxlength="1000" required="required" placeholder="Resposta">


<?php echo getFlash('name_answer_1'); ?>
<input type="text" name="name_answer_1[]" class="contact-input" minlength="5" maxlength="1000" required="required" placeholder="Resposta">

<?php echo getFlash('name_answer_1'); ?>
<input type="text" name="name_answer_1[]" class="contact-input" minlength="5" maxlength="1000" required="required" placeholder="Resposta">

<?php echo getFlash('name_answer_1'); ?>
<input type="text" name="name_answer_1[]" class="contact-input" minlength="5" maxlength="1000" required="required" placeholder="Resposta">

<?php echo getFlash('name_answer_1'); ?>
<input type="text" name="name_answer_1[]" class="contact-input" minlength="5" maxlength="1000" required="required" placeholder="Resposta">


	<input type="hidden" name="id_control_answer" value="<?php $evidences = descTable('cdf_new_question'); $id = $evidences[0]->id_question+1; echo $id; ?>">


	<input type="hidden" name="id_sub_question" id="hiddens">

	<input type="hidden" name="status_answer" value="2">
	<input type="hidden" name="data_answer" value="<?php echo date("Y/m/d H:m:s"); ?>">
	<input type="hidden" name="data_question" value="<?php echo date("Y/m/d H:m:s"); ?>">



				</div>
				<div class="text-right">
					<button type="submit" class="btn-secondary btn theme-button">Criar</button>
				</div>
			</form>
		</div>
	</div>
</section>


<?php
/*
foreach ($evidence as $value) {

	 $title = $value->name_answer_1;
	 $divide = explode('|', $title);
	 $divide[1];
	 if ($divide[1] == 2): echo $divide[0]." - ".$true = '<strong style="color:green"> Correto </strong>'."<br><br>"; endif;
	 if ($divide[1] == 1): echo $divide[0]." - ".$true = '<strong style="color:red"> Incorreto </strong>'."<br><br>"; endif;
}
*/


?>

</div>
</section>