<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sips & Stories - Blog</title>

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

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a>

                    </h2>
                    <hr>
                    <h2 class="intro-text text-center">Sips & Stories
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Exploring Coffee Culture
                        <br>
                        <small>January 16, 2023</small>
                    </h2>
                    <p>Welcome to a journey into the captivating world of coffee culture. Join us as we delve into the stories and traditions that surround the humble coffee bean, from its origins to the final moments when it fills your cup with warmth and flavor. <br>Coffee is more than just a beverage; it's a global phenomenon that has shaped societies, rituals, and friendships for centuries....</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Caffeinated Chronicles
                        <br>
                        <small>December 08, 2022</small>
                    </h2>
                    <p>Welcome to Caffeinated Chronicles, where we embark on a journey through the intertwined worlds of coffee, conversations, and inspirations. Prepare to be captivated by the tales that unfold, as we explore the profound impact that this humble beverage has on our lives.<br> Coffee has a remarkable ability to bring people together, to spark connections, and to ignite conversations....</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Brewing Memories
                        <br>
                        <small>May 30, 2023</small>
                    </h2>
                    <p>Welcome to Brewing Memories, a place where we embark on a captivating journey through the vast and enchanting realm of the coffee world. Prepare to be immersed in a tapestry of flavors, traditions, and unforgettable tales that will ignite your senses and inspire your love for all things coffee. <br>In this ever-evolving landscape of coffee, we explore the rich heritage and diverse origins that give each cup its unique character....</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!--Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Exploring Coffee Culture</h4>

                </div>
                <div class="modal-body">
                    <p>Welcome to a journey into the captivating world of coffee culture. Join us as we delve into the stories and traditions that surround the humble coffee bean, from its origins to the final moments when it fills your cup with warmth and flavor. <br>

Coffee is more than just a beverage; it's a global phenomenon that has shaped societies, rituals, and friendships for centuries. Each cup tells a tale, reflecting the heritage and craftsmanship behind its creation. <br>

We begin our exploration at the very source – the coffee plantations. Venture with us to remote corners of the world, where dedicated farmers nurture the coffee trees, carefully harvesting each ripe cherry. Discover the labor of love that goes into every bean, from the meticulous picking process to the sun-drying techniques that enhance its flavors.<br>

As we follow the journey of these beans, we encounter the artistry of the roasters. Uncover the secrets of roasting, as skilled individuals coax out the unique characteristics and aromas hidden within each batch. Witness the precision and passion that transforms green beans into a spectrum of flavors. <br>

Next, we step into the realm of brewing methods. From the classic French press to the intricate pour-over techniques, we explore the diverse ways in which coffee is prepared and savored. Join us as we delve into the rituals, the equipment, and the mindfulness that goes into each brew, elevating it from a simple beverage to a sensory experience.<br>

But coffee culture is more than just the liquid in the cup. It encompasses the communities that gather around it, the conversations it sparks, and the connections it fosters. We invite you to partake in the stories shared over a steaming cup of joe – tales of friendships formed, ideas exchanged, and memories created.<br>

So, come with us on this journey of exploration. Let's dive into the vast ocean of coffee culture, immersing ourselves in its stories, traditions, and flavors. Together, let's celebrate the intelligence and thoughtfulness that lies within every sip, and embrace the magic of coffee as it enriches our lives from bean to cup.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dafault" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Modal 2 -->
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Caffeinated Chronicles</h4>

                </div>
                <div class="modal-body">
                    <p> Welcome to Caffeinated Chronicles, where we embark on a journey through the intertwined worlds of coffee, conversations, and inspirations. Prepare to be captivated by the tales that unfold, as we explore the profound impact that this humble beverage has on our lives.<br>

Coffee has a remarkable ability to bring people together, to spark connections, and to ignite conversations that have the power to shape our thoughts and perspectives. Join us as we delve into the anecdotes and experiences that have emerged from the warmth of a coffee cup. <br>

In the midst of our caffeinated adventures, we encounter the storytellers, the individuals whose lives have been touched by coffee in extraordinary ways. From passionate baristas to visionary coffee shop owners, we uncover the stories behind their craft, their inspirations, and their unwavering dedication to the pursuit of excellence. <br>

As we sip on our favorite brews, we engage in meaningful conversations that transcend the surface level. We explore the power of dialogue and the art of active listening, as coffee becomes the catalyst for deep connections and authentic interactions. Prepare to be inspired by the ideas exchanged, the perspectives challenged, and the new paths illuminated. <br>

But the impact of coffee reaches beyond the conversations it initiates. It serves as a muse for creativity, a source of inspiration that fuels artistic endeavors. We delve into the world of poets, writers, and artists who find solace and inspiration in the depths of a coffee cup. Discover the creative processes that unfold, the words that flow, and the masterpieces that come to life, all driven by the caffeinated elixir. <br>

Through the pages of Caffeinated Chronicles, we aim to embrace the intelligence and thoughtfulness that lies within every coffee drinker. We celebrate the unique experiences and connections that coffee fosters, reminding us of the shared humanity that unites us all.<br>

So, join us on this journey of discovery, as we uncover the caffeinated chronicles that shape our lives. Let the aroma of freshly brewed coffee guide us through stories of conversations and inspirations, and let us emerge enlightened and inspired by the powerful elixir that is coffee.




</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dafault" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Modal 3 -->
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Brewing Memories</h4>

                </div>
                <div class="modal-body">
                    <p> Welcome to Brewing Memories, a place where we embark on a captivating journey through the vast and enchanting realm of the coffee world. Prepare to be immersed in a tapestry of flavors, traditions, and unforgettable tales that will ignite your senses and inspire your love for all things coffee.<br>

In this ever-evolving landscape of coffee, we explore the rich heritage and diverse origins that give each cup its unique character. From the misty highlands of Ethiopia to the lush plantations of Colombia, we traverse the globe in search of the stories behind the beans that fill our cups. Discover the intricate processes of cultivation, harvesting, and processing that shape the flavors we savor with every sip.<br>

But coffee is more than a mere beverage. It is a catalyst for connection, an elixir that brings people together in shared moments of joy and contemplation. Through the art of brewing, we delve into the rituals and techniques that transform coffee into an experience to be savored. From the meticulous pour of water to the aroma that wafts through the air, we unlock the secrets to creating a perfect brew.<br>

As we sip on our cups of liquid inspiration, we listen to the stories that emerge. Tales of coffee farmers' unwavering dedication, roasters' meticulous craftsmanship, and baristas' artistry. These narratives unfold like the delicate layers of a well-crafted espresso, revealing the passion and resilience that go into every aspect of the coffee journey.<br>

Brewing Memories celebrates the role of coffee as a vessel for memories. It is the backdrop to our most cherished moments – the early morning conversations with loved ones, the contemplative hours spent in a cozy café, or the quiet solitude found in a steaming cup. It is through these shared experiences that we create lasting memories, forging connections and deepening our appreciation for the complexity of the coffee world.<br>

So, join us on this intellectual and thoughtful exploration of coffee's vast universe. Let us dive into the intricate narratives that unfold with each sip, and allow the aroma of freshly brewed coffee to transport us to new realms of flavor and inspiration. Together, let's embrace the beauty of brewing memories and uncover the endless possibilities that lie within the captivating world of coffee.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dafault" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



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

</body>

</html>

<?php

} else {
    header("location:login.php "); // redirect user to login page
}
?>