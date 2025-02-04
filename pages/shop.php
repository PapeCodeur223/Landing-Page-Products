<?php 
declare(strict_types=1);
$title = "Boutique";
define("PAGE", "shop");

include '../require/header.php';

?>

<link rel="stylesheet" href="../assets/css/shop.css">

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="text-uppercase text-info">Un paiement rapide et fiable</span>
            </div>
            <div class="col-lg-6 button-search">
                <form action="" id="search">
                    <div class="input-group">
                        <input type="text" placeholder="Je cherche..." class="form-control">
                        <button type="submit" class="btn btn-primary">Allez-y</button>
                    </div>

                </form>
            </div>

            <h1>Propulsez votre entreprise avec le processus de paiement le plus performant du monde.</h1>
            <p>Le moyen le plus simple de convertir des clients en potentiels et de saisir chaque paiement.</p>
        </div>
        <div class="row">
            <img src="../assets/images/top-large.jpg" class="img-fluid" alt="TOP-LARGE">
        </div>
        
    </div>
</div>

<div class="main py-4">
    <div class="container">
        <div class="row">
            <h2>Découvrez comment Codeur-Shop peut vous aider à accomplir plus avec votre entreprise, quels 
                que soient les produits que vous vendez.
            </h2>
            
        </div>
        <div class="row py-4">
            <div class="col-sm-4 col-md-3 col-lg-3 gy-3">
                <a href="#vetements"><button type="button" class="btn btn-outline-primary w-100 py-2">Ventes des vêtements</button></a>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 gy-3">
                <a href="#chaussures"><button type="button" class="btn btn-outline-primary w-100 py-2">Ventes des chaussures</button></a>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 gy-3">
                <a href="#watch"><button type="button" class="btn btn-outline-primary w-100 py-2">Ventes des montres</button></a>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 gy-3">
                <a href="#lunettes"><button type="button" class="btn btn-outline-primary w-100 py-2">Ventes des lunettes</button></a>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 gy-3">
                <a href="#parfums"><button type="button" class="btn btn-outline-primary w-100 py-2">Ventes des parfums</button></a>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 gy-3">
                <a href="#phones"><button type="button" class="btn btn-outline-primary w-100 py-2">Ventes des phones</button></a>
            </div>
    
        </div>        
    </div>

    <div class="container py-4 border bg-light">
        <div class="row" id="vetements">
            <div class="col-sm-3 col-md-4 col-lg-3 others-size">
                <img src="../assets/images/clothes/4.jpg" class="img-fluid w-100 floud" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">54.32€</span>
                </div>
                <style>
                    .floud{height: 260px; }
                </style>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3">
                <img src="../assets/images/clothes/first.png" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">9.99€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3">
                <img src="../assets/images/clothes/eight.png" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">16.77€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3 others-size">
                <img src="../assets/images/clothes/1.jpg" class="img-fluid w-100 floud" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">50.77€</span>
                </div>
                <style>
                    .floud{height: 260px; }
                </style>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6">
            <a href="shop/clothes.php"><button type="button" class="btn btn-primary w-100 fs-4">Voir les vêtements</button></a>
            </div>
        </div>
    </div>      
</div>

<!-- Chaussures -->
<div class="section" id="chaussures">
    <!--  -->
    <div class="container py-4 border bg-light gy-4">
        <div class="row">
            <div class="col-sm-3 col-md-4 col-lg-6 others-size">
                <img src="../assets/images/shoes/figma/11.jpeg" class="img-fluid w-100" alt="img-vetement">
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3">
                <img src="../assets/images/shoes/figma/12.jpeg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">96.33€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3">
                <img src="../assets/images/shoes/figma/figma.png" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">120.56€</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <a href="shop/shoes.php"><button type="button" class="btn btn-primary w-100 fs-4">Voir les chaussures</button></a>

            </div>
        </div>
    </div>
</div>

<!-- Montres -->
<div class="section py-4" id="watch">
    <!--  -->
    <div class="container py-4 border bg-light gy-4">
        <div class="row">
            <div class="col-sm-3 col-md-4 col-lg-3 others-size">
                <img src="../assets/images/watch/1.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">105.56€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3">
                <img src="../assets/images/watch/2.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">95.33€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3">
                <img src="../assets/images/watch/3.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">90.22€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3 others-size">
                <img src="../assets/images/watch/4.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">100.56€</span>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-lg-6">
                <a href="shop/shoes.php"><button type="button" class="btn btn-primary w-100 fs-4">Voir les montres</button></a>

            </div>
        </div>
    </div>
</div>

<!-- Lunettes -->
<div class="py-4" id="lunettes">
    <!--  -->
    <div class="container py-4 border bg-light gy-4">
        <div class="row">
            <div class="col-sm-3 col-md-4 col-lg-4 others-size">
                <img src="../assets/images/lunettes/41.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">76.33€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-4">
                <img src="../assets/images/lunettes/42.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">70.12€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-4">
                <img src="../assets/images/lunettes/43.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">72.12€</span>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <a href="shop/lunettes.php"><button type="button" class="btn btn-primary w-100 fs-4">Voir les lunettes</button></a>

            </div>
        </div>
    </div>
</div>

<!-- Parfums -->
<div class="py-4" id="parfums">
    <!--  -->
    <div class="container py-4 border bg-light gy-4">
        <div class="row">
            <div class="col-sm-3 col-md-4 col-lg-4 others-size">
                <img src="../assets/images/parfums/1.jpg" class="img-fluid w-100 parfums" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">34.66€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-4">
                <img src="../assets/images/parfums/2.jpg" class="img-fluid w-100 parfums" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">32.45€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-4">
                <img src="../assets/images/parfums/3.jpg" class="img-fluid w-100 parfums" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">35.15€</span>
                </div>
            </div>

            <style>
                .parfums{
                    width: 355.552px !important;
                    height: 355.552px !important;
                }
            </style>

        </div>

        <div class="row">
            <div class="col-lg-6">
                <a href="shop/parfums.php"><button type="button" class="btn btn-primary w-100 fs-4">Voir les parfums</button></a>

            </div>
            <div class="col-lg-12"></div>
        </div>
    </div>
</div>

<!-- Phones -->
<div class="section py-4" id="phones">
    <!--  -->
    <div class="container py-4 border bg-light gy-4">
        <div class="row">
            <div class="col-sm-3 col-md-4 col-lg-3 others-size">
                <img src="../assets/images/phones/29.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">98.80€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3">
                <img src="../assets/images/phones/1.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">95.33€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3">
                <img src="../assets/images/phones/2.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">90.22€</span>
                </div>
            </div>

            <div class="col-sm-3 col-md-4 col-lg-3 others-size">
                <img src="../assets/images/phones/3.jpg" class="img-fluid w-100" alt="img-vetement">
                <div class="row">
                    <span class="text-primary fs-4  p-1 my-2 text-center">100.56€</span>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-lg-6">
                <a href="shop/phones.php"><button type="button" class="btn btn-primary w-100 fs-4">Voir les phones</button></a>

            </div>
        </div>
    </div>
</div>




<?php include "../require/footer.php"; ?>