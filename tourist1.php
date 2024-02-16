

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tourist</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/style1.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="css/dropdown.css" />


    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link type="image" rel="icon" href="images/hemkunt.jpg" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,500i,600,600i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</script>
    <div id="arrow">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>

    <nav>
        <div class="container">
            <div class="menu-par">
                <div class="logo-par">
                    <a href="#">
                        <h2>Devbhoomi</h2>
                    </a>
                </div>
                <?php
                include('translate.html');
                ?>
                <div class="nav">
                    <ul>
                        <li><a class="menu_hover" href="tourist.php">Home</a></li>
                        <!--<li><a class="menu_hover" href="#">Weather</a></li>-->
                    <!--    <li><a class="menu_hover" href="jon/agriculture.html">Agriculture</a></li>-->
  
                            <div class="dropdown">
                                <button class="dropbtn">Explore 
                                
                                </button>
                                <div class="dropdown-content">
                                <a href="weather\weather.php">Weather</a>
                                <a href="agriculture\index.php">Agriculture</a>
                                <a href="house%20management/index1.php">Where to stay</a>
                                <a href="Vehicle-Management/index1.php">Book your ride</a>
                                </div>
                            </div> 

                        <!--<li><a class="menu_hover" href="abc.html">Where To Stay</a></li>-->
                        <li><a class="menu_hover" href="#gallery">gallery</a></li>
                      <li><a class="menu_hover" href="#fiji-holyday">Place</a></li>
                      <li><h4><?php
                        if( $_SESSION['tourist']==true){
                           echo "Welcome   ". $_SESSION['tourist'];
                            }
                        else{
                           echo"no";
                        }
                      ?>
                      <a class="menu_hover" href="user.php"><i class="fa-regular fa-user "></i></a></li>
                    </ul>
                </div>
                <div class="toggle-btn">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <div class="conatiner">
            <div class="home_header_info">
                <h1 class="typewrite" data-period="2000" data-type='["देवभूमि उत्तराखंड मैं आपका हार्दिक स्वागत है.", "Welcome to Devbhoomi Uttrakhand." ]'></h1>
               <!-- <p> देवभूमि दर्शन में आप का स्वागत हैं!.</p>-->
               
            </div>
        </div>
        <div class="video">
            <video id="video" autoplay loop muted>
                <source type="video/mp4" src="images/RISHI1.mp4" /></video>
                <!--<img src="E:\Travel-html-20220629T033215Z-001\Travel-html\images\uttarakhand.gif" height="500"width="500">--> 
           
        </div>
    </header>

    <Section id="welcome_Sec">
        <div class="container">
            <h2><span>Discovery Of Uttrakhand</span></h2>
            <p>Some Famous Places in Uttrakhand</p>
        </div>
    </Section>
<!--Slide-->
    <Section id="slides_parent">
        <div class="container">
            <div class="slides">
                <div class="slide_1">
                    <div class="slide_info">
                        <a href="chardham.html"><p style="color:white;">Char Dham</p></a>
                    </div>
                </div>
                <div class="slide_1 slide_2">
                    <div class="slide_info">
                     <a href="Rishikesh.php">  <p style="color:white;">Rishikesh</p></a> 
                    </div>
                </div>
                <div class="slide_1 slide_5">
                    <div class="slide_info">
                    <a href="rafting.html"><p style="color:white;">Rafting</p></a>
                    </div>
                </div>
                <div class="slide_1 slide_4">
                    <div class="slide_info">
                    <a href="Cobart.html"><p style="color:white;">Jim Corbett National Park</p></a>
                    </div>
                </div>
                <div class="slide_1 slide_5">
                    <div class="slide_info">
                    <a href="culture.html"><p style="color:white;">Culture & Festival of Uttrakhand</p></a>
                    </div>
                </div>
              <!--  <div class="slide_1 slide_6">
                    <div class="slide_info">
                        <p>Yasawa Islands</p>
                    </div>
                </div>-->
                <div class="slide_1 slide_7">
                    <div class="slide_info">
                        <p>Auli</p>
                    </div>
                </div>
            </div>
        </div>
    </Section>

    <section id="explore-fiji">
        <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1767681.3271949945!2d78.18799647268118!3d30.079789232959495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3909dcc202279c09%3A0x7c43b63689cc005!2sUttarakhand!5e0!3m2!1sen!2sin!4v1659627979394!5m2!1sen!2sin" 
                    width="700" 
                    height="400" 
                    style="border:0;" 
                    align="right"
                    allowfullscreen="" l
                    pasding="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
        </div>
        <div class="container">
            <div class="explore-content-par">
                <div class="explore-info">
                    <h3>Explore Uttrakhand </h3>
                    <div id="clockdiv">
                        <div>
                            <span class="days"></span>
                            
                        </div>
                        <div>
                            <span class="hours"></span>
                            
                        </div>
                        <div>
                            <span class="minutes"></span>
                           
                        </div>
                        <div>
                            <span class="seconds"></span>
                            
                        </div>
                    </div>
                </div>
                <div class="counter-form">
        
                   <!-- <form action="/action_page.php">
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        <input type="submit" value="Submit">
                    </form>-->
                </div>
            </div>
        </div>
    </section>
