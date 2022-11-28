<?php
    include './includes/templates/header.php';
?>
    <link rel="stylesheet" href="build/css/app.css">
    <div class="video">
        <div class="overlay">
            <div class="contenedor contenedor-video">
                <h2>Wakanda Forever</h2>
                <a href="wakanda.php">Compra tus boletos ahora</a>
            </div>
        </div>
        <video autoplay muted loop>
            <source src="videos/to-pnwps.mp4" type="video/mp4">
            <source src="videos/to-pnwps.ogg" type="video/ogg">
            <source src="videos/to-pnwps.webm" type="video/webm">
        </video>
    </div>
    
    <div id="estrenos" class="estrenos">
        <h2 class="titulo-peliculas">Estrenos</h2>
        <div class="container">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-container mySwiper">
                
                <div class="swiper-wrapper">
                    <a href="BlackAdam.php" class="swiper-slide">
                        <img src="imagenes/BA.jpg" alt="">
                    </a>
    
                    <a href="#" class="swiper-slide">
                        <img src="imagenes/images2.jpg" alt="">
                    </a>
    
                    <a href="#" class="swiper-slide">
                        <img src="imagenes/images3.jpg" alt="">
                    </a>
    
                    <a href="#" class="swiper-slide">
                        <img src="imagenes/images4.jpg" alt="">
                    </a>
    
                    <a href="#" class="swiper-slide">
                        <img src="imagenes/images5.jpg" alt="">
                    </a>
    
                    <a href="#" class="swiper-slide">
                        <img src="imagenes/images6.jpg" alt="">
                    </a>
    
                    <a href="#" class="swiper-slide">
                        <img src="imagenes/images8.jpg" alt="">
                    </a>
    
                    <a href="#" class="swiper-slide">
                        <img src="imagenes/images9.jpg" alt="">
                    </a>
    
                    <a href="#" class="swiper-slide">
                        <img src="imagenes/images10.jpg" alt="">
                    </a>
    
                    <a href="#" class="swiper-slide">
                        <img src="imagenes/images12.jpg" alt="">
                    </a>
    
                </div>   
            </div>
        </div>
    
    </div>
    <h2 id="dulceria" class="titulo2">Dulceria</h2>
    <div  class="flex">
        <div class="grid">
            
            <a href="#" class="dulceria img">
            
                <div class="overlay-dulceria">
                    <div class="contenedor contenedor-img">
                        <h3>productos</h3>
                    </div>
                </div>
                <img src="imagenes/palomitas.jpg" alt="">
            </a>
            <a href="#" class="dulceria img">
                
                <div class="overlay-dulceria">
                    <div class="contenedor contenedor-img">
                        <h3>combos</h3>
                    </div>
                </div>
                <img src="imagenes/Combos-de-cine.jpg" alt="">
            </a>
            <a href="#" class="dulceria img">
                
                <div class="overlay-dulceria">
                    <div class="contenedor contenedor-img">
                        <h3>promocionales</h3>
                    </div>
                </div>
                <img src="imagenes/Promocional.jpg" alt="">
            </a>
            <a href="#" class="dulceria img">
                
                <div class="overlay-dulceria">
                    <div class="contenedor contenedor-img">
                        <h3>vip</h3>
                    </div>
                </div>
                <img src="imagenes/cinemania-vip.jpg" alt="">
            </a>
        </div>
    </div>



    <section id="sobre-nosotros" class="flex footer">
        <div class="grid">
            <div class = "image img">
                <img src="imagenes/cinemaia.jpg">
             </div>
     
             <div class = "content">
                 <h2>About Us</h2>
                 <span><!-- line here --></span>
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis aspernatur voluptas inventore ab voluptates nostrum minus illo laborum harum laudantium earum ut, temporibus fugiat sequi explicabo facilis unde quos corporis!</p>
                 
             </div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="app.js"></script>
</body>
</html>