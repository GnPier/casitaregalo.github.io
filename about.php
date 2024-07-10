<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Por qué elegirnos?</h3>
         <p>En La Casita del Regalo, nuestra dedicación a la excelencia y la calidad nos distingue. No somos simplemente una librería; somos tus compañeros en el viaje literario y académico. ¿Por qué elegirnos? Porque entendemos la importancia de cada libro y cada útil escolar en tu vida. Nos esforzamos por seleccionar cuidadosamente cada título, cada cuaderno y cada artículo escolar para ofrecerte lo mejor. Nuestro compromiso con la satisfacción del cliente se refleja en nuestra atención personalizada, asesoramiento experto y una cuidadosa curación de productos. En La Casita del Regalo, no solo vendemos libros y útiles escolares, sino que también compartimos contigo la alegría de aprender y la emoción de descubrir nuevas historias en cada página.</p>
         <a href="contact.php" class="btn">Contactanos</a>
      </div>

   </div>
</section>

<!--<section class="Opiniones">
   
<form action="" method="post">
      <h3>Dinos algo!!!</h3>
      <input type="text" name="nombre" required placeholder="Ingresa tu nombre" class="box">
      <input type="email" name="correo" required placeholder="Ingresa tu correo" class="box">
      <textarea name="mensaje" class="box" placeholder="Ingresa tu mensaje" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="enviar Opinion" name="enviar" class="btn">
   </form>
</section>-->

<section class="autores">

   <h1 class="titulo">Grandes Autores</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/PIER_PAGINA.jpg" alt="">
         <div class="compartir">
            <a href="https://www.facebook.com/geanpiere.atochecordova.3" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/geampier.ac/" class="fab fa-instagram"></a>
         </div>
         <h3>Geampier Atoche Cordova</h3>
      </div>

      <div class="box">
         <img src="images/zevallos.jpg" alt="">
         <div class="compartir">
            <a href="https://www.facebook.com/Zecox7u7/?_rdc=1&_rdr" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/elber_.02/" class="fab fa-instagram"></a>
         </div>
         <h3>Jair Zevallos Flores</h3>
      </div>

      <div class="box">
         <img src="images/atoche.jpg" alt="">
         <div class="compartir">
            <a href="https://www.facebook.com/profile.php?id=100004515391677" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/atochex_28/" class="fab fa-instagram"></a>
         </div>
         <h3>Jair Atoche Espinoza</h3>
      </div>

      <div class="box">
         <img src="images/madrid.jpg" alt="">
         <div class="compartir">
            <a href="https://www.facebook.com/antonymadridvitex" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/antonymadridvite/" class="fab fa-instagram"></a>
         </div>
         <h3>Cristian Madrid Vite</h3>
      </div>

      <div class="box">
         <img src="images/Daniel.jpg" alt="">
         <div class="compartir">
            <a href="https://www.facebook.com/daniel.castrocastro.7965?mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/danicastro.zz/?igshid=MzMyNGUyNmU2YQ%3D%3D" class="fab fa-instagram"></a>
         </div>
         <h3>Daniel Changa Castro</h3>
      </div>

      <div class="box">
         <img src="images/duena.jpg" alt="">
         <div class="compartir">
            <a href="https://www.facebook.com/denissekarine.saavedraespinoza" class="fab fa-facebook-f"></a>
         </div>
         <h3>Karine Saavedra Espinoza </h3>
      </div>

   </div>

</section>

</section>











<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>