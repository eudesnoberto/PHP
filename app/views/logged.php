<?php $this->layout('master', ['title' => $title]) ?>
<?php 

  if(!logado() OR !logger()): redirect('/'); endif;
?>
  <a href="/questionadd" title="">Cadastrar Provas</a>


