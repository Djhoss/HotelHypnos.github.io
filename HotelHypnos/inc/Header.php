<?php 

require './admin/inc/db_config.php';
require './admin/inc/essentiel.php';


  $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
  $values = [1];
  $contact_r =mysqli_fetch_assoc(select($contact_q, $values, 'i'));
?>

    <nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"> Hypnos </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link me-2" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="chambres.php">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="installations.php">installations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="contact.php">Nous contacter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">A propos</a>
            </li>
          </ul>
          <div class="d-flex">            
              <!-- Button login modal -->
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
              Se connecter
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
              S'inscrire
            </button>
          </div>
        </div>
      </div>
    </nav>
  
    <!-- Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">            
            <form>
              <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center"> 
                  <i class="bi bi-person-bounding-box fs-3 me-2"> Se connecter </i>
                </h5>
                  <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form>
              <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label"> addresse Email </label>
                    <input type="email" class="form-control shadow-none">
                </div>
                <div class="mb-4">
                  <label class="form-label"> Mot de passe </label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <button type="submit" class="btn btn-dark shadow-none"> Se connecter </button>
                  <a href="javascript:void(0)" class="text-secondary text-decoration-none"> Mot de passe oublié? </a>
                </div> 
              </div>
            </form>        
        </div>
      </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">            
            <form>
              <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center"> 
                <i class="bi bi-person-plus-fill fs-3 me-2"> S'inscrire </i>
                </h5>
                  <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form>
              <div class="modal-body">
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                  Note : Vos coordonnées doivent correspondre à votre pièce d'identité (passeport, permis de conduire, etc.)
                  qui vous sera demandée lors de l'encaissement (qui sera fait sur place).
                </span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                          <label class="form-label"> Nom </label>
                          <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                          <label class="form-label">Prénom </label>
                          <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-8 ps-0 mb-3">
                          <label class="form-label"> Email </label>
                          <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                          <label class="form-label">Mot de passe </label>
                          <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                          <label class="form-label"> Confirmation du mot de passe </label>
                          <input type="password" class="form-control shadow-none">
                        </div>
                    </div>
                </div>
                <div class="text-center my-1">
                  <button type="submit" class="btn btn-dark shadow-none"> S'enregistrer</button>
                </div>
              </div>
            </form>        
        </div>
      </div>
    </div>

    