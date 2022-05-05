<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hypnos - Nous contacter </title>
  <?php require_once 'inc/links.php'; ?>
</head>
<body class="bg-light">
 
  <?php require_once 'inc/header.php'; ?>


  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"> Nous contacter </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-4">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
      Dolorem rerum dolore maiores hic vero in amet? <br>
      Asperiores modi corrupti ipsa. Dolor labore corrupti.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg- col-md-6 mb-5 px-4">  

        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height ="320" src="<?php echo $contact_r['iframe']?>" loading="lazy"></iframe>
          
            <h5> Adresse </h5>
            <a href="<?php echo $contact_r['gmap']?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
              <i class="bi bi-geo-alt-fill"> <?php echo $contact_r['adress']?>s </i>
            </a>
            
            <h5 class="mt-4"> Nous contacter </h5>
              <a href="tel:<?php echo $contact_r['pn1']?>" class="i-inline-block mb-2 text-decoration-none text-dark">
                 <i class="bi bi-telephone-forward-fill"></i> <?php echo $contact_r['pn1']?>                
              </a>
              <br>
              <br>
              <a href="tel:<?php echo $contact_r['pn2']?> " class="i-inline-block text-decoration-none text-dark">
                 <i class="bi bi-telephone-forward-fill"></i><?php echo $contact_r['pn2']?>               
              </a>
            
              <h5 class="mt-4"> E-mail </h5>
              <a href="mailto: <?php echo $contact_r['email']?>" class="d-inline-block text-decoration-none text-dark">
                 <i class="bi bi-envelope-open-fill"></i> <?php echo $contact_r['email']?>
              </a>
            
              <h5 class="mt-4"> Nous suivre </h5>
              <a href="#" class="d-inline-block  text-dark fs-5 me-2"> 
                  <i class="bi bi-twitter me-1"></i>  
              </a>
              
              <a href="#" class="d-inline-block  text-dark fs-5 me-2">
                  <i class="bi bi-facebook me-1"></i>                
              </a>

              <a href="#" class="d-inline-block text-dark fs-5">
                  <i class="bi bi-instagram me-1"></i>                
              </a>
        </div>
      </div>

      <div class="col-lg- col-md-6 mb-5 px-4">  
        <div class="bg-white rounded shadow p-4">
          <form method="POST">
              <h5> Envoyer un message </h5>
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500;"> Nom </label>
                <input name="name" required type="text" class="form-control shadow-none" placeholder="Votre nom">
              </div>

              <div class="mt-3">
                <label class="form-label" style="font-weight: 500;"> Adresse email </label>
                <input name="email" required type="email" class="form-control shadow-none" placeholder="Votre adresse email">
              </div>

              <div class="mt-3">
                <label class="form-label" style="font-weight: 500;"> Sujet </label>
                <input name="subject" required type="text" class="form-control shadow-none">
              </div>

                <div class="mt-3">
                <label class="form-label" style="font-weight: 500;"> Message </label>
                <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                </div>
                <button type="submit" name="send" class="btn btn-dark text-white mt-3 shadow-none"> Envoyer </button>
          </form>
        </div>         
      </div>
    </div>
  </div>
      
    <?php  
      if(isset($_POST['send'])) {
        $frm_data = filteration($_POST);

        $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];
    
        $res = update($q, $values, 'ssss');
        if($res==1){
          alert('success', 'Votre message a été envoyé avec succès');
        }
        else {
          alert('Erreur' ,'Une erreur est survenue');
        }
    }
    ?>
    
    <?php require_once 'inc/Footer.php'; ?> 

</body>

</html>
