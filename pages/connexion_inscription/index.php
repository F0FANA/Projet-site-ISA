<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="../../bibliothèque/bootstrap.css">
            <link rel="stylesheet" href="../../navbar/navbar.css">
            <link rel="stylesheet" href="../acceuil/acceuil.css">
            <link rel="stylesheet" href="./styles.css" >
            <title>Connexion</title>
        </head>
        <body>
        <nav class="navbar navbar-expand-sm navbar-light fixed-top" id="navbar">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item" class="lien">
                    <a href="../acceuil/acceuil.html"><img class="img-logo"  src="../../Images/adibaba.png" alt="logo"></a>
                </li>
                <li class="nav-item" class="lien">
                    <a href="#langages" class="nav-link"><img src="../../Images/person.svg" alt="personne">
                        <strong>Nous Découvrir</strong>
                    </a>
                </li>
                <li class="nav-item" class="lien">
                    <a href="../contact/contact.html" class="nav-link">
                        <img src="../../Images/telephone.svg" alt="personne">
                        <strong>Nous Contacter</strong>
                    </a>
                </li>
                <li class="nav-item" class="lien">
                    <a href="./index.php" class="nav-link, button"><strong>Se Connecter</strong></a>
                </li>
            </ul>
        </div>
    </nav>
        
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