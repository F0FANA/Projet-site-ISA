<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="../../bibliothèque/bootstrap.css">
            <link rel="stylesheet" href="../../bibliothèque/bootstrap-5.1.3/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../navbar/navbar.css">
            <link rel="stylesheet" href="./styles.css" >
            <title>Connexion</title>
        </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="../pages/acceuil/acceuil.html">
                <img src="../../Images/adibaba.png" alt="logo" class="img-logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../Decouvert/decouvert.html">
                      <img src="../../Images/person.svg" alt="Personne"><strong>Nous-découvrir</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../contact/contact.html">
                      <img src="../../Images/telephone.svg" alt="tel">
                      <strong>Nous contacter</strong>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link button" href="../connexion_inscription/index.php" ><strong>Se Connecter</strong></a>
                  </li>
                </ul>  
                <form class="d-flex">
                  <button class="btn btn-outline-dark color" type="submit">
                  <a href="../panier/panier.html">
                <img src="../../Images/shopping-cart.png" alt="shopping-cart" class="cart">
                     <strong>Panier</strong>
                     <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
              </a>
                  </button>
                </form>
              </div>
              
            </div>
          </nav>
<script src="../bibliothèque/bootstrap-5.1.3/js/bootstrap.min.js"></script>
        
        <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block couleur">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php">Inscription</a></p>
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 100px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
            .couleur{
                background-color: #ff6502;
            }
            .couleur:hover{
                background-color: #eb5a00;
            }
        </style>
        </body>
</html>