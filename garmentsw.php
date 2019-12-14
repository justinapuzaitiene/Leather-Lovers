<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Custom Leather Jackets</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/garments.css">
    <link rel="stylesheet" href="css/parduotuve.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
</head>

<body>

    <header>
        <?php
        include('views/navbarg.php');
        ?>
    </header>

    <main>
        <div class="moteruall">
            <!--FILTER-->
            <div class="moteru">Our Garments</div>
            <hr class="linija">
            <div id="filters">
                <button id="all-filter"onclick="filterSelection('all')">All</button>
                <button id="woman-filter" onclick="filterSelection('woman')">Woman</button>
                <button id="men-filter" onclick="filterSelection('men')">Men</button>
            </div>
            <!--IMG GALLERY-->
            <div id="moterucont" class="image-gallery">
                <div class="pvz woman item">
                    <a href="images/a.jpg"><img src="images/a.jpg" alt="woman with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz woman item">
                    <a href="images/b.jpg"><img src="images/bs.jpg" alt="woman with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz woman item">
                    <a href="images/c.jpg"><img src="images/c.jpg" alt="woman with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz woman item">
                    <a href="images/d.jpg"><img src="images/d.jpg" alt="woman with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz men item">
                    <a href="images/e.jpg"><img src="images/es.jpg" alt="man with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz men item">
                    <a href="images/f.jpg"><img src="images/f.jpg" alt="man with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz men item">
                    <a href="images/g.jpg"><img src="images/g.jpg" alt="man with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz men item">
                    <a href="images/h.jpg"><img src="images/h.jpg" alt="man with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz men item">
                    <a href="images/v.jpg"><img src="images/vs.jpg" alt="man with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz woman item">
                    <a href="images/m.jpg"><img src="images/m.jpg" alt="woman with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz men item">
                    <a href="images/vv.jpg"><img src="images/vv.jpg" alt="man with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz woman item">
                    <a href="images/mm.jpg"><img src="images/mms.jpg" alt="woman with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz men item">
                    <a href="images/vvv.jpg"><img src="images/vvvs.jpg" alt="man with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz woman item">
                    <a href="images/mmm.jpg"><img src="images/mmms.jpg" alt="woman with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz men item">
                    <a href="images/vvvv.jpg"><img src="images/vvvvs.jpg" alt="man with a jacket" style="cursor:pointer"></a>
                </div>
                <div class="pvz woman item">
                    <a href="images/mmmm.jpg"><img src="images/mmmm.jpg" alt="woman with a jacket" style="cursor:pointer"></a>
                </div>
            </div>
        </div>

    <?php
    include('views/footer.php');
    ?>

    <script src="js/jquery.js"></script>
    <script src="js/garmentsw.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

</body>

</html>