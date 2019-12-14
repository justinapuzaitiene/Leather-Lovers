<?php
require __DIR__ . "/src/app.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Custom Leather Jackets</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/parduotuve.css">
    <link rel="stylesheet" href="garmentsw.php">
    <link rel="stylesheet" href="garmentsm.php">
    <link rel="stylesheet" href="garments.php">
    
</head>

<body>
    <header>
        <?php
        include('views/navbar.php');
        ?>
    </header>

    <main>
        <div class="banner">
            <img src="images/cover.jpg" alt="photo of sexy Keanu Reeves">
        </div>
        <!--PAGE ABOUT-->
        <div id="pageabout">
            <div class="pageaboutcont">
                <p class="apibudinimas">We are <b>LeatherLovers</b> and we make finest quality custom and ready-to-wear leather jackets accessible to everyone.</p>
                <p class="apibudinimas">All of our jackets are real full grain leather. We believe in quality goods that will stand the test of time. Our leather will fit you like a glove, will age beautifully the more it’s worn, and will be passed down in your family, like all solid leather goods should be.</p>
            </div>
        </div>
        <!--WOMEN ATTIRE-->
        <div class="moteruall">
            <div class="moteru">Woman Attire</div>
            <hr>
            <div class="moterucont">
                <div class="fig">
                    <img src="images/a.jpg" alt="woman with a jacket">
                    <div class="figc">
                        <div><a href="garmentsw.php">More</a></div>
                    </div>
                </div>
                <div class="fig">
                    <img src="images/bs.jpg" alt="woman with a jacket">
                    <div class="figc">
                        <div><a href="garmentsw.php">More</a></div>
                    </div>
                </div>
                <div class="fig">
                    <img src="images/c.jpg" alt="woman with a jacket">
                    <div class="figc">
                        <div><a href="garmentsw.php">More</a></div>
                    </div>
                </div>
                <div class="fig">
                    <img src="images/d.jpg" alt="more garments" />
                    <div class="figc">
                        <div><a href="garmentsw.php">More</a></div>
                    </div>
                </div >
            </div>
        </div>
        <!--MEN ATTIRE-->
        <div class="moteruall">
            <div class="moteru">Man Attire</div>
            <hr>
            <div class="moterucont">
                <div class="fig">
                    <img src="images/es.jpg" alt="more garments">
                    <div class="figc">
                        <div><a href="garmentsm.php">More</a></div>
                    </div>
                </div>
                <div class="fig">
                    <img src="images/f.jpg" alt="more garments">
                    <div class="figc">
                        <div><a href="garmentsm.php">More</a></div>
                    </div>
                </div>
                <div class="fig">
                    <img src="images/g.jpg" alt="more garments">
                    <div class="figc">
                        <div><a href="garmentsm.php">More</a></div>
                    </div>
                </div>
                <div class="fig">
                    <img src="images/h.jpg" alt="more garments">
                    <div class="figc">
                        <div><a href="garmentsm.php">More</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--ABOUT CUSTOM-->
        <div id="custom">
            <div class="customm">Custom Garments</div>
            <hr class="chr">
            <div class="customcont">
                <div><img src="images/odos.jpg" alt="stack of leather"></div>
                <div class="detales">
                    <p class="apibud">Express your individuality by designing your very own custom leather jacket! <br><br> Our leather will fit you like a glove, will age beautifully, and will be passed down in your family, like all solid leather goods should be. </p>
                </div>
            </div>
        </div>
        <!--CONTACT US FORM-->
        <div id="contact">
            <div class="container">
                <div>
                    <div class="moteru">Contact us</div>
                    <hr>
                    <div class="col-md-3">
                        <p class="eve">Every aspect of your jacket is customizable, from lining colors and types, to hardware colors and leather types.<br><br> Simply write us what you desire!</p>
                    </div>
                    <div class="col-md-9">
                        <form action="src/app.php" method="post" >
                            <div class="group">
                                <input type="text" name="vardas" required autocomplete="off"><span class="bar"></span><label>Name</label>
                            </div>
                            <div class="group">
                                <input type="email" name="email" required autocomplete="off"><span class="bar"></span><label>Email</label>
                            </div>
                            <div class="group" >
                                <textarea id="textas" required name="message"></textarea><span class="bar"></span><label>Message</label>
                            </div>
                            <input name="submit" type="submit" value="Send Message" id="contact-submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('views/footer.php');
        ?>
        
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>