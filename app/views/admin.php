<?php $this->layout('master', ['title' => $title]) ?>
<?php if(!logger()) : ?>

	



<?php else:  ?>
<section class="w3l-contacts-12" id="contact">
	<div class="container py-5">
		<div class="contacts12-main py-md-3">
			<div class="header-section text-center">
				<h3 class="mb-md-5 mb-4">Login</h3>
			</div>
			<?php echo getFlash('message'); ?>
			<form action="/secret/super/user" method="post">
				<div class="main-input">

	<input type="text" name="email" class="contact-input" value="eudes.sna@gmail.com">
	<input type="password" name="password" class="contact-input" value="">			

				</div>
				<div class="text-right">
					<button type="submit" class="btn-secondary btn theme-button">Login</button>
				</div>
			</form>
		</div>
	</div>
</section>
<?php endif; ?>