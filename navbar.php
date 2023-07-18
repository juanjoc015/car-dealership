<header>
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container">
            <a class="navbar-brand title" href="index.php">
                <img src="IMG/icon-nom.png" alt="icon" class="icon-nom">    
                <span class="project-name">Garage Vincent Parrot</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex align-items-center justify-content-around w-100 me-auto mb-2 mb-lg-0">
                    <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){ echo 'active'; } ?>">
                        <a class="nav-link" href="index.php">
                            <img src="IMG/icon-2.png" alt="icon-2" class="icon-2">    
                            <span class="elements-menu">Accueil</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'vehicules.php'){ echo 'active'; } ?> ">
                        <a class="nav-link" href="vehicules.php">
                            <img src="IMG/icon-1.png" alt="icon-1" class="icon-1">
                            <span class="elements-menu">Véhicules</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'){ echo 'active'; } ?> ">
                        <a class="nav-link" href="contact.php">
                            <img src="IMG/icon-3.png" alt="icon-3" class="icon-3">
                            <span class="elements-menu">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>