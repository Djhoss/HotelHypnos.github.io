<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Hypnos - Nos chambres </title>
  <?php require_once './inc/links.php'; ?>
</head>

<body class="bg-light">

  <?php require_once 'inc/header.php'; ?>


  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"> Nos chambres </h2>
    <div class="h-line bg-dark"></div>

  </div>

  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2"> Filtre </h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#FilterDropDown" aria-controls="FilterDropDown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2 " id="FilterDropDown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;"> Check Availability </h5>
                <label for="checkIn" class="form-label"> Check In </label>
                <input type="date" class="form-control shadow-none mb-3" id="checkIn" placeholder="Check In">
                <label for="checkOut" class="form-label"> Check Out </label>
                <input type="date" class="form-control shadow-none mb-3" id="checkOut" placeholder="Check Out">
              </div>

              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;"> Installations </h5>
                <div class="mb-2">
                  <input type="checkbox" id="i1" class="form-check-input shadow-none mb-1">
                  <label class="form-check-label" for="i1"> Première installation </label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="i2" class="form-check-input shadow-none mb-1">
                  <label class="form-check-label" for="i2"> Deuxième installation </label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="i3" class="form-check-input shadow-none mb-1">
                  <label class="form-check-label" for="i3"> Troisième installation </label>
                </div>
              </div>

              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;"> Invité </h5>
                <div class="d-flex">
                  <div class="me-4">
                    <label class="form-label"> Adultes </label>
                    <input type="number" class="form-control shadow-none">
                  </div>

                  <div>
                    <label class="form-label"> Enfants </label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="image/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3"> Simple chambre </h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
                <h6 class="mb-1"> Installations : </h6>
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

            </div>
            <div class="col-md-2 text-center mt-md-0 mt-4 text-center">
              <h6 class="mb-4"> 100€ la nuit </h6>
              <a href="#" class="btn btn-sm w-100 text-white btn-dark shadow-none mb-2"> Réserver </a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none"> Plus de détails </a>
            </div>
          </div>
        </div>

        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="image/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3"> Double chambre </h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
                <h6 class="mb-1"> Installations : </h6>
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

            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4"> 200€ la nuit </h6>
              <a href="#" class="btn btn-sm w-100 text-white btn-dark shadow-none mb-2"> Réserver </a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none"> Plus de détails </a>
            </div>
          </div>
        </div>

        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="image/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3"> Chambre triple </h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
                <h6 class="mb-1"> Installations :</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 télévisions
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 coffres-forts
                </span>
              </div>

            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4"> 300€ la nuit </h6>
              <a href="#" class="btn btn-sm w-100 text-white btn-dark shadow-none mb-2"> Réserver </a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none"> Plus de détails </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php require_once 'inc/Footer.php'; ?>

</body>

</html>