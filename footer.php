<!-- Footer -->
<footer class="footer bg-dark text-white">
    <div class="container-fluid py-5 px-5">
        <div class="row align-items-start gx-3">
            <!-- About section -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5>À propos de nous</h5> <!-- About Us -->
                <p>Vincent Parrot, votre concessionnaire de confiance depuis 2000. Nous proposons une large sélection de
                    véhicules d'occasion de qualité.</p>
            </div>

            <div class="col-lg-2 col-md-6 mb-4">
                <h5>Liens Rapides</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white">Accueil</a></li>
                    <li><a href="vehicules.php" class="text-white">Véhicules d'occasion</a></li>
                    <li><a href="contact.php" class="text-white">Contactez-nous</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 mb-4">
                <h5>Horaires d'ouverture</h5>
                <ul class="list-unstyled">
                    <li>Lundi - Vendredi: 9h00 - 18h00</li>
                    <li>Samedi: 9h00 - 14h00</li>
                    <li>Dimanche: Fermé</li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5>Contactez-nous</h5>
                <p>123 Rue de l'Automobile, 75000 Paris, France</p>
                <p>Email: <a href="mailto:info@automoto.com"> info@autocars.com</a></p>
                <p>Téléphone: <a href="tel:+33123456789">+33 1 23 45 67 89</a></p>
            </div>

            <!-- Connexion section -->
            <div class="col-lg-3 col-md-12 mb-4">
                <h5>Connexion</h5> <!-- Inicio de sesión -->
                <form id="loginForm">
                    <div class="form-group">
                        <label for="email">Adresse e-mail:</label> <!-- Correo electrónico -->
                        <input type="text" class="form-control" id="email" placeholder="Entrez votre e-mail ici" name="email" > <!-- Ingrese su correo -->
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mot de passe:</label> <!-- Contraseña -->
                        <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe ici" name="pswd" > <!-- Ingrese su contraseña -->
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Se souvenir de moi
                            <!-- Recordarme -->
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-filtre">Se connecter</button> <!-- Iniciar sesión -->
                </form>
            </div>
        </div>
    </div>
    <div class="text-center py-3 bg-dark text-white">&copy; 2023</div>
</footer>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        var email = document.getElementById('email').value;
        var pwd = document.getElementById('pwd').value;

        // Modèle email
        var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        // Modèle de mot de passe : Au moins 8 caractères, 1 lettre majuscule, 1 lettre minuscule et 1 chiffre
        var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

        if (email === "" || !emailPattern.test(email)) {
            if(email === "") {
                alert("Veuillez insérer votre adresse e-mail.");
            } else {
                alert("Veuillez insérer une adresse e-mail valide.");
            }
            
            event.preventDefault();
        } else if (pwd === "" || !passwordPattern.test(pwd)) {
            if(pwd === "") {
                alert("Veuillez insérer votre mot de passe.");
            } else {
                alert("Votre mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre.");
            }
            event.preventDefault();
        }
    });
</script>