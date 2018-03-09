<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>First page</title>
    <!--style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/hidden-panel.css">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- end style-->
    <!--script-->
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--end script-->

    <!--fonts-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>
<header>
    <section class="navigation cbp-af-header">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a href="/"><img class="img-responsive img-header" src="img/bankbazaar-logo.png"></a>
                    </div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav main-nav">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="/twopage.php"><i class="glyphicon glyphicon-usd"></i> Buy/Rent Books</a></li>
                        <li><a href="/twopage-tabs.php"><i class="glyphicon glyphicon-list-alt"></i> Used Secondhand Books</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-piggy-bank"></i> Sell Books</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon glyphicon-wrench"></i> How it works</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> FAQS</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-earphone"></i> Contact Us</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>


                    <div class="right-group">
                        <ul class="navbar right-gr">
                            <a class="btn aplication" href="#">Track Aplication</a>
                            <a class="btn login" href="#">Login</a>
                        </ul>
                    </div>
                    <!--start hidden panel-->
                    <input type="checkbox" id="nav-toggle" class="glyphicon glyphicon-user" hidden>
                    <div class="hidden-panel">
                        <label for="nav-toggle" class="nav-toggle" onclick></label>
                        <div class="mobile-logo">
                            <a href="/"><img class="img-responsive img-mobile" src="img/bankbazaar-logo.png"></a>
                        </div>
                        <ul>
                            <li><a href="#">Link 1</a>
                            <li><a href="#">Link 2</a>
                            <li><a href="#">Link 3</a>
                            <li><a href="#">Link 4</a>
                            <li><a href="#">Link 5</a>
                            <li><a href="#">Link 6</a>
                            <li><a href="#">Link 7</a>
                        </ul>
                        <div class="panel-carousel carousel slide" id="myCarousel">
                            <h3>What's HOT!</h3>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive" src="img/slide1.png" alt="1 слайд">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="img/slide2.png" alt="2 слайд">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="img/slide3.png" alt="3 слайд">
                                </div>
                                <div class="control">
                                    <a class="carousel-control left controls" href="#myCarousel"
                                       data-slide="prev">‹</a>
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <a class="carousel-control right controls" href="#myCarousel"
                                       data-slide="next">›</a>
                                </div>
                            </div>
                        </div>
                        <div class="social">
                            <a class="btn btn-block btn-social btn-facebook">
                                <span class="fa fa-facebook"></span> Sign in with Facebook
                            </a>
                            <a class="btn btn-block btn-social btn-twitter">
                                <span class="fa fa-twitter"></span> Sign in with Twitter
                            </a>
                            <a class="btn btn-block btn-social btn-linkedin">
                                <span class="fa fa-linkedin"></span> Sign in with Twitter
                            </a>
                            <a class="btn btn-block btn-social btn-google">
                                <span class="fa fa-google"></span> Sign in with google+
                            </a>
                        </div>
                    </div>
                    <!--end hidden panel-->
                    <ul class="fixed">
                        <li class="fixed-panel"><span class="glyphicon glyphicon-user"></span>Login</li>
                        <li class="fixed-panel"><span class="glyphicon glyphicon-usd"></span>Debt/Govt. Security Plans
                        </li>
                        <li class="fixed-panel"><span class="glyphicon glyphicon-flag"></span>Guaranteed Plans</li>
                        <li class="fixed-panel"><span class="glyphicon glyphicon-check"></span>Calculatos</li>
                        <li class="fixed-panel"><span class="glyphicon glyphicon-flag"></span>Compare</li>
                    </ul>
                </div>
            </div>

    </section>
