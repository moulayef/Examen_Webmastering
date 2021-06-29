<nav class="navbar navbar-expand-sm navbar-light bg-danger">
    <a class="navbar-brand" href="#">GESTION DE CONTENU</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

          <?php if(is_connect()): ?>   
            <li class="nav-item active">
                <a class="nav-link" href="<?php if(is_admin()){echo WEB_ROOT."?controller=security&page=accueil.admin";} if(is_lecteur()){echo WEB_ROOT."?controller=security&page=accueil.lecteur";} if(is_gestionnaire()){echo WEB_ROOT."?controller=security&page=accueil.gestionnaire";} else{echo WEB_ROOT."?controller=security&page=accueil.redacteur";}?>"> Home <span class="sr-only">(current)</span></a>
            </li>
          <?php endif ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo WEB_ROOT."?controller=security&page=lister.utilisateur"?>">Lister utilisateur</a>
            </li>
        </ul>

            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo WEB_ROOT."?controller=security&page=connexion"?>">Connexion<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo WEB_ROOT."?controller=security&page=inscription"?>">inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo WEB_ROOT."?controller=security&page=deconnexion"?>">Deconnexion</a>
                </li>
            </ul>
       
        
    </div>
</nav>