<?php $this->layout('master', ['title' => $title]) ?>
<?php if(!logger()) : ?>
<?php echo getFlash('message'); ?>


<section class="w3l-contacts-12" id="contact">
	<div class="container py-5">
		<div class="contacts12-main py-md-3">
			<div class="header-section text-center">
				<h3 class="mb-md-5 mb-4">Novo Usuario</h3>
			</div>
			<form action="/user/store" method="post">

<?php echo getCsrf(); ?>

				<div class="main-input">

<?php echo getFlash('cdf_new_nome'); ?>
<input type="text" name="cdf_new_nome" class="contact-input" placeholder="Nome" value="<?php echo getOld('cdf_new_nome'); ?>">

<?php echo getFlash('cdf_new_email'); ?>
<input type="text" name="cdf_new_email" class="contact-input" placeholder="Email" value="<?php echo getOld('cdf_new_email'); ?>">

<?php echo getFlash('cdf_new_zap'); ?>
<input type="text" name="cdf_new_zap" class="contact-input" placeholder="Whatsapp" value="<?php echo getOld('cdf_new_zap'); ?>">

<?php echo getFlash('cdf_new_senha'); ?>
<input type="password" name="cdf_new_senha" class="contact-input" placeholder="Senha" value="<?php echo getOld('cdf_new_senha'); ?>">

	<input type="hidden" name="cdf_new_status" value="1">
	<input type="hidden" name="cdf_new_nivel" value="1">
	<input type="hidden" name="cdf_new_data" value="<?php echo date("d/m/Y H:m:s"); ?>">
			

				</div>
				<div class="text-right">
					<button type="submit" class="btn-secondary btn theme-button">Criar</button>
				</div>
			</form>
		</div>
	</div>
</section>


<?php else: redirect('/'); ?>

<?php endif; ?>