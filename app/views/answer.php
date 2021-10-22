<?php $this->layout('master', ['title' => $title]) ?>
<?php $answers = all('cdf_users_answer'); ?>
 <!--  Main banner section -->
 <section class="w3l-main-banner">
   <div class="companies20-content">
     <div class="companies-wrapper">
       <div class="container">
         <div class="banner-item">
             <div class="banner-info">
               <h3 class="banner-text">Perguntas</h3>

               <p class="my-4 mb-sm-5">

                <ul>
<?php foreach ($answers as $answer):
?>

<li><a href="/questions/<?php echo $answer->users_id; ?>"> <?php echo $answer->users_answer; ?> </a></li> <br>
<?php
endforeach;
?>
</ul>

                </p><br>
             </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--  //Main banner section -->