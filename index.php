<?php

$con = new mysqli("127.0.0.1", "root", "", "concesionario");

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

$sql = "SELECT * FROM voitures LIMIT 4";

$result = mysqli_query($con, $sql);

// $sqlService = "SELECT * FROM ...";
// $resultServices = mysqli_query($con, $sqlService);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Garage d'automobiles Vincent Parrot</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
</head>

<body>
  <?php include('navbar.php'); ?>
  <main>
    <section id="services" class="m-0">
      <div class="img-background">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Présentation des services</h2>
              <div class="title-service">
                <h3 class="section-subheading text-muted fw-bold">Nos services sont conçus pour répondre à tous vos
                  besoins automobiles</h3>
              </div>
            </div>
          </div>
          <div class="row text-center">

            <div class="col-md-4 section-service">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-car fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Entretien de véhicules</h4>
              <p class="text-muted">Nous offrons des services d'entretien régulier pour assurer le bon fonctionnement de
                votre véhicule.</p>
            </div>
            <div class="col-md-4 section-service">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-tools fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Réparations véhicules</h4>
              <p class="text-muted">Notre équipe de techniciens qualifiés peut diagnostiquer et réparer tous les
                problèmes que votre voiture pourrait rencontrer.</p>
            </div>
            <div class="col-md-4 section-service">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-hand-holding-usd fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Vente de véhicules d'occasion</h4>
              <p class="text-muted">Nous proposons une large gamme de véhicules d'occasion de qualité à des prix
                compétitifs.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="opening-hours-section" class="container mt-6 mb-6">
      <div class="sect-horaires">
        <h2 class="text-center">Horaires d'ouverture</h2>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Lundi - Vendredi</h5>
                <p class="card-text">9:00 h - 18:00 h</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Samedi</h5>
                <p class="card-text">9:00 h - 14:00 h</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Dimanche</h5>
                <p class="card-text">Fermé</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-cars">
      <h2 class="h2-cars sect-cars">Certains de nos véhicules</h2>
      <div class="vehicle-list row">

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <!-- Aquí puedes mostrar los vehículos de ocasión disponibles -->
          <div class="vehicle-item  Volkswagen prix-10000 avant2010 col-lg-3 col-md-5">
            <div class="card h-100">
              <img src="<?php echo $row['image_path']; ?>" alt="Car 1" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title"><?php echo $row['name']; ?></h3>
                <p class="card-text">Année: <?php echo $row['year']; ?></p>
                <p class="card-text">kilométrage: <?php echo $row['mileage']; ?> km</p>
                <p class="card-text price">Prix: <?php echo $row['price']; ?> €</p>
                <div class="text-end">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carModal<?php echo $row['id']; ?>">
                    Détails
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="carModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="carModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="carModalLabel"><?php echo $row['name']; ?></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="<?php echo $row['image_path']; ?>" alt="Car 1" class="img-fluid">
                  <p>Année: <?php echo $row['year']; ?></p>
                  <p>kilométrage: <?php echo $row['mileage']; ?> km</p>
                  <p>Prix: <?php echo $row['price']; ?> €</p>
                  <p><?php echo $row['description']; ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                  <a href="contact.php" class="btn btn-primary">Contact</a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

        <div class="text-center m-0">
          <a href="vehicules.php" class="btn btn-primary btn-inline mb-3">Tous nos véhicules</a>
        </div>
      </div>
    </section>
    <section class="container my-5">
      <h2 class="text-center mb-4 title-avis">Avis des clients</h2>

      <div class="row">

        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-body comentaire">
              <h5 class="card-title">Jean Dupont</h5>
              <p class="card-text">Excellent service! J'ai acheté une voiture d'occasion en très bon état et à un bon
                prix. Je recommande vivement cette entreprise.</p>
              <div class="stars">
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-body comentaire">
              <h5 class="card-title">Marie Leblanc</h5>
              <p class="card-text">Une grande variété de voitures et un personnel très serviable. Ils m'ont aidé à
                choisir la voiture parfaite pour moi.</p>
              <div class="stars">
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-body comentaire">
              <h5 class="card-title">Pierre Martin</h5>
              <p class="card-title">Je suis très satisfait de ma nouvelle voiture. Le processus d'achat a été simple et
                rapide. Merci beaucoup!</p>
              <div class="stars">
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
                <span class="star selected">&#9733;</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="container my-5">
      <h3 class="text-center mb-4">Votre avis nous intéresse</h3>
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <form id="avisForm" >
            <div class="mb-3">
              <label for="nom" class="form-label">Votre nom</label>
              <input type="text" class="form-control" id="nom" placeholder="Écrivez votre nom ici...">
            </div>
            <div class="mb-3">
              <label for="commentaire" class="form-label">Votre avis</label>
              <textarea class="form-control" id="commentaire" rows="3"
                placeholder="Écrivez votre avis ici..."></textarea>
            </div>
            <div class="mb-3">
              <label for="rating" class="form-label">Évaluez-nous</label>
              <div id="stars">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
              </div>
              <input type="hidden" id="rating" name="note">
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Poster l'avis</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <?php include('footer.php'); ?>

  <script>
    var stars = document.querySelectorAll('.star');
    var rating = document.getElementById('rating');
    stars.forEach(function (star, index) {
      star.addEventListener('click', function () {
        rating.value = index + 1;
        stars.forEach(function (innerStar, innerIndex) {
          if (innerIndex < index + 1) {
            innerStar.classList.add('selected');
          } else {
            innerStar.classList.remove('selected');
          }
        });
      });
    });

    
    
    document.getElementById('avisForm').addEventListener('submit', function(event) {
      var nom = document.getElementById('nom').value;
      var commentaire = document.getElementById('commentaire').value;
      var ratingValue = rating.value;

      if (!/^[\sa-zA-ZéèêëàâôûîïçÉÈÊËÀÂÔÛÎÏÇ']*$/.test(nom)) {
        alert("Votre nom contient des caractères non autorisés. Veuillez n'utiliser que des lettres et des espaces.");
        event.preventDefault();
      } else if (nom === "") {
        alert("Veuillez insérer votre nom.");
        event.preventDefault();
      } else if (commentaire === "") {
        alert("Veuillez insérer votre avis.");
        event.preventDefault();
      }
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>