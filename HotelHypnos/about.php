<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypnos - A Propos </title>
  <?php require_once './inc/links.php'; ?>
</head>
<body class="bg-light">
 
  <?php require_once 'inc/header.php'; ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"> A propos </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
      Dolorem rerum dolore maiores hic vero in amet? <br>
      Asperiores modi corrupti ipsa. Dolor labore corrupti.
    </p>
  </div>

  <div class="container">
    <div class="row">
      
      <div class="container">
          <div class="row justify-content-between align-items-center">
              <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1  order-2">
                  <h3 class="mb-3"> Lorem ipsum dolor sit amet </h3>
                  <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Iste consectetur at recusandae facere impedit corporis eius nesciunt non libero ipsam. 
              </div>
              <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1">
                  <img src="image/about/about.jpg" alt="" class="w-100">
              </div>
          </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
      <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="image/about/hotel.svg" width="70px">
                <h4 class="mt-3"> Hôtel 4 Etoiles en plein Paris </h4>
              </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="image/about/rating.svg" width="70px">
                <h4 class="mt-3"> +2000 Notes satisfaisant </h4>
              </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="image/about/customers.svg" width="70px">
                <h4 class="mt-3"> +2000 clients satisfait </h4>
              </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="image/about/staff.svg" width="70px">
                <h4 class="mt-3"> Nos équipes a votre écoute </h4>
              </div>
          </div>
      </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center"> GESTION D'EQUIPE </h3>
  <div class="container px-4">
      <!-- Swiper -->
    <div class="swiper mySwiper mb-5">
      <div class="swiper-wrapper">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="image/about/team.jpg" alt="" class="w-100">
            <h5 class="mt-2"> Bob - Le développeur </h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="image/about/team2.jpg" alt="" class="w-100">
            <h5 class="mt-2"> Nadia - La réceptionniste </h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="image/about/team3.jpg" alt="" class="w-100">
            <h5 class="mt-2"> Alfred - Majordome </h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="image/about/team4.jpg" alt="" class="w-100">
            <h5 class="mt-2"> Emma - La Développeuse </h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="image/about/team5.jpg" alt="" class="w-100">
            <h5 class="mt-2"> Mickael - Gardiens </h5>
        </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <?php require_once 'inc/Footer.php'; ?> 

  <!-- Swiper gestion d'equipe -->

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
      var swiper = new Swiper(".mySwiper", {
          slidePerView: 4,
          spaceBetween: 40,
        pagination: {
          el: ".swiper-pagination",
        },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },           
            }
        }
      );
    </script>

</body>

</html>

