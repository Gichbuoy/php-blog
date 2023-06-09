<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sips & Stories - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Sips & Stories</div>
    <div class="address-bar">00100 Nairobi | Kenya, NRB 90210 | +254.456.7890</div>

    <?php
		
        if (isset($_GET["logout"])) {   //check if the variable logout is contained in url using GET
            
            if ($_GET["logout"] == "true") { ?>
                
                <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>You have been logged out of the system.</strong>
                </div>   
    
        <?php
            }
        }
        ?>

   <!-- Navigation -->
   <?php require_once 'nav.php'; ?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Sips & Stories</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Alex Maina</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Exploring Coffee Culture
                        <strong>Stories from bean to cup</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Uncover fascinating stories, traditions, and customs associated with coffee from different regions and cultures, all around the globe. Mind blowing journey to discover the artistry behind various brewing methods, the significance of coffee rituals, and the unique characteristics of different coffee varieties.</p>
                    <p> Through compelling narratives, engaging anecdotes, and expert insights, "Exploring Coffee Culture" offers a deeper appreciation for the global phenomenon that is coffee and invites readers to explore the multifaceted aspects of this beloved beverage. </p>
                    <p>Whether you're a coffee aficionado, a curious explorer, or simply someone who enjoys a good cup of joe, this blog delves into the rich and diverse world of coffee, and is sure to delight and inspire your love for coffee culture.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Caffeinated Chronicles
                        <strong>Tales of Coffee, and Inspiration</strong>
                    </h2>
                    <hr>
                    <p>We offer a variety of educational resources to help coffee lovers expand their knowledge and enhance their brewing skills. Our blog serves as a hub for captivating articles, in-depth guides, and thought-provoking stories that delve into the world of coffee from bean to cup. <br>
                    Whether you're curious about the origins of your favorite brew, interested in mastering different brewing techniques, or eager to discover unique coffee traditions from around the world, our blog has you covered. <br>
                    At Sips and Stories, we believe that coffee is more than just a daily ritual,it's an opportunity to connect with others, explore new flavors, and celebrate the artistry behind every sip. <br>
                    Join us on this exciting adventure as we share the stories, traditions, and techniques that make coffee an extraordinary part of our lives. Cheers to the beauty of coffee culture!</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Sips & Stories 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
