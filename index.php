<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Honey Beauty</title>
</head>

<body>
  <!--container-->
  <div id="app" class="container-fluid">

<!--nav-->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand mx-auto" href=http://localhost/honeybeauty/index.html>Honey Beauty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/honeybeauty/skincare.html">Skin-care</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/honeybeauty/makeup.html">Make-up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/honeybeauty/aboutus.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/honeybeauty/contactus.html">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-search my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
   </nav>
<!--nav-->

<!--carrusel-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> 
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img" src="./imgs/slide1.jpg" alt="s1">
    </div>
    <div class="carousel-item">
      <img class="img" src="./imgs/header.jpg" alt="s2">
    </div>
    <div class="carousel-item">
      <img class="img" src="./imgs/slide1.jpg" alt="s3">
    </div>
  </div>
</div>
<!--carrusel-->

<!--new products-->
<div class="new-products">
  <div class="row">
    <div class="col">
      <h1>NEW PRODUCTS</h1>
    </div>
    <div class="col">
      <div class="sl">
        <div class="blog-slider">
          <div class="blog-slider__wrp swiper-wrapper">
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="./imgs/elixirhemp.jpg" alt="v1">
              </div>
              <div class="blog-slider__content">
                <div class="blog-slider__title">Elixir Hemp</div>
                  <div class="blog-slider__text">This elixir hemp is an special oil perfect for oily skins or with a tendency to 
                    get acne for its antiseptic and astringent properties, as it nourishesand repairs the face from the deepest
                    layers of the skin</div>
                    <a href="#" class="blog-slider__button">READ MORE</a>
              </div>
            </div>
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="./imgs/elixir.jpg" alt="v2">
              </div>
              <div class="blog-slider__content">
                <div class="blog-slider__title">Elixir Vitamin E</div>
                  <div class="blog-slider__text">This oily delicacy is for all skin types, even oily skin, but specially ideal for
                    mature skin due to its anti'aging effect and as it helps to treat blemisheson the face caused by the passage of time</div>
                  <a href="#" class="blog-slider__button">READ MORE</a>
              </div>
            </div>
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="./imgs/serumhialuronico.jpg" alt="">
              </div>
              <div class="blog-slider__content">
                <div class="blog-slider__title">Serum hialuronico</div>
                  <div class="blog-slider__text">This facial serum its characterized by its high concentration of active ingredients,
                    its rapid absortion and penetration. This product is oil-freeso its perfect for all skin types and to preprare the skin
                  </div>
                  <a href="#" class="blog-slider__button">READ MORE</a>
              </div>
            </div>
          </div>
          <div class="blog-slider__pagination"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--new products-->

<!--cards
<div>
    <p class="typing-demo">Bienvenido a Honey Beauty,<br>una página que te ayudará a encontrar 
    <br>tus productos favoritos y las tiendas  
    <br>en donde estos se encuentran,
    <br>sin mencionar que usando 
    <br>nuestra página para llegar a estas tiendas,
    <br>obtendrás muchísimos descuentos y beneficios.</p>
    <img src="./imgs/headerb.jpg" class="img-fluid portada" alt="header">
    
</div>
carousel-->

<!--Sale-->
<div class="sale">
  <div class="row">
    <div class="col">
      <img class="img-sale" src="./imgs/sale.png" alt="">
    </div>
    <div class="col sale-title">
      <p>SoonJung 2x Barrier Intensive Cream 60ml (21AD)</p>
    </div>
    <div class="col-md-3 offset-md-3">
      <img class="img-ps" src="./imgs/cream.jpg" alt="">
    </div>
  </div>
</div>
<!--Sale-->

<!--packs-->
<div class="pack">
  <h4>PACKS</h4>
</div>
<div class="packs">
  <div class="container">
    <div class="row flip-boxes">
      <div class="col-md-3 col-sm-4 col-8 flip-box">
        <div class="front c1">
          <div class="content text-center">
            SoonJung Calming Cleansing Set<br>
            </span>
          </div>
        </div>
        <div class="back">
          <div class="content b1">
            Hypoallergenic Cleansing Set that contains Panthensoside™ which gently cleanses irritated skin 
              from external stresses
              <a href="#" class="button">Read more</a>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-4 col-6 flip-box">
        <div class="front c2">
          <div class="content text-center" >
            Moistfull Collagen Skin Care Set (3 Kinds)
          </div>
        </div>
        <div class="back">
          <div class="content b2">
            The small particles of the Super Collagen™ water(Hydrolyzed Collagen) makes skin full of firming 
              moisture and feeling bouncy
              <a href="#" class="button">Read more</a>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-4 col-6 flip-box">
        <div class="front c3">
          <div class="content text-center">
            KIT FEEL THE MAGIC
          </div>
        </div>
        <div class="back">
          <div class="content b3">
            Some of the best Costa products, just for you to get to know them and fall in love the brand
            <a href="#" class="button">Read more</a>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-4 col-6 flip-box">
        <div class="front c4">
          <div class="content text-center" >
            [SET] Wonder Pore Must-Haves
          </div>
        </div>
        <div class="back">
          <div class="content b4">
            Wonder Pore line demonstrates a perfect pore care, which contains Peppermint Vinegar, 
              and Mentha Arvensis Leaf Extracts.
              <a href="#" class="button">Read more</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!--packs-->

<!--Footer-->
 <div class="footer">
  <footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container">
  
      <!-- Grid row-->
      <div class="row text-center d-flex justify-content-center pt-5 mb-3 text-footer">
  
        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a class="text-footer" href="http://localhost/honeybeauty/skincare.html">Skin Care</a>
          </h6>
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a class="text-footer" href="http://localhost/honeybeauty/makeup.html">Make Up</a>
          </h6>
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a class="text-footer" href="http://localhost/honeybeauty/aboutus.html">About Us</a>
          </h6>
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a class="text-footer" href="http://localhost/honeybeauty/contactus.html">Contact Us</a>
          </h6>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row-->
      <hr class="rgba-white-light" style="margin: 0 15%;">
  
      <!-- Grid row-->
      <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
  
        <!-- Grid column -->
        <div class="col-md-8 col-12 mt-5">
          <p class="text-footer-hu">Hire Us</p>
          <p class="text-footer-in">We're currently woring on new proyects. Would you like to discuss us?</p>
          <p class="text-footer-cu">Contact Us</p>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row-->
      <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
  
      <!-- Grid row-->
      <div class="row pb-3">
  
        <!-- Grid column -->
        <div class="col-md-12">
  
          <div class="mb-3 text-center">
  
            <!-- Facebook -->
            <a class="fb-ic">
              <img src="./imgs/facebook.png" class="ic ml-lg-5 ml-3 fa-2x"> </img>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <img src="./imgs/twitter.png" class="ic ml-lg-5 ml-3 fa-2x"> </img>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <img src="./imgs/instagram.png" class="ic ml-lg-5 ml-3 fa-2x"> </img>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <img src="./imgs/pinterest.png" class="ic ml-lg-5 ml-3 fa-2x"> </img>
            </a>
  
          </div>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row-->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-footer-in">© 2020 Copyright: Honey Beauty
    </div>
    <!-- Copyright -->
  
  </footer>
 </div>
<!--Footer-->

<!--container-->
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
function createSlider(){
    var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,
  spaceBetween: 30,
  freeMode: true,
  breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      }
})
};

function slide(){
    var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
}
</script>
<script>
var app= new Vue({
        el:'#app',
        mounted: function(){
          setTimeout(function(){ createSlider() }, 4000);
          setTimeout(function(){ slide() }, 4000);}
    });
</script>
</html>