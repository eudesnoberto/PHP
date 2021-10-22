<?php $this->layout('master', ['title' => $title]) ?>

<?php

      if($_SERVER["REQUEST_URI"] == '/'):

?>

<div x-data=""></div>

 <!--  Main banner section -->
 <section class="w3l-main-banner">
   <div class="companies20-content">
     <div class="companies-wrapper">
       <div class="container">
         <div class="banner-item">
           <div class="banner-view">
             <div class="banner-info">
               <h3 class="banner-text">
                 Aprenda a qualquer hora, em qualquer lugar.<br> Acelere seu futuro.
               </h3>
               <p class="my-4 mb-sm-5">Acreditamos que todos têm a capacidade de ser criativos. Habilidade é um lugar onde as pessoas desenvolvem seu próprio potencial.
               </p><br>
               <a href="question" class="btn btn-primary theme-button mr-3">Faça um pergunta</a>
               <a href="/question/online_tests" class="btn btn-outline-primary theme-button">Testes de Conhecimento</a>       
             
             <!--  <form method="get" action="/">

                <input type="text" name="s" placeholder="Buscar">
                 
                <button type="submit">Buscar</button>

               </form>      
              -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--  //Main banner section -->
<?php endif; ?>   