<?php 
declare(strict_types=1);
$title = "Page d'acceuil";
define("PAGE", "index");

include '../require/header.php';
?>
<link rel="stylesheet" href="../assets/css/index.css">

<main>
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 col-md-12 col-lg-12 ">
                <h2>Vendez dans le monde en entier et sur toutes les canaux et les plateformes</h2>
                <p class="text">Une plateforme unique qui vous permet de vendre là où se trouvent vos clients: 
                    en ligne ou en boutique et partout ailleurs.
                </p>
                <button type="button" class="btn btn-dark rounded-3">Démarrer un essai gratuit</button>
            </div>
        </div>

        <!-- Level 1 -->
        <div class="row my-4">
            <div class="col-md-12 col-sm-12 col-lg-6">
                <img src="../assets/images/hero-large.png" alt="TOP-LARGE" class="img-fluid w-100">
            </div>

            <div class="col-md-12 col-sm-12 col-lg-6">
                <p><span class="text-uppercase">Canaux de vente</span></p>
                <h2>Vendez vos produits sur tous les canaux</h2>
                <p>Séduisez des millions de clients, vendez partout et gérer toute votre activité depuis codeur-store.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni totam sequi, non eligendi ut nobis dicta suscipit vitae! At distinctio quasi eos dolorum magni quod consectetur natus pariatur ex laborum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vel rem debitis suscipit totam. Quaerat amet fugit explicabo, repellendus natus beatae aut saepe dignissimos, rem voluptatem doloremque, aliquam obcaecati a?
                </p>
                <a href="../pages/shop/watch.php"><button type="button" class="btn btn-primary">WATCH-MONTRE ROLES</button></a>
            </div>
        </div>

    </div>

        <!-- Level 2 -->
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 col-sm-12 col-lg-6">
                <p><span class="text-uppercase">Canaux de vente</span></p>
                <h2>Vendez vos produits sur toutes les plateformes de shopify</h2>
                <p>Visualisez, attirez des millions de clients, vendez partout et gérer toute votre activité depuis codeur-store.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni totam sequi, non eligendi ut nobis dicta suscipit vitae! At distinctio quasi eos dolorum magni quod consectetur natus pariatur ex laborum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vel rem debitis suscipit totam. Quaerat amet fugit explicabo, repellendus natus beatae aut saepe dignissimos, rem voluptatem doloremque, aliquam obcaecati a?
                </p>
                <a href="../pages/shop/shoes.php"><button type="button" class="btn btn-primary">SHOES-MEN-WOMEN</button></a>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-6">
                <img src="../assets/images/hero-large-1.png" alt="TOP-LARGE" class="img-fluid">
            </div>
        </div>
    </div>

    <!--Level 3  -->
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 col-sm-12 col-lg-6">
                <img src="../assets/images/hero-tshirt.png" alt="TOP-LARGE" class="img-fluid w-100">
            </div>

            <div class="col-md-12 col-sm-12 col-lg-6">
                <p><span class="text-uppercase">Canaux de vente</span></p>
                <h2>Vendez vos produits sur tous les canaux et les plateformes</h2>
                <p>Séduisez des millions de clients, vendez partout et gérer toute votre activité depuis codeur-store.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni totam sequi, non eligendi ut nobis dicta suscipit vitae! At distinctio quasi eos dolorum magni quod consectetur natus pariatur ex laborum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vel rem debitis suscipit totam. Quaerat amet fugit explicabo, repellendus natus beatae aut saepe dignissimos, rem voluptatem doloremque, aliquam obcaecati a?
                </p>
                <a href="../pages/shop/phone.php"><button type="button" class="btn btn-primary">T-SHIRT & OTHERS</button></a>
            </div>
        </div>

        <!-- Market -->
        <div class="row my-5">
            <div class="col-md-4 col-sm-6 col-lg-4">
                <p class="h4">Marketplaces</p>
                <p>Vendez là où les gens achètent en reliant votre catalogue Codeur-store à de nombreuses places de marché en ligne.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4">
                <p class="h4">Média Sociaux</p>
                <p>Développez votre audience avec des outils intégrés qui vous aident à vendre sur Facebook, Instagram, TikTok et plus encore.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4">
                <p class="h4">Recherche en ligne</p>
                <p>Synchronisez vos produits sur Google et référencez-les gratuitement sur ses plateformes.</p>
            </div>
        </div>

        
    </div>


    <div class="container">
        <!-- Applications -->
        <div class="row my-5">
            <div class="col-md-6 col-sm-12 col-lg-6 my-3">
                <div class="border border-dark rounded-3 p-3">
                    <div class="">
                        <i class="fa-solid fa-basket-shopping fa-2x bg-primary p-3 rounded-3 text-white"></i>
                    </div>
                    <div class="titre">
                        <p class="fw-bold my-2">LinkPop</p>
                    </div>
                    <p>Avec LinkPop, un outil gratuit de lien en bio conçu pour le commerce, transformez votre audience en vivier de clients 
                        en exploitant votre bio sociale.
                    </p>
                    <p><a href="#" class="text-dark text">Publier un lien d'achat dans votre bio</a></p>

                </div>
            </div>
         
            <div class="col-sm-12 col-md-6 col-lg-6 my-3">
                <div class="border border-dark border-1 rounded-3 p-3">
                    <div class="">
                        <i class="fa-solid fa-bag-shopping fa-2x bg-primary p-3 rounded-3 text-white"></i>
                    </div>
                    <div class="titre">
                        <p class="fw-bold my-2">Shop</p>
                    </div>
                    <p>Activez Shop pour atteindre de nouveaux clients en proposant une expérience d'achat mobile intégrée et un paiement en un clic
                        plus facile et rapide.
                    </p>
                    <p><a href="#" class="text-dark text">Configurer Shop</a></p>

                </div>
            </div>

        </div>
    </div>




</main>


<!-- Pour intégration du footer -->

<?php include "../require/footer.php"; ?>