<!--title on header-->
    <div class="title">
        <h1 class="site-title">ONE OF THE FIRST TEXTBOOK RENTAL COMPANIES IN INDIA</h1>
        <h3 class="slogan">Search and rent books with title, author, ISBN or college. To save upto 70%.</h3>
        <!--end title-->

        <!--search used bootstrap tabs-->
        <div class="search">
            <div  class="horizontal-scroll">
            <ul class="nav nav-tabs search-menu">
                <li class="nav-link firstli"><a href="#tab1" data-toggle="tab"><i class="glyphicon glyphicon-book"></i> Rent or
                        Buy Books
                        <div class="arrow_top"> </div>
                    </a>
                </li>
                <li class="nav-link active"><a href="#tab2" data-toggle="tab"><i class="glyphicon glyphicon-flash"></i> Rental,
                        Used MarketPlace
                        <div class="arrow_top"> </div>
                    </a>
                </li>
                <li class="nav-link"><a href="#tab3" data-toggle="tab"> <i class="glyphicon glyphicon-usd"></i> Sell
                        Used Books
                        <div class="arrow_top"> </div>
                    </a></li>
                <li class="nav-link"><a href="#tab4" data-toggle="tab"> <i class="glyphicon glyphicon-book"></i> Rent or
                        Buy Used Novels
                        <div class="arrow_top"> </div>
                    </a>
                </li>
                <li class="nav-link"><a href="#tab5" data-toggle="tab"> <i
                            class="glyphicon glyphicon-question-sign"></i> Cant Find Books
                        <div class="arrow_top"> </div>
                    </a>
                </li>
            </ul>
            </div>
            <div class="tab-content">
                <div id="tab1" class="tab-pane">
                    <input type="search" placeholder="Rent or Buy Books. Search by ISBN, Title or Author"/>
                </div>
                <div id="tab2" class="tab-pane in active">
                    <input type="search"
                           placeholder="Create Account to Sell Or Rent or Buy on New Pustakkosh Marketplace"/>
                </div>
                <div id="tab3" class="tab-pane">
                    <input type="search"
                           placeholder="Create Account to Sell Or Rent or Buy on New Pustakkosh Marketplace"/>
                </div>
                <div id="tab4" class="tab-pane">
                    <input type="search"
                           placeholder="Create Account to Sell Or Rent or Buy on New Pustakkosh Marketplace"/>
                </div>
                <div id="tab5" class="tab-pane">
                    <input type="search"
                           placeholder="Create Account to Sell Or Rent or Buy on New Pustakkosh Marketplace"/>
                </div>
            </div>

            <button class="btn"><i class="glyphicon glyphicon-search"></i></button>
        </div>
        <!--end search-->
        <div class="btn-group">
            <button class="btn category dropdown-toggle" data-toggle="dropdown">Shop by Category</button>
            <ul class="dropdown-menu">
                <li><a href="#">Used Second Hand Books</a></li>
                <li><a href="#">Computer Books</a></li>
                <li><a href="#">Electrical Engineering Books</a></li>
                <li><a href="#">Electronics Engineering Books</a></li>
                <li><a href="#">Electronics Communication Books</a></li>
                <li><a href="#">Environment Engineering Books</a></li>
                <li><a href="#">Civil Engineering Books</a></li>
                <li><a href="#">Mechanical Engineering Books</a></li>
                <li><a href="#">Chemistry Books</a></li>
                <li><a href="#">Biology Books</a></li>
                <li><a href="#">Biotechnology Books</a></li>
                <li><a href="#">Mathematics Books</a></li>
                <li><a href="#">Children Books</a></li>
                <li><a href="#">Novels</a></li>
                <li><a href="#">Accounting Books</a></li>
                <li><a href="#">Management Books</a></li>
                <li><a href="#">Physics Books</a></li>
            </ul>
        </div>
</header>

<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="#"><span>Home</span></a></li>
                <li><a href="#"><span>First page</span></a></li>
            </ul>
        </div>
    </div>
