<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="menu">
            <div class='desktopMenu'>
                <nav>
                    <ul>
                        <li><a href="#">Bouquets</a></li>
                        <li><a href="#">Roses</a></li>
                        <li><a href="#">Plantes</a></li> 
                        <li><a href="#">Occasions</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class='navMobile'>
                <div class="lines not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="menuHidden">
                <nav>
                    <ul>
                        <li><a href="#">Bouquets</a></li>
                        <li><a href="#">Roses</a></li>
                        <li><a href="#">Plantes</a></li> 
                        <li><a href="#">Occasions</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div> 
        </div>  
        <div class='background_image'>
            <h1>Le printemps est arrivé !</h1>
            <p>Découvrez la nouvelle collection de bouquets de saison et célébrez l'arrivée des beaux jours.</p>
        </div>
    </header>
    <main>
        <div class='flower_arrangement'>
            <h2>Les compositions florales</h2>
            <article>
                <img src="images/bouquet.jpg" alt="composition florale">
                <section>
                    <p>Pour vous faire plaisir, ou pour une délicate attention , nos mélange floraux s’adaptent à toutes les occasions.<br>
                    </br>Découvrez les créations originales de nos artisans fleuristes, réalisées à parir de fleur fraîches.</p>
                    <button>Voir le catalogue</button>   
                </section>
            </article>
        </div>
        <div class='plants'>
            <h2>Notre sélection de plantes</h2>
            <article>
                <section>
                    <p>Nos fleuristes ont sélectionné pour vous des plantes vertes et fleuries originales qui feront entrer la nature dans votre intérieur!</p>
                    <button>Nos plantes</button>   
                </section>
                <img src="images/plantes.jpg" alt="plantes en pot">
            </article>
        </div>
        <div class='contact'>
            <h2>Nous contacter</h2>
            <div>
                <section>
                    <p>Suivez-nous</p>
                    <a href="#"><img src="logo/icon-facebook.png" alt="icone facebook"></a>
                    <a href="#"><img src="logo/icon-instagram.png" alt="icone instagram"></a>
                    <a href="#"><img src="logo/icon-pinterest.png" alt="icone pinterest"></a>
                    <a href="#"><img src="logo/icon-youtube.png" alt="icone youtube"></a>
                </section>
                <form method="POST">
                    <h3>Envoyer une demande</h3>
                    <div>
                        <label for="mail">Adresse e-mail</label>
                        <input type="email" name="mail"  required>
                    </div>
                    <div>
                        <label for="subject">Objet de la demande</label>
                        <input type="text" name="subject" required>
                    </div>
                    <div>
                    <label for="message">Description</label>
                    <textarea rows="10" name="message" required></textarea>
                    </div>
                    <input type="submit" name="submit" value="Envoyer" id="submit">
                </form>
                <?php 
                if(isset($_POST['submit'])){
                    $dest = "caroline.webdev@gmail.com";
                    $sujet = $_POST['subject'];
                    $message = $_POST['message'];
                    $header = 'From: ' .$_POST['mail'];

                    mail($dest, $sujet, $message, $header);
                }
                ?>
            </div>
        </div>
    </main>
    <footer>
    <p>©2021 Fleuristes, Tous droits réservés.</p>
    </footer>
    <script src="main.js"></script>
</body>
</html>