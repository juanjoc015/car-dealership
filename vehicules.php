<?php

$con = new mysqli("127.0.0.1", "root", "", "concesionario");

if ($con->connect_errno) {
  echo "Failed to connect to MySQL: " . $con->connect_error;
  exit();
}

$sql = "SELECT * FROM voitures";

$result = mysqli_query($con, $sql);

$sqlService = "SELECT * FROM ...";
$resultServices = mysqli_query($con, $sqlService);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>véhicules</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
</head>

<body>
  <?php include('navbar.php'); ?>

  <section class="section-cars">
    <h2 class="h2-cars">Tous nos véhicules d'occasion</h2>
    <form id="filtre-voitures" class="mx-auto text-center form-filtre">
      <label for="marque">Choisissez une marque:</label>
      <select id="marque" name="marque" class="form-select form-select-sm">
        <option value="toutes">Toutes</option>
        <option value="Volkswagen">Volkswagen</option>
        <option value="Audi">Audi</option>
        <option value="Toyota">Toyota</option>
        <option value="BMW">BMW</option>
      </select>
      <label for="prix">Filtrer par prix :</label>
      <select id="prix" name="prix" class="form-select form-select-sm">
        <option value="tous">Tous les prix</option>
        <option value="10000">Moins de 10,000€</option>
        <option value="20000">Moins de 20,000€</option>
        <option value="30000">Moins de 30,000€</option>
        <option value="40000">Plus de 30,000€</option>
      </select>
      <label for="annee">Filtrer par Année</label>
      <select id="annee" name="annee" class="form-select form-select-sm">
        <option value="toutes">Toutes les années</option>
        <option value="avant2010">Avant 2010</option>
        <option value="2010-2015">2010 - 2015</option>
        <option value="apres2015">Après 2015</option>
      </select>
      <div class="m-3">
        <button type="submit" class="btn btn-primary" style="padding: 10px;">Filtrer</button>
      </div>
    </form>
    <div class="vehicle-list row m-2 mb-5">
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
    </div>

    

    </div>
  </section>

  <!-- Footer -->
  <?php include('footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>