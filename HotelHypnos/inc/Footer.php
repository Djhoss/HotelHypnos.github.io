<hr>

      <!-- Footer -->
      <div class="container-fluid bg-white mt-5 ">
        <div class="row">
          <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2"> Hotel </h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Quisquam, quidem. 
            </p>
          </div>
          <div class="col-lg-4 p-4">
            <h5 class="mb-3"> Menu </h5>
            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Accueil</a> <br>
            <a href="chambres.php" class="d-inline-block mb-2 text-dark text-decoration-none">Chambres</a> <br>
            <a href="installations.php" class="d-inline-block mb-2 text-dark text-decoration-none">Installation</a> <br>
            <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Nous contacter</a> <br>
            <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">A propos</a> <br>
          </div>
          <div class="col-lg-4 p-4">
            <h5 class="mb-3"> Nous suivre </h5>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2"> 
              <i class="bi bi-twitter me-1"> Twitter </i> 
            </a> <br>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2"> 
              <i class="bi bi-facebook me-1"> Facebook </i> 
            </a> <br>
            <a href="#" class="d-inline-block text-dark text-decoration-none"> 
              <i class="bi bi-instagram me-1"> Instagram </i> 
            </a> <br>
          </div>
        </div>
      </div>


      <h6 class="text-center bg-dark text-white p-3 m-0"> Designed and Developed by Vincent Over</h6>
  
      <!-- Boostrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script>

    function setActive()
    {
      navbar = document.getElementById("nav-bar");
      let a_tags = navbar.getElementsByTagName("a");

      for(i=0; i<a_tags.length; i++){
        let file = a_tags[i].href.split("/").pop();
        let file_name = file.split(".")[0];

        if(document.location.href.indexOf(file_name) > -1){
          a_tags[i].classList.add("active");
        }
      }
    }
    setActive();

  </script>