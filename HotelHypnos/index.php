<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hypnos </title>
  <?php require_once './inc/links.php'; ?>
</head>

<?php 

require_once 'inc/Header.php';
?>

<body class="bg-light">
    
    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="image/carousel/1.png " class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="image/carousel/2.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="image/carousel/3.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="image/carousel/4.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="image/carousel/5.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="image/carousel/6.png" class="w-100 d-block" />
          </div>
        </div>
      </div>
    </div>

    <!-- Formulaire de disponibilité -->
    <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5 class="mb-5"> Vérifier la disponibilité des réservations </h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;"> Arrivé </label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;"> Départ  </label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;"> Adulte </label>
                <select class="form-select shadow-none">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500;"> Enfant </label>
                <select class="form-select shadow-none">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-3">
                <button type="submit" class="btn text-white btn-dark shadow-none "> Soumettre </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- Our rooms -->

    <h2 class="my-5 pt-4 mb-4 text-center fw-bold h-font"> Nos chambres </h2>

    <div class="containter px-3">
      <div class="row">
        <!-- Chambres 1 -->
        <div class="col-lg-4 col-md-6 my-3 ">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="image/rooms/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5> Chambre double </h5>
              <h6 class="mb-4"> 200€ la nuit </h6>
              <div class="features mb-4">
                <h6 class="mb-1"> Caractéristiques : </h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 chambres
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 salle de bain
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 balcon
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 lits
                  </span>
              </div> 
              <div class="facilities mb-5">
                <h6 class="mb-1"> Installations </h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 télévision
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 minibar
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 coffre-fort
                  </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1"> Note : </h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white btn-dark shadow-none">Réserver maintenante</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Plus de détails</a>
              </div>   
            </div>
          </div>
        </div>

        <!-- Chambres 2 -->
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="image/rooms/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5> Chambres triple  </h5>
              <h6 class="mb-4"> 300€ la nuit </h6>
              <div class="features mb-4">
                <h6 class="mb-1"> Caractéristiques : </h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 chambres
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 salles de bain
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 balcons
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 lits
                  </span>
              </div> 
              <div class="facilities mb-5">
                <h6 class="mb-1"> Installations </h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 télévisions
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 minibar
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 <coffres-forts></coffres-forts>
                  </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1"> Note : </h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white btn-dark shadow-none">Réserver maintenante</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Plus de détails</a>
              </div>   
            </div>
          </div>
        </div>

        <!-- Chambres 3 -->
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="image/rooms/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5> Simple chambre </h5>
              <h6 class="mb-4"> 100€ la nuit </h6>
              <div class="features mb-4">
                <h6 class="mb-1"> Caractéristiques : </h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 chambre
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 salle de bain
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 lits
                  </span>
              </div> 
              <div class="facilities mb-5">
                <h6 class="mb-1"> Installations </h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 télévision
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 coffre-fort
                  </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1"> Note : </h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white btn-dark shadow-none">Réserver maintenante</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Plus de détails</a>
              </div>   
            </div>
          </div>
        </div>
        
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Voir d'autres chambres →	 </a>

        </div>
      </div>
    </div>

    <!-- Nos installations -->
      <h2 class="my-5 pt-4 mb-4 text-center fw-bold h-font"> Nos installations </h2>
      <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
          <div class="col col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="image/facilities/wifi.svg" width="80px";>
            <h5 class="mt-3"> Wifi </h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="image/facilities/feu.svg" width="80px";>
            <h5 class="mt-3"> Chauffage réglable </h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="image/facilities/four.svg" width="80px";>
            <h5 class="mt-3"> Climatiseur </h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="image/facilities/massage.svg" width="80px";>
            <h5 class="mt-3"> Massage </h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="image/facilities/radio.svg" width="80px";>
            <h5 class="mt-3"> Radio </h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="image/facilities/télé.svg" width="80px";>
            <h5 class="mt-3"> Télévision </h5>
          </div>
          <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark text-white btn-dark shadow-none"> Plus d'installations → </a>
          </div>
        </div>
      </div>

      <!-- Témoignages -->
      <h2 class="my-5 pt-4 mb-4 text-center fw-bold h-font"> Témoignages </h2>
      <!-- Swiper -->
      <div class="container mt-5">
        <div class="swiper swiper-testimonials">
          <div class="swiper-wrapper mb-5">

            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
                <img src="image\facilities/Star.svg" width="30px">
                <h6 class="m-0 ms-2"> Joe Doe </h6>
              </div>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laboriosam.
                 minima corporis adipisci fugit sequi eius ullam architecto optio culpa doloribus tempore illo fugiat aperiam dicta. 
                 Molestiae iure nisi incidunt?
              </p>
              <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>

            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
                <img src="image\facilities/Star.svg" width="30px">
                <h6 class="m-0 ms-2"> Tart Iflette </h6>
              </div>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laboriosam.
                 minima corporis adipisci fugit sequi eius ullam architecto optio culpa doloribus tempore illo fugiat aperiam dicta. 
                 Molestiae iure nisi incidunt?
              </p>
              <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>

            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="image\facilities/Star.svg" width="30px">
                <h6 class="m-0 ms-2"> Gilbert Montagné </h6>
              </div>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laboriosam.
                 minima corporis adipisci fugit sequi eius ullam architecto optio culpa doloribus tempore illo fugiat aperiam dicta. 
                 Molestiae iure nisi incidunt?
                 Très belle vue.
              </p>
              <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <hr>

      <!-- Nous joindre -->

      

      <h2 class="my-5 pt-4 mb-4 text-center fw-bold h-font"> Nous joindre </h2>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
              <iframe class="w-100 rounded" height ="320" src="<?php echo $contact_r['iframe']?>" loading="lazy"></iframe>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
              <h5> Nous contacter </h5>
              <a href="tel: <?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                 <i class="bi bi-telephone-forward-fill"></i> <?php echo $contact_r['pn1']?>                
              </a>
              <br>
              <br>
              <a href="<?php echo $contact_r['pn2']?>" class="d-inline-block text-decoration-none text-dark">
                 <i class="bi bi-telephone-forward-fill"></i> <?php echo $contact_r['pn2']?>               
              </a>
            </div>

            <div class="bg-white p-4 rounded mb-4">
              <h5> Nous suivre </h5>
              <a href="#" class="d-inline-block mb-3 ">
                <span class="badge bg-light text-dark fs-6 p-2"> 
                  <i class="bi bi-twitter"> Twitter </i> 
                </span>                
              </a>
              <br>
              <a href="#" class="d-inline-block mb-3 ">
                <span class="badge bg-light text-dark fs-6 p-2"> 
                  <i class="bi bi-facebook"> Facebook </i> 
                </span>                
              </a>
              <br>
              <a href="#" class="d-inline-block ">
                <span class="badge bg-light text-dark fs-6 p-2"> 
                  <i class="bi bi-instagram"> Instagram </i> 
                </span>                
              </a>
            </div>
          </div>
        </div>
      </div>

      <?php require_once 'inc/Footer.php'; ?>

      
  <!-- SwiperJS -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- Initialize Swiper carousel -->
   <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay : 3500, 
          disableOnInteraction : false,
        }
      });
    </script>

    <!-- Initialize Swiper testimonials -->
    <script>
        var swiper = new Swiper(".swiper-testimonials", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          slidesPerView: "3",
          loop: true,
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
          },
          pagination: {
            el: ".swiper-pagination",
          },
          breakpoints : {
            320 : {
              slidesPerView : 1,
            },
            640 : {
              slidesPerView : 1,
            },
            768 : {
              slidesPerView : 2,
            },
            1024 : {
              slidesPerView : 3,
            },
          }
        });
      </script>


</body>

</html>

<?php 

require_once 'inc/Footer.php';

?> 