</section>
<section class="title-offer scrollflow -slide-right -opacity">
    <div class="container">
        <div class="row">
            <div class="filter col-sm-12">
                <span>Filter by:</span>
                <div class="btn-group">
                    <button class="btn filter-button border-right dropdown-toggle" data-toggle="dropdown"><i
                            class="glyphicon glyphicon-education"></i> Interest Type (3) <i
                            class="glyphicon glyphicon-chevron-down"></i></button>
                    <ul class="dropdown-menu">
                        <li><a href="#"><label><input class="checkbox" type="checkbox" value=""></label>Used Second Hand
                                Books</a></li>
                        <li><a href="#"><label><input class="checkbox" type="checkbox" value=""></label>Computer
                                Books</a></li>
                    </ul>
                    <div class="btn-group">
                        <button class="btn filter-button dropdown-toggle" data-toggle="dropdown"><i
                                class="glyphicon glyphicon-list-alt"></i> Institution Type (2) <i
                                class="glyphicon glyphicon-chevron-down"></i></button>
                        <ul class="dropdown-menu">
                            <li><a href="#"><label><input class="checkbox" type="checkbox" value=""></label> Used Second
                                    Hand Books</a></li>
                            <li><a href="#"><label><input class="checkbox" type="checkbox" value=""></label> Computer
                                    Books</a></li>
                        </ul>
                    </div>
                </div>
                <button class="refresh"><i class="glyphicon glyphicon-refresh"></i> clear</button>
            </div>
            <div class="filter col-sm-12 found">
                <span class="founded">Founded : 1516 Fixed Deposit Rates
                    <span class="rate">
                   <i class="glyphicon glyphicon-star"></i>
                   <i class="glyphicon glyphicon-star"></i>
                   <i class="glyphicon glyphicon-star"></i>
                   <i class="glyphicon glyphicon-star"></i>
                   <i class="glyphicon glyphicon-star"></i>

 </span> 4.5 / 5.0   from 1775  users</span>
            </div>
            <div class="col-sm-3 offer-title">
                <p>Cource name</p>
            </div>
            <div class="col-sm-3 offer-title">
                <p>Deposit Amount Range </p>
            </div>
            <div class="col-sm-3 offer-title">
                <p>Tenure Range </p>
            </div>
            <div class="col-sm-3 offer-title">
                <p>Interest Rate </p>
            </div>
        </div>
    </div>
</section>

