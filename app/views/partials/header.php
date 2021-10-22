<?php $url = $_SERVER["REQUEST_URI"]; ?>
<!-- header -->
<header class="w3l-header">
  <div class="hero-header-11">
    <div class="hero-header-11-content">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
          <a class="navbar-brand" href="/"><img src="https://www.cdfnew.tk/assets/images/icone.png" alt="" /></a>
          <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> --> 
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

          <?php if($url == "/"): ?>  <li class="nav-item active"> <?php else: ?> <li class="nav-item @@about-active"><?php endif; ?>
                <a class="nav-link" href="/">Home  <span class="sr-only">(current)</span>  </a>
              </li>


           <?php if($url == "/question/online_tests"): ?>  <li class="nav-item active"> <?php else: ?> <li class="nav-item @@about-active"><?php endif; ?>
               <a class="nav-link" href="/question/online_tests">Testes de Conhecimento</a>
              </li>



            <?php if($url == "/question"): ?>  <li class="nav-item active"> <?php else: ?> <li class="nav-item @@about-active"><?php endif; ?>
                <a class="nav-link" href="/question">Pergunte Aqui</a>
              </li>

            <?php if($url == "/question/answer"): ?>  <li class="nav-item active"> <?php else: ?> <li class="nav-item @@about-active"><?php endif; ?>
                <a class="nav-link" href="/question/answer"> Questões </a>
              </li>              


              <?php if(!logger()) : ?>
            <?php if($url == "/login"): ?>  <li class="nav-item active"> <?php else: ?> <li class="nav-item @@about-active"><?php endif; ?>
                <a class="nav-link" href="/login">Login</a>
              </li>


            <?php if($url == "/user/create"): ?>  <li class="nav-item active"> <?php else: ?> <li class="nav-item @@about-active"><?php endif; ?>
                <a class="nav-link" href="/user/create">Criar Conta</a>
              </li>


              <?php endif; ?>

    <?php if($url == '/secret/super/admin_logado'): ?>

        <?php if(logado()): ?>
        <?php if($url == "/secret/super/admin_logado"): ?>  <li class="nav-item active"> <?php else: ?> <li class="nav-item @@about-active"><?php endif; ?>
        <a class="nav-link" href="/logout/admin">Logout</a>
        </li>

      <?php endif; ?>

    <?php else: ?>

        <?php if(logger()): ?> 
        <?php if($url == "/logout"): ?>  <li class="nav-item active"> <?php else: ?> <li class="nav-item @@about-active"><?php endif; ?>
        <a class="nav-link" href="/logout">Logout</a> 
        </li>

        <?php endif; ?>

    <?php endif ?>

  
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- //header -->

<?php $url = $_SERVER["REQUEST_URI"]; ?>


<section class="w3l-skill-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p><a href="/">Home</a>

        <?php if ($url == '/'): ?> 

       <?php else: ?>

        &nbsp; / &nbsp;
        
      <?php endif ?> 
       
        <?php if($url == '/user/create'):  
          $ur = explode('/', $url); 
          echo ucfirst($ur[2]);

        elseif($url == '/question/online_tests'):
      $ur = explode('/', $url);
      $question = $ur[2];



      $testeOnline = explode('_', $question);

      $olineTeste = ucfirst($testeOnline[0])." ".ucfirst($testeOnline[1]);

       echo $olineTeste; 
       else: 
       echo  ucfirst(str_replace("/", "", $url)); 
       endif; ?>  

     </p>
    </div>
  </div>
</section> 