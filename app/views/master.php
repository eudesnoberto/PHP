<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> <?php echo $this->e($title); ?> </title>


    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="https://www.cdfnew.tk/assets/images/favicon.ico" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="https://www.cdfnew.tk/assets/css/style-starter.css">
</head>

<body>

<div id="header">
  <?=$this->insert('partials/header')?>
  </div>

<div class="conteiner">
  <?=$this->section('content')?>
</div>

  <script src="app.js"></script>

  <?=$this->section('scripts')?>

 
</section>
   <!-- footer -->
   <footer class="w3l-footer-29-main" id="footer">
     <div class="footer-29 py-5">
       <div class="container pb-lg-3">
         <div class="row footer-top-29"> 
           <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-4">
             <a class="footer-logo mb-md-3 mb-2" href="/"><img src="https://www.cdfnew.tk/assets/images/icone.png" alt="" /></a>
             <p>Nós da CDF NEW ajudamos alunos e mestres de todos os campos no conhecimento das respostas de assuntos complexos e difíceis.</p>
           </div>
           <div class="col-lg-2 col-md-6 footer-list-29 footer-2 mt-5">
            <h6 class="footer-title-29">Explore Mais</h6>
             <ul>
               <li><a href="#gallery.html">Teste de Conhecimento</a></li>
               <li><a href="contact.html">Cursos Online</a></li>
             </ul>
           </div>
           <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-5">
             <div class="properties">
               <h6 class="footer-title-29">Postagens Recentes</h6>
               <a class="d-grid twitter-feed" href="#blog-single.html">
                 <img src="https://www.cdfnew.tk/assets/images/g1.jpg" class="img-fluid rounded" alt="">
                 <p>How to get Programming language Cartification in 45 days.</p>
               </a>
               <a class="d-grid twitter-feed" href="#blog-single.html">
                 <img src="https://www.cdfnew.tk/assets/images/g2.jpg" class="img-fluid rounded" alt="">
                 <p>Top class learning from anywhere Lorem ipsum dolor sit amet.</p>
               </a>
               <a class="d-grid twitter-feed" href="#blog-single.html">
                 <img src="https://www.cdfnew.tk/assets/images/g3.jpg" class="img-fluid rounded" alt="">
                 <p>Improving lives through learning Lorem ipsum dolor sit amet.</p>
               </a>
             </div>
           </div>
           <div class="col-lg-2 col-md-6 footer-list-29 footer-4 mt-5">
            <h6 class="footer-title-29">Links Rápidos</h6>
             <ul>
               <li><a href="/">Home</a></li>
               <li><a href="/question">Pergunte Aqui</a></li>
               <li><a href="/login"> Login</a></li>
               <li><a href="/user/create">Criar Conta</a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <div id="footers14-block" class="py-3">
       <div class="container">
         <div class="footers14-bottom text-center">
           <div class="social">
             <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
             <a href="#google" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
             <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
             <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
             <a href="#youtube" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a>
           </div>
           <div class="copyright mt-1">
             <p>&copy; 2021 | CDF NEW </p>
           </div>
         </div>
       </div>
     </div>
  
 <!-- move top -->
     <button onclick="topFunction()" id="movetop" title="Go to top">
       <span class="fa fa-angle-up" aria-hidden="true"></span>
     </button>
     <script>
       // When the user scrolls down 20px from the top of the document, show the button
       window.onscroll = function () {
         scrollFunction()
       };

       function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
           document.getElementById("movetop").style.display = "block";
         } else {
           document.getElementById("movetop").style.display = "none";
         }
       }

       // When the user clicks on the button, scroll to the top of the document
       function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
       }
     </script>
     <!-- /move top -->

   </footer>
   <!-- Footer -->

   <!-- jQuery and Bootstrap JS -->
   <script src="https://www.cdfnew.tk/assets/js/jquery-3.3.1.min.js"></script>
   <script src="https://www.cdfnew.tk/assets/js/bootstrap.min.js"></script>

   <!-- Template JavaScript -->

   <!-- stats number counter-->
   <script src="https://www.cdfnew.tk/assets/js/jquery.waypoints.min.js"></script>
   <script src="https://www.cdfnew.tk/assets/js/jquery.countup.js"></script>
   <script>
     $('.counter').countUp();
   </script>
   <!-- //stats number counter -->


   <!-- testimonials owlcarousel -->
   <script src="https://www.cdfnew.tk/assets/js/owl.carousel.js"></script>

   <!-- script for owlcarousel -->
   <script>
     $(document).ready(function () {
       $('.owl-one').owlCarousel({
         loop: true,
         margin: 0,
         nav: false,
         responsiveClass: true,
         autoplay: false,
         autoplayTimeout: 5000,
         autoplaySpeed: 1000,
         autoplayHoverPause: false,
         responsive: {
           0: {
             items: 1,
             nav: false
           },
           480: {
             items: 1,
             nav: false
           },
           667: {
             items: 1,
             nav: false
           },
           1000: {
             items: 1,
             nav: false
           }
         }
       })
     })
   </script>
   <!-- //script for owlcarousel -->
   <!-- //testimonials owlcarousel -->

   <!-- script for courses -->
   <script>
     $(document).ready(function () {
       $('.owl-two').owlCarousel({
         loop: true,
         margin: 30,
         nav: false,
         responsiveClass: true,
         autoplay: false,
         autoplayTimeout: 5000,
         autoplaySpeed: 1000,
         autoplayHoverPause: false,
         responsive: {
           0: {
             items: 1,
             nav: false
           },
           480: {
             items: 1,
             nav: false
           },
           667: {
             items: 2,
             nav: false
           },
           1000: {
             items: 3,
             nav: false
           }
         }
       })
     })
   </script>
   <!-- //script for courses -->

   <!-- disable body scroll which navbar is in active -->
   <script>
     $(function () {
       $('.navbar-toggler').click(function () {
         $('body').toggleClass('noscroll');
       })
     });
   </script>
   <!-- disable body scroll which navbar is in active -->

   </body>

   </html>