<div id="acordion-bl"><!-- start open one section-->
<section class="offer-content scrollflow -slide-right -opacity">
    <div class="container shadow">
        <div class="row">
            <div class="push" id="accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseExample1"
                 aria-expanded="false"
                 aria-controls="collapseExample">
            <div class="col-sm-3 offer">
                <img class="img-responsive img-left" src="img/vijaya-bank.png">
               <span class=""> SHRIRAM TRANSPORT FINANCE CO. LTD.
                MAA+ by ICRA</span>
                <button class="voteuser" onClick='location.href="/twopage-tabs.php"'>
                <span class="rate">User's voted:
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                </span>
                </button>
                <a class="btn details" data-toggle="collapse" href="#collapseExample1" aria-expanded="false"
                   aria-controls="collapseExample">Details</a>
            </div>
            <div class="col-sm-3 offer">
                <span class="to-padding">Up to ₹1Cr</span>
            </div>
            <div class="col-sm-3 offer">
                <span class="to-padding">7 Days to 10 Years
                Monthly Compounding
                </span>
            </div>
            <div class="col-sm-3 offer">
               <span class="no-padding"> 4% - 7.25%
                Quarterly Compounding</span>
                <p class="no-padding">Response Time</p>
                <p class="line"> Within 30 minutes</p>
                <div class="btn-group offer-button">
                    <button class="btn explore"><i class="glyphicon glyphicon-search"></i> Explore</button>
                    <button class="btn Enqure"><i class="glyphicon glyphicon-education"></i> Enqure</button>
                </div>
            </div>
                </div>
            <div class="collapse" id="collapseExample1">
                <div class="col-sm-12">
                    <div class="col-sm-8 hidden-info">
                        <div class="hidden-head">
                            <p>Features</p>
                        </div>
                        <div class="info">
                            <span class="features"><i
                                    class="glyphicon glyphicon-education"></i> Premature withdrawal</span>
                            <span class="features"><i class="glyphicon glyphicon-globe"></i> Online facilities</span>

                        </div>
                        <div class="hidden-body">
                            <p>Good to know</p>
                        </div>
                        <div class="info">
                            <li>
                                <span class="features"> Premature withdrawal</span>
                                <span class="features"> Online facilities</span>
                                <span class="features">Online facilities</span>

                        </div>

                    </div>
                    <div class="col-sm-4 hidden-info">
                        <div class="hidden-head">
                            <p>Documents</p>
                        </div>

                        <ul>
                            <li>
                                <span class="features">Address Proof</span>
                            </li>
                            <li>
                                <span class="features">ID Proof</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="offer-content  scrollflow -slide-right -opacity">
    <div class="container shadow">
        <div class="row">
            <div class="push" id="accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseExample2"
                 aria-expanded="false"
                 aria-controls="collapseExample">
            <div class="col-sm-3 offer">
                <img class="img-responsive img-left" src="img/vijaya-bank.png">
               <span class=""> SHRIRAM TRANSPORT FINANCE CO. LTD.
                MAA+ by ICRA</span>
                <button class="voteuser" onClick='location.href="/twopage-tabs.php"'>
                <span class="rate">User's voted:
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                </span>
                </button>
                <a class="btn details" data-toggle="collapse" href="#collapseExample2" aria-expanded="false"
                   aria-controls="collapseExample">Details</a>
            </div>
            <div class="col-sm-3 offer">
                <span class="to-padding">Up to ₹1Cr</span>
            </div>
            <div class="col-sm-3 offer">
                <span class="to-padding">7 Days to 10 Years
                Monthly Compounding
                </span>
            </div>
            <div class="col-sm-3 offer">
               <span class="no-padding"> 4% - 7.25%
                Quarterly Compounding</span>
                <p class="no-padding">Response Time</p>
                <p class="line"> Within 30 minutes</p>
                <div class="btn-group offer-button">
                    <button class="btn explore"><i class="glyphicon glyphicon-search"></i> Explore</button>
                    <button class="btn Enqure"><i class="glyphicon glyphicon-education"></i> Enqure</button>
                </div>
            </div>
                </div>
            <div class="collapse" id="collapseExample2">
                <div class="col-sm-12">
                    <div class="col-sm-8 hidden-info">
                        <div class="hidden-head">
                            <p>Features</p>
                        </div>
                        <div class="info">
                            <span class="features"><i
                                    class="glyphicon glyphicon-education"></i> Premature withdrawal</span>
                            <span class="features"><i class="glyphicon glyphicon-globe"></i> Online facilities</span>

                        </div>
                        <div class="hidden-body">
                            <p>Good to know</p>
                        </div>
                        <div class="info">
                            <li>
                                <span class="features"> Premature withdrawal</span>
                                <span class="features"> Online facilities</span>
                                <span class="features">Online facilities</span>

                        </div>

                    </div>
                    <div class="col-sm-4 hidden-info">
                        <div class="hidden-head">
                            <p>Documents</p>
                        </div>

                        <ul>
                            <li>
                                <span class="features">Address Proof</span>
                            </li>
                            <li>
                                <span class="features ">ID Proof</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="offer-content scrollflow -slide-right -opacity">
    <div class="container shadow">
        <div class="row">
            <div class="push" id="accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseExample3"
                 aria-expanded="false"
                 aria-controls="collapseExample">
            <div class="col-sm-3 offer">
                <img class="img-responsive img-left" src="img/vijaya-bank.png">
               <span class=""> SHRIRAM TRANSPORT FINANCE CO. LTD.
                MAA+ by ICRA</span>
                <button class="voteuser" onClick='location.href="/twopage-tabs.php"'>
                <span class="rate">User's voted:
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                </span>
                </button>
                <a class="btn details" data-toggle="collapse" href="#collapseExample3" aria-expanded="false"
                   aria-controls="collapseExample">Details</a>
            </div>
            <div class="col-sm-3 offer">
                <span class="to-padding">Up to ₹1Cr</span>
            </div>
            <div class="col-sm-3 offer">
                <span class="to-padding">7 Days to 10 Years
                Monthly Compounding
                </span>
            </div>
            <div class="col-sm-3 offer">
               <span class="no-padding"> 4% - 7.25%
                Quarterly Compounding</span>
                <p class="no-padding">Response Time</p>
                <p class="line"> Within 30 minutes</p>
                <div class="btn-group offer-button">
                    <button class="btn explore"><i class="glyphicon glyphicon-search"></i> Explore</button>
                    <button class="btn Enqure"><i class="glyphicon glyphicon-education"></i> Enqure</button>
                </div>
                </div>
            </div>
            <div class="collapse" id="collapseExample3">
                <div class="col-sm-12">
                    <div class="col-sm-8 hidden-info">
                        <div class="hidden-head">
                            <p>Features</p>
                        </div>
                        <div class="info">
                            <span class="features"><i
                                    class="glyphicon glyphicon-education"></i> Premature withdrawal</span>
                            <span class="features"><i class="glyphicon glyphicon-globe"></i> Online facilities</span>

                        </div>
                        <div class="hidden-body">
                            <p>Good to know</p>
                        </div>
                        <div class="info">
                            <span class="features"> Premature withdrawal</span>
                            <span class="features"> Online facilities</span>
                            <span class="features">Online facilities</span>

                        </div>

                    </div>
                    <div class="col-sm-4 hidden-info">
                        <div class="hidden-head">
                            <p>Documents</p>
                        </div>

                        <ul>
                            <li>
                                <span class="features">Address Proof</span>
                            </li>
                            <li>
                                <span class="features">ID Proof</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="offer-content scrollflow -slide-right -opacity">
    <div class="container shadow">
        <div class="row">
            <div class="push" id="accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseExample4"
                 aria-expanded="false"
                 aria-controls="collapseExample">
            <div class="col-sm-3 offer">
                <img class="img-responsive img-left" src="img/vijaya-bank.png">
               <span class=""> SHRIRAM TRANSPORT FINANCE CO. LTD.
                MAA+ by ICRA</span>
                <button class="voteuser" onClick='location.href="/twopage-tabs.php"'>
                <span class="rate">User's voted:
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                </span>
                </button>
                <a class="btn details" data-toggle="collapse" href="#collapseExample4" aria-expanded="false"
                   aria-controls="collapseExample">Details</a>
            </div>
            <div class="col-sm-3 offer">
                <span class="to-padding">Up to ₹1Cr</span>
            </div>
            <div class="col-sm-3 offer">
                <span class="to-padding">7 Days to 10 Years
                Monthly Compounding
                </span>
            </div>
            <div class="col-sm-3 offer">
               <span class="no-padding"> 4% - 7.25%
                Quarterly Compounding</span>
                <p class="no-padding">Response Time</p>
                <p class="line"> Within 30 minutes</p>
                <div class="btn-group offer-button">
                    <button class="btn explore"><i class="glyphicon glyphicon-search"></i> Explore</button>
                    <button class="btn Enqure"><i class="glyphicon glyphicon-education"></i> Enqure</button>
                </div>
            </div>
            </div>
            <div class="collapse" id="collapseExample4">
                <div class="col-sm-12">
                    <div class="col-sm-8 hidden-info">
                        <div class="hidden-head">
                            <p>Features</p>
                        </div>
                        <div class="info">
                            <span class="features"><i
                                    class="glyphicon glyphicon-education"></i> Premature withdrawal</span>
                            <span class="features"><i class="glyphicon glyphicon-globe"></i> Online facilities</span>

                        </div>
                        <div class="hidden-body">
                            <p>Good to know</p>
                        </div>
                        <div class="info">
                            <span class="features"> Premature withdrawal</span>
                            <span class="features"> Online facilities</span>
                            <span class="features">Online facilities</span>

                        </div>

                    </div>
                    <div class="col-sm-4 hidden-info">
                        <div class="hidden-head">
                            <p>Documents</p>
                        </div>

                        <ul>
                            <li>
                                <span class="features">Address Proof</span>
                            </li>
                            <li>
                                <span class="features">ID Proof</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