<!--Gallery Start-->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div align="center">
                    <button class="btn filter-button active" data-filter="all">All</button>
                    <button class="btn filter-button" data-filter="hdpe">Diving</button>
                    <button class="btn filter-button" data-filter="sprinkle">Advanture</button>
                    <button class="btn filter-button" data-filter="spray">Holy</button>
                </div>

                <div class="filter-gal-par">
                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <img src="images/fiji-surprise/diving1.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images/fiji-surprise/ukc1.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                  <!--      <img src="images/fiji-surprise/diving2.jpg" class="img-responsive">-->
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                     <!--   <img src="images/fiji-surprise/health1.jpg" class="img-responsive">-->
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images/fiji-surprise/ukc2.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                        <img src="images/fiji-surprise/Haridwar.jpeg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images/fiji-surprise/vally.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                      <!--  <img src="images/fiji-surprise/diving3.jpg" class="img-responsive">-->
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                 <!--       <img src="images/fiji-surprise/health2.jpg" class="img-responsive">-->
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                      <!--  <img src="images/fiji-surprise/diving1.jpg" class="img-responsive">-->
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images/fiji-surprise/rudranath.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                   <!--     <img src="images/fiji-surprise/health1.jpg" class="img-responsive">-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Gallery End-->
<!--Holiday/ Plce Start-->
    <section id="fiji-holyday">
        <div class="container">
            <h3>Start planning  holiday</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/slider/bangcok.jpg" class="img-responsive" width="100" height="100"/>
                        <div class="owl-img-info">
                            <h3>Nanital</h3>
                            <p>Uttrakhand</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/slider/tehri.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Tehri Dam</h3>
                            <p>Tehri Garhwal</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/slider/munsyari.jpg"  class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Munsyari</h3>
                            <p>Pithoragarh</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/04/5f/9a/63/nanda-devi-national-park.jpg?w=1200&h=-1&s=1" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Nanada Devi National Park</h3>
                            <p>Chamoli</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="https://www.jagranimages.com/images/09_08_2019-mv-1_19474505.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Mana Vilage</h3>
                            <p>Chamoli</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="https://ik.imagekit.io/tttnew/tttnew/images/collection/sightseeing-adi-kailash-om-parvat/omm-parvat.jpg?tr=w-734,h-490" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Adi kailash</h3>
                            <p>Pithoragarh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Holiday end-->


    <section id="blog">
        <div class="container">
         <!--   <h3>News and Events</h3>
            <div id="blog-par">
                <div class="blog-content">
                    <div class="blog-img">
                        <img class="img-responsive" src="images/slider/bangcok.jpg" />
                    </div>
                    <div class="blog-info">
                        <ul>
                            <li>Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="blog-img">
                        <img class="img-responsive" src="images/slider/bangcok.jpg" />
                    </div>
                    <div class="blog-info">
                        <ul>
                            <li>Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </div>
                </div>
            </div>
            <div id="blog-par">
                <div class="blog-content">
                    <div class="blog-img">
                        <img class="img-responsive" src="images/slider/bangcok.jpg" />
                    </div>
                    <div class="blog-info">
                        <ul>
                            <li>Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="blog-img">
                        <img class="img-responsive" src="images/slider/bangcok.jpg" />
                    </div>
                    <div class="blog-info">
                        <ul>
                            <li>Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <footer>
        <div class="container">
            <div class="footer-par">
                <div class="footer-1">
                    <h2>About Us</h2>
                </div>
                <div class="footer-2 fot-info">
                <!--    <h3>Tourism Fiji</h3>
                    <ul>
                        <li><a href="#">Tourism Fiji One</a></li>
                        <li><a href="#">Tourism Fiji Two</a></li>
                        <li><a href="#">Tourism Fiji Three</a></li>
                        <li><a href="#">Tourism Fiji Four</a></li>
                    </ul>
                </div>
                <div class="footer-3 fot-info">
                    <h3>Find Your Happy</h3>
                    <ul>
                        <li><a href="#">Tourism Fiji One</a></li>
                        <li><a href="#">Tourism Fiji Two</a></li>
                        <li><a href="#">Tourism Fiji Three</a></li>
                    </ul>
                </div>
                <div class="footer-4 fot-info">
                    <h3>Need Help?</h3>
                    <ul>
                        <li><a href="#">Tourism Fiji One</a></li>
                        <li><a href="#">Tourism Fiji Two</a></li>
                    </ul>-->
                </div>
            </div>
            <p> The Tourists need to visit the travel agency office to plan any tour.  It involves a lot of manual paperwork, and customers need to stay in the queue for a long time.  Most of the time agencies have to rely on local information sources and their own experience regarding time and cost. Through a phone call, they have to get information. 
So, tourists can visit the website, browse the information, and access all the services at their own pace.  The website can perform all operations related to traveling, booking accommodations, sightseeing, etc.  
This website can provide a variety of travel services. To provide information such as tourist places, pilgrimage places, etc.
To book hotels, and homestay.
Multilanguage support is embedded
To get extra information through a chatbot. One of the main purposes of our website is to facilitate the offline customers online because customers can not spend their precious time by visiting travel agency to plan their tours.
People who are unaware about the famous tourist places, culture, nature's beauty etc... Can visit this website to explore and plan your tours.

</p><br>
<a href="Chatbot/index.php"><img src="Chatbot\image\bot_avatar.png">Connect With Us </a>
        </div>
        <p class="copyright">Copyright © 2021 Travel</p>
    </footer>


    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/extrenaljq.js"></script>
</body>

</html>
