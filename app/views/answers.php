<?php $this->layout('master', ['title' => $title]) ?>
<?php 

  $uri = $_SERVER["REQUEST_URI"];

  $url = explode('/',  $uri);

  $id = $url[2];


  ?>

<!--  Main banner section -->
 <section class="w3l-main-banner">
   <div class="companies20-content">
     <div class="companies-wrapper">
       <div class="container">
         <div class="banner-item">
             <div class="banner-info">
               <h3 class="banner-text">Perguntas</h3>

               <p class="my-4 mb-sm-5">

<?php  


$answers = findBy('cdf_users_answer', 'users_id', $id, 'users_id, users_answer' );

if ($answers->users_id == ''):
    return redirect('/questions/1');
  else:
 echo $answers->users_answer; 
endif;

?>


                </p><br>
             </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--  //Main banner section -->