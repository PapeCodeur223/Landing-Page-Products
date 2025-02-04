<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)){echo $title;} else{echo "Mon Site";}; ?></title>

    <link rel="stylesheet" href="../assets/dist/css/bootstrap.css">
    <script src="../assets/dist/js/bootstrap.js"></script>
    <script src="../assets/boostrap-material-7.2.0/css/mdb.rtl.min.css"></script> 
    <link rel="stylesheet" href="../assets/fontawesone/fontawesome-free-6.5.2-web/css/all.min.css">

</head>
<body>
    <header class="py-5">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
            <div class="container">
                <a href="#" class="navbar-brand text-uppercase bg-primary bg-gradient p-1 
                rounded-3 text-light fw-bold">Codeur-Store</a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarIcon"
                aria-controls="navbarIcon" aria-label="Toggle navigation" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
                </button>


                <div id="navbarIcon" class="collapse navbar-collapse justify-content-end">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="../pages/index.php" class="nav-link fw-bold <?php if(PAGE == 'index'){echo "active";} ?>">ACCEUIL</a></li>
                        <li class="nav-item dropdown">
                            <a href="../pages/shop.php" class="nav-link dropdown-toggle fw-bold <?php if(PAGE == 'shop'){echo "active";} ?>" data-bs-toggle="dropdown" role="button" aria-expanded="false">BOUTIQUE</a>
                            
                            <ul class="dropdown-menu">
                                <li><a href="#scrollspyHeading4" class="dropdown-item">PHONES</a></li>
                                <li><a href="#scrollspyHeading5" class="dropdown-item">WATCH</a></li>
                                <li><a href="#scrollspyHeading6" class="dropdown-item">PARFUMS</a></li>
                                <li><a href="#scrollspyHeading7" class="dropdown-item">LUNETTES</a></li>

                            </ul>
                            
                        </li>
                        <li class="nav-item"><a href="../pages/sales.php" class="nav-link fw-bold <?php if(PAGE == 'sales'){echo "active";} ?>">VENTE EN VEDETTE</a></li>
                        <li class="nav-item"><a href="../pages/contact.php" class="nav-link fw-bold <?php if(PAGE == 'contact'){echo "active";} ?>">CONTACT</a></li>
                    </ul>
                </div>


            
            </div>
        </nav>

    </header>
    
</body>
</html>