</div>
<!-- end open one section-->
<section class="email scrollflow -slide-top" data-scrollflow-start="0" data-scrollflow-distance="100"
         data-scrollflow-amount="200">
    <div class="container">
        <div class="row">
            <h2 class="scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="100"
                data-scrollflow-amount="200">If You love read stay Connected</h2>
            <div class="col-sm-12 email-block">
                <form class="connected">
                    <input type="email" placeholder="Enter your e-mail"/>
                    <button class="btn subsribe">Subscribe</button>
                </form>
            </div>
        </div>
    </div>

</section>
<footer>
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="navbar navbar-default footer-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> About us</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> FAQ</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-alert"></i> Terms & Conditions </a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-phone-alt"></i> Contact Us</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> Notes help</a></li>
                    </ul>
                    <span class="line"></span>
                </div>

            </div>
        </div>
    </section>

    <section class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 phone">
                    Call <span><i class="glyphicon glyphicon-phone-alt"></i> 0120-2433388 </span>
                </div>

                <div class="col-sm-4 phone">
                    or <span><i class="glyphicon glyphicon-earphone"></i> +919136437970 </span>
                </div>

                <div class="col-sm-4 phone">
                    or <span><i class="glyphicon glyphicon-earphone"></i> +919136437970 </span>
                </div>
                <span class="line"></span>
            </div>
        </div>
    </section>
    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 copy">
                    <p>Copyright &copy 2015 pustakkosh.com All rights reserved</p>
                </div>
            </div>
        </div>
    </section>
    </footer>
    <!-- start popup elements-->
    <div id="back-to-top">
        <i class="glyphicon glyphicon-chevron-up"></i>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="round hollow text-center">
                <a id="chat"><span class="glyphicon glyphicon-comment"></span></a>
                <a href="#" id="callme" type="button" data-toggle="modal" data-target="#myModal"><span
                        class="glyphicon glyphicon-earphone"></span></a>
            </div>

            <hr>
        </div>
    </div>


    <div class="popup-box chat-popup" id="qnimate">
        <div class="popup-head">
            <div class="popup-head-left pull-left"><img src="img/vijaya-bank.png" alt="iamgurdeeposahan"> Gurdeep Osahan
            </div>
            <div class="popup-head-right pull-right">
                <div class="btn-group">
                    <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
                        <i class="glyphicon glyphicon-cog"></i></button>
                    <ul role="menu" class="dropdown-menu pull-right">
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Block</a></li>
                        <li><a href="#">Clear Chat</a></li>
                        <li><a href="#">Email Chat</a></li>
                    </ul>
                </div>
                <button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i
                        class="glyphicon glyphicon-off"></i></button>
            </div>
        </div>
        <div class="popup-messages">
            <div class="direct-chat-messages">


                <div class="chat-box-single-line">
                    <abbr class="timestamp">October 8th, 2017</abbr>
                </div>


                <!-- Message. Default to the left -->
                <div class="direct-chat-msg doted-border">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Osahan</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img alt="message user image" src="img/vijaya-bank.png" class="direct-chat-img">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        Hey bro, how’s everything going ?
                    </div>
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                    </div>
                    <div class="direct-chat-info clearfix">
						<span class="direct-chat-img-reply-small pull-left">

						</span>
                        <span class="direct-chat-reply-name">Singh</span>
                    </div>
                    <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->


                <div class="chat-box-single-line">
                    <abbr class="timestamp">October 9th, 2017</abbr>
                </div>


                <!-- Message. Default to the left -->
                <div class="direct-chat-msg doted-border">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Osahan</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img alt="message user image" src="img/vijaya-bank.png" class="direct-chat-img">
                    <div class="direct-chat-text">
                        Hey bro, how’s everything going ?
                    </div>
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                    </div>
                    <div class="direct-chat-info clearfix">
                        <img alt="message user image" src="img/vijaya-bank.png" class="direct-chat-img">
                        <span class="direct-chat-reply-name">Singh</span>
                    </div>
                    <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Send your phone</h4>
                </div>
                <div class="modal-body">
                    <form class="phone col-sm-12">
                        <input class="phone col-sm-12" type="phone" placeholder="Enter your phone">
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default send" type="button">Send</button>
                </div>
            </div>


        </div>
        <!-- end popup elements-->
        <script src="js/AnimatedHeader.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/jquery.scrollflow.min.js"></script>
        <script src="js/script.js"></script>
        <!-- gallery CSS file Fancybox -->
        <link rel="stylesheet" href="js/fancybox/jquery.fancybox.min.css" type="text/css" media="screen" />
        <!-- gallery JS file Fancybox -->
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.min.js"></script>
        <!-- fixed error on  page2 -->
        <script>
            var cbpAnimatedHeader = (function() {

                var docElem = document.documentElement,
                    header = document.querySelector( '.cbp-af-header' ),
                    didScroll = false,
                    changeHeaderOn = 300;

                function init() {
                    window.addEventListener( 'scroll', function( event ) {
                        if( !didScroll ) {
                            didScroll = true;
                            setTimeout( scrollPage, 250 );
                        }
                    }, false );
                }

                function scrollPage() {
                    var sy = scrollY();
                    if ( sy >= changeHeaderOn ) {
                        classie.add( header, 'cbp-af-header-shrink' );
                    }
                    else {
                        classie.remove( header, 'cbp-af-header-shrink' );
                    }
                    didScroll = false;
                }

                function scrollY() {
                    return window.pageYOffset || docElem.scrollTop;
                }

                init();

            })();
            </script>
        <!-- end Fix -->
</body>


