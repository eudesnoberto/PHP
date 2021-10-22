<?php $this->layout('master', ['title' => $title]) ?>
<?php echo getFlash('message'); ?>
<section class="w3l-contacts-12" id="contact">
	<div class="container py-5">
		<div class="contacts12-main py-md-3">
			<div class="header-section text-center">
				<h3 class="mb-md-5 mb-4">Pergunte Aqui</h3>
			</div>
<form action="/question/answer" method="post">
	<div class="main-input">

		<textarea class="contact-textarea contact-input" name="users_answer" placeholder="Faça uma pergunta." required=""></textarea>

		<input type="hidden" name="users_anonimo" value="<?php if (!logado()): echo "false"; elseif(logado()): echo user()->cdf_new_id; endif; ?>">		
		<input type="hidden" name="users_status" value="<?php if (logado()): echo 1; else: echo "false"; endif; ?>">		
		<input type="hidden" name="users_data" value="<?php echo date('Y/m/d H:m:s'); ?>">		


	</div>
	<div class="text-right">
		<button type="submit" class="btn-secondary btn theme-button">Fazer Pergunta</button>
	</div>
</form>
		</div>
	</div>
</section>