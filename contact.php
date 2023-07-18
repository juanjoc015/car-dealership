<!DOCTYPE html>
<html lang="en">

<head>
  <title>Garage d'automobiles Vincent Parrot</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
</head>

<body>
  <?php include('navbar.php'); ?>
  <section>
    <div class="container section-contact">
      <div class="row">
        <div class="col-12">
          <span class="text-contact">
            <h2 class="title-form-contact">Contact</h2>
            <p>Vous pouvez nous contacter via le formulaire suivant :</p>
          </span>
          <form id="contact-Form">
            <div class="mb-3">
              <label for="name" class="form-label">Nom: <span class="requi">*</span></label>
              <input type="text" id="name" name="name" class="form-control">
            </div>

            <div class="mb-3">
              <label for="prenom" class="form-label">Prénom: <span class="requi">*</span></label>
              <input type="text" id="prenom" name="prenom" class="form-control">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email: <span class="requi">*</span></label>
              <input type="text" id="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
              <label for="phone">Téléphone:</label>
              <input type="text" id="phone" name="phone" class="form-control">
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Message: <span class="requi">*</span></label>
              <textarea id="message" name="message" class="form-control"></textarea>
            </div>
            <div class="d-flex justify-content-center m-5">
            <input type="submit" value="Envoyer" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php include('footer.php'); ?>

  <script>
    document.getElementById('contact-Form').addEventListener("submit", function (event) {
        var name = document.getElementById('name').value;
        var prenom = document.getElementById('prenom').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;
        var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; // pour la validation d'adresse e-mail

        if (name === "" || prenom === "" || email === "" || message === "") {
            alert("Veuillez remplir tous les champs obligatoires-(*), s'il vous plaît.");
            event.preventDefault(); // Empêcher la soumission du formulaire
            return;
        }

        if (!email.match(emailPattern)) {
            alert("Veuillez entrer une adresse e-mail valide, s'il vous plaît.");
            event.preventDefault(); // Empêcher la soumission du formulaire
        }
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>