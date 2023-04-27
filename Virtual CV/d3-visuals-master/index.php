<!DOCTYPE html>
<html lang="en">

<head>
    <title>PULSE | RESPONSIVE ACADEMIC PERSONAL VCARD TEMPLATE</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- CSS | STYLE -->

    <link href="res-bubblecharts/css/dragit.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/linecons.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/colors/green.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="res-mbostock1/css/style.css">
    <link rel="stylesheet" type="text/css" href="res-dragdrop/dndtree.css">
    <!-- CSS | Google Fonts -->
    <script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,500,600' rel='stylesheet' type='text/css'>

    <script src="res-highcharts/json/data2.js"></script>
    <script src="res-highcharts/json/data3.js"></script>
    <script src="res-mbostock1/json/data1.js"></script>
    <script src="res-mbostock1/json/data2.js"></script>
    <script src="res-mbostock1/json/data3.js"></script>
    <script src="res-bubblecharts/data/nations.js"></script>    
    
    <script src="https://d3js.org/d3.v3.min.js"></script> 

    <noscript>
        <style>
        @media screen and (max-width: 755px) {
            .hs-content-scroller {
                overflow: visible;
            }
        }
        </style>
    </noscript>
</head>

<body>

    <!-- Page preloader -->
    <div id="page-loader">
        <canvas id="demo-canvas"></canvas>
    </div>
    <!-- container -->
    <div id="hs-container" class="hs-container">

        <!-- Sidebar-->
        <div class="aside1">
            <a class="contact-button"><i class="fa fa-paper-plane"></i></a>
            <a class="download-button"><i class="fa fa-cloud-download"></i></a>
            <div class="aside-content"><span class="part1">PULSE</span><span class="part2">Academic Personal Vcard</span>
            </div>
        </div>
        <aside class="hs-menu" id="hs-menu">
            <!-- <canvas id="demo-canvas"></canvas> -->

            <!-- Profil Image-->
            <div class="hs-headline">
                <a id="my-link" href="#my-panel"><i class="fa fa-bars"></i></a>
                <a href="#" class="download"><i class="fa fa-cloud-download"></i></a>
                <div class="img-wrap">
                    <img src="images/portrait.jpg" alt="" width="150" height="150" />
                </div>
                <div class="profile_info">
                    <h1>Johnny smith</h1>
                    <h4>PhD Computer Science</h4>
                    <h6><span class="fa fa-location-arrow"></span>&nbsp;&nbsp;&nbsp;San Francisco , CA</h6>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="separator-aside"></div>
            <!-- End Profil Image-->

            <!-- menu -->
            <nav>
                <a href="#section1"><span class="menu_name">ABOUT</span><span class="fa fa-home"></span> </a>
                <a href="#section2"><span class="menu_name">RESUME</span><span class="fa fa-newspaper-o"></span> </a>
                <a href="#section3"><span class="menu_name">PUBLICATIONS</span><span class="fa fa-pencil"></span> </a>
                <a href="#section4"><span class="menu_name">RESEARCH</span><span class="fa fa-flask"></span> </a>
                <a href="#section5"><span class="menu_name">TEACHING</span><span class="fa fa-book"></span> </a>
                <a href="#section6"><span class="menu_name">SKILLS</span><span class="fa fa-diamond"></span> </a>
                <a href="#section7"><span class="menu_name">WORKS</span><span class="fa fa-archive"></span> </a>
                <a href="#section8"><span class="menu_name">CONTACT</span><span class="fa fa-paper-plane"></span> </a>
            </nav>
            <!-- end menu-->
            <!-- social icons -->
            <div class="aside-footer">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa fa-github"></i></a>
            </div>
            <!-- end social icons -->
        </aside>
        <!-- End sidebar -->

        <!-- Go To Top Button -->
        <a href="#hs-menu" class="hs-totop-link"><i class="fa fa-chevron-up"></i></a>
        <!-- End Go To Top Button -->

        <!-- hs-content-scroller -->
        <div class="hs-content-scroller">
            <!-- Header -->
            <div id="header_container">
                <div id="header">
                    <div><a class="home"><i class="fa fa-home"></i></a>
                    </div>
                    <div><a href="" class="previous-page arrow"><i class="fa fa-angle-left"></i></a>
                    </div>
                    <div><a href="" class="next-page arrow"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- News scroll -->
                    <div class="news-scroll">
                        <span><i class="fa fa-line-chart"></i>RECENT ACTIVITY : </span>
                        <ul id="marquee" class="marquee">
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.</li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                        </ul>
                    </div>
                    <!-- End News scroll -->
                </div>
            </div>
            <!-- End Header -->

            <!-- hs-content-wrapper -->
            <div class="hs-content-wrapper">
                <!-- About section -->
                <article class="hs-content about-section" id="section1">
                    <span class="sec-icon fa fa-home"></span>
                    <div class="hs-inner">
                        <span class="before-title">.01</span>
                        <h2>ABOUT</h2>
                        <span class="content-title">PERSONAL DETAILS</span>
                        <div class="aboutInfo-contanier">
                            <div class="about-card">
                                <div class="face2 card-face">
                                    <div id="cd-google-map">
                                        <div id="google-container"></div>
                                        <div id="cd-zoom-in"></div>
                                        <div id="cd-zoom-out"></div>
                                        <address>8690 Paul Street, San fransico</address>
                                        <div class="back-cover" data-card-back="data-card-back"><i class="fa fa-long-arrow-left"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="face1 card-face">
                                    <div class="about-cover card-face">
                                        <a class="map-location" data-card-front="data-card-front"><img src="images/map-icon.png" alt="">
                                        </a>
                                        <div class="about-details">
                                            <div><span class="fa fa-inbox"></span><span class="detail">Yourmail@mail.com</span>
                                            </div>
                                            <div><span class="fa fa-phone"></span><span class="detail">00 123 456 789</span>
                                            </div>
                                        </div>

                                        <div class="cover-content-wrapper">
                                            <span class="about-description">Hello. I am a<span class="rw-words">
                                                <span><strong>Designer</strong></span>
                                            <span><strong>Researcher</strong></span>
                                            <span><strong>Programmer</strong></span>
                                            <span><strong>Dreamer</strong></span>
                                            <span><strong>Leader</strong></span>
                                            </span>
                                            <br>I am passionate about programming and coding
                                            <br>Welcome to my Personal and Academic profile</span>
                                            <span class="status">
                                            <span class="fa fa-circle"></span>
                                            <span class="text">Available as <strong>freelance</strong></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="more-details">
                                <div class="tabbable tabs-vertical tabs-left">
                                    <ul id="myTab" class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#bio" data-toggle="tab">Bio</a>
                                        </li>
                                        <li>
                                            <a href="#hobbies" data-toggle="tab">Hobbies</a>
                                        </li>
                                        <li>
                                            <a href="#facts" data-toggle="tab">Facts</a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">

                                        <div class="tab-pane fade in active" id="bio">
                                            <h3>BIO</h3>
                                            <h4>ABOUT ME</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non .</p>
                                        </div>
                                        <div class="tab-pane fade" id="hobbies">
                                            <h3>HOBBIES</h3>
                                            <h4>INTERESTS</h4>
                                            <div class="hobbie-wrapper row">
                                                <div class="hobbie-icon col-md-3"><i class="li_lab"></i>
                                                </div>
                                                <div class="hobbie-description col-md-9">

                                                    <p>Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a tristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.</p>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="hobbie-wrapper row">
                                                <div class="hobbie-icon col-md-3"><i class="li_pen"></i>
                                                </div>
                                                <div class="hobbie-description col-md-9">

                                                    <p>Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a tristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.</p>
                                                </div>
                                            </div>
                                            <div class="hobbie-wrapper row">
                                                <div class="hobbie-icon col-md-3"><i class="li_tv"></i>
                                                </div>
                                                <div class="hobbie-description col-md-9">

                                                    <p>Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a tristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.</p>
                                                </div>
                                            </div>
                                            <div class="hobbie-wrapper row">
                                                <div class="hobbie-icon col-md-3"><i class="li_shop"></i>
                                                </div>
                                                <div class="hobbie-description col-md-9">

                                                    <p>Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a tristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.</p>
                                                </div>
                                            </div>
                                            <div style="clear:both;"></div>
                                        </div>
                                        <div class="tab-pane fade" id="facts">
                                            <h3>FACTS</h3>
                                            <h4>NUMBERS ABOUT ME</h4>
                                            <div class="facts-wrapper col-md-6">
                                                <div class="facts-icon"><i class=" li_cup"></i>
                                                </div>
                                                <div class="facts-number">920</div>
                                                <div class="facts-description">CUPS OF COFFEE</div>
                                            </div>
                                            <div class="facts-wrapper col-md-6">
                                                <div class="facts-icon"><i class="li_bulb"></i>
                                                </div>
                                                <div class="facts-number">65</div>
                                                <div class="facts-description">PROJECTS COMPLETED</div>
                                            </div>
                                            <div class="facts-wrapper col-md-6">
                                                <div class="facts-icon"><i class="li_clock"></i>
                                                </div>
                                                <div class="facts-number">2965</div>
                                                <div class="facts-description">HOURS OF CODING</div>
                                            </div>
                                            <div class="facts-wrapper col-md-6">
                                                <div class="facts-icon"><i class="li_t-shirt"></i>
                                                </div>
                                                <div class="facts-number">35</div>
                                                <div class="facts-description">WORKSHOPS</div>
                                            </div>
                                            <div class="facts-wrapper col-md-6">
                                                <div class="facts-icon"><i class="li_display"></i>
                                                </div>
                                                <div class="facts-number">2M</div>
                                                <div class="facts-description">LINES OF CODE</div>
                                            </div>
                                            <div class="facts-wrapper col-md-6">
                                                <div class="facts-icon"><i class=" li_like"></i>
                                                </div>
                                                <div class="facts-number">100</div>
                                                <div class="facts-description">SATISFIED CUSTOMERS</div>
                                            </div>
                                            <div style="clear:both;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </article>
                <!-- End About Section -->

                <!-- Resume Section -->
                <article class="hs-content resume-section" id="section2">
                    <span class="sec-icon fa fa-newspaper-o"></span>
                    <div class="hs-inner">
                        <span class="before-title">.02</span>
                        <h2>RESUME</h2>
                        <!-- Resume Wrapper -->
                        <div id="tree-container"></div>
                        <div id="tree-table-container" align="center">
                            <table class="table table-hover" id="tree-table">
                                <tr class="head">
                                    <td>First Node</td>
                                    <td>Second Node</td>
                                    <td>Third Node</td>
                                    <td>Fourth Node</td>
                                    <td>Fifth Node</td>
                                </tr>
                            </table>
                        </div>
                        <div class="resume-wrapper">
                            <ul class="resume">
                                <!-- Resume timeline -->
                                <li class="time-label">
                                    <span class="content-title">EDUCATION</span>
                                </li>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-graduation-cap"></span>
                                        <div class="resume-date">
                                            <span>2008</span>
                                            <div class="separator"></div>
                                            <span>2010</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker"></i>San fransico</span>
                                        <h3 class="timeline-header">COMPUTER ENGINEERING - PHD</h3>
                                        <div class="timeline-body">
                                            <h4>UNIVERSITY OF CALIFORNIA</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-graduation-cap"></span>
                                        <div class="resume-date">
                                            <span>2004</span>
                                            <div class="separator"></div>
                                            <span>2008</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker"></i>San fransico</span>
                                        <h3 class="timeline-header">ELECTRONICS ENGINEERING</h3>
                                        <div class="timeline-body">
                                            <h4>UNIVERSITY OF CALIFORNIA</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="time-label">
                                    <span class="content-title">ACADEMIC AND PROFESSIONAL POSITIONS</span>
                                </li>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-university"></span>
                                        <div class="resume-date">
                                            <span>2009</span>
                                            <div class="separator"></div>
                                            <span>2010</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker"></i>San fransico</span>
                                        <h3 class="timeline-header">GRADUATE STUDENT RESEARCHER</h3>
                                        <div class="timeline-body">
                                            <h4>OXFORD UNIVERSITY COMPUTING LABORATORY</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-university"></span>
                                        <div class="resume-date">
                                            <span>2009</span>
                                            <div class="separator"></div>
                                            <span>2010</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker"></i>San fransico</span>
                                        <h3 class="timeline-header">LAB ASSISTANT</h3>
                                        <div class="timeline-body">
                                            <h4>OXFORD UNIVERSITY COMPUTING LABORATORY</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-university"></span>
                                        <div class="resume-date">
                                            <span>2008</span>
                                            <div class="separator"></div>
                                            <span>2009</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker"></i>San fransico</span>
                                        <h3 class="timeline-header">RESEARCH ASSISTANT</h3>
                                        <div class="timeline-body">
                                            <h4>UNIVERSITY OF NANTES</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="time-label">
                                    <span class="content-title">HONORS AND AWARDS</span>
                                </li>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-star-o"></span>
                                        <div class="resume-date">
                                            <span>2009</span>
                                            <div class="separator"></div>
                                            <span>2010</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker"></i>San fransico</span>
                                        <h3 class="timeline-header">MELLON GRANT</h3>
                                        <div class="timeline-body">
                                            <h4>COMPETITIVE AWARD FOR ACADEMIC EXCELLENCE</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-star-o"></span>
                                        <div class="resume-date">
                                            <span>2008</span>
                                            <div class="separator"></div>
                                            <span>2009</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker"></i>San fransico</span>
                                        <h3 class="timeline-header">TRITON AWARD</h3>
                                        <div class="timeline-body">
                                            <h4>COMPETITIVE AWARD FOR ACADEMIC EXCELLENCE</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Resume timeline -->
                            </ul>
                        </div>
                        <!-- End Resume Wrapper -->
                    </div>
                </article>
                <!-- End Resume Section-->

                <!-- Publication Section -->
                <article class="hs-content publication-section" id="section3">
                    <span class="sec-icon fa fa-pencil"></span>
                    <div class="hs-inner">
                        <span class="before-title">.03</span>
                        <h2>PUBLICATIONS</h2>
                        <!-- Filter/Sort Menu -->
                        <span class="content-title">PUBLICATIONS LIST</span>
                        <div class="row publication-form">
                            <div class="col-md-6 publication-filter">
                                <div class="card-drop">
                                    <a class='toggle'>
                                        <i class='icon-suitcase'></i>
                                        <span class='label-active'>ALL</span>
                                    </a>
                                    <ul id="filter">
                                        <li class='active'><a data-label="ALL" data-group="all">ALL</a>
                                        </li>
                                        <li><a data-label="JOURNAL PAPERS" data-group="JOURNAL PAPERS">JOURNAL PAPERS</a>
                                        </li>
                                        <li><a data-label="CONFERENCES" data-group="CONFERENCES">CONFERENCES</a>
                                        </li>
                                        <li><a data-label="DEMONSTRATIONS" data-group="DEMONSTRATIONS">DEMONSTRATIONS</a>
                                        </li>
                                        <li><a data-label="THESES" data-group="THESES">THESES</a>
                                        </li>
                                        <li><a data-label="BOOK CHAPTERS" data-group="BOOK CHAPTERS">BOOK CHAPTERS</a>
                                        </li>
                                        <li><a data-label="BOOK" data-group="BOOK">BOOK</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 publication-sort">
                                <div class="sorting-button">
                                    <span>SORTING BY DATE</span>
                                    <button class="desc"><i class="fa fa-sort-numeric-desc"></i>
                                    </button>
                                    <button class="asc"><i class="fa fa-sort-numeric-asc"></i>
                                    </button>
                                </div>


                            </div>
                        </div>
                        <!-- End Filter/Sort Menu -->
                        <div class="chart-container" style="width: 100%;">
                            <div id="container" style="height: 600px;width: 100%; margin: 0; text-align:center; line-height: 100px" data-highcharts-chart="0">
                            </div>
                        </div>
                        <!-- publication wrapper -->
                        <div id="mygrid">
                            <!-- publication item -->
                            <div class="publication_item" data-groups='["all","CONFERENCES"]' data-date-publication="2007-12-01">
                                <div class="media">
                                    <a href=".publication-detail1" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">1</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-primary">Conferences</span>
                                    <span class="label selected">Selected</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail1 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-primary">Conferences</span>
                                        <span class="label selected">Selected</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End publication item -->

                            <!-- publication item -->
                            <div class="publication_item" data-groups='["all","JOURNAL PAPERS"]' data-date-publication="2007-12-02">
                                <div class="media">
                                    <a href=".publication-detail2" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">2</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-success">Journal Paper</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail2 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-success">Journal Paper</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","DEMONSTRATIONS"]' data-date-publication="2007-12-03">
                                <div class="media">
                                    <a href=".publication-detail3" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">3</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-warning">Demonstrations</span>
                                    <span class="label selected">Selected</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail3 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-warning">Demonstrations</span>
                                        <span class="label selected">Selected</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","DEMONSTRATIONS"]' data-date-publication="2007-12-04">
                                <div class="media">
                                    <a href=".publication-detail4" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">4</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-warning">Demonstrations</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail4 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-warning">Demonstrations</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","THESES"]' data-date-publication="2007-12-05">
                                <div class="media">
                                    <a href=".publication-detail5" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">5</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-default">Theses</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail5 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-default">Theses</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","THESES"]' data-date-publication="2007-12-06">
                                <div class="media">
                                    <a href=".publication-detail6" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">6</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-default">Theses</span>
                                    <span class="label selected">Selected</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail6 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-default">Theses</span>
                                        <span class="label selected">Selected</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","BOOK CHAPTERS"]' data-date-publication="2007-12-07">
                                <div class="media">
                                    <a href=".publication-detail7" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">7</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span>
                                    </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-danger">Book Chapters</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail7 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-danger">Book Chapters</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","BOOK CHAPTERS"]' data-date-publication="2007-12-08">
                                <div class="media">
                                    <a href=".publication-detail8" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">8</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-danger">Book Chapters</span>
                                    <span class="label selected">Selected</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail8 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-danger">Book Chapters</span>
                                        <span class="label selected">Selected</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","BOOK"]' data-date-publication="2007-12-09">
                                <div class="media">
                                    <a href=".publication-detail9" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">9</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-info">Book</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail9 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-info">Book</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","JOURNAL PAPERS"]' data-date-publication="2007-12-10">
                                <div class="media">
                                    <a href=".publication-detail10" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">10</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-success">Journal Paper</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail10 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-success">Journal Paper</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","BOOK"]' data-date-publication="2007-12-11">
                                <div class="media">
                                    <a href=".publication-detail11" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">11</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-info">Book</span>
                                    <span class="label selected">Selected</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail11 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-info">Book</span>
                                        <span class="label selected">Selected</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","THESES"]' data-date-publication="2007-12-12">
                                <div class="media">
                                    <a href=".publication-detail12" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">12</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-default">Theses</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail12 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-default">Theses</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->

                            <!-- Publication item -->
                            <div class="publication_item" data-groups='["all","CONFERENCES"]' data-date-publication="2007-12-13">
                                <div class="media">
                                    <a href=".publication-detail13" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                    <div class="date pull-left">
                                        <span class="day">13</span>
                                        <span class="month">DEC</span>
                                        <span class="year">2007</span>
                                    </div>
                                    <div class="media-body">
                                        <h3>TITLE OF PUBLICATION</h3>
                                        <h4>VANCOUVER - CANADA</h4>
                                        <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                    <hr style="margin:8px auto">
                                    <span class="label label-primary">Conferences</span>
                                    <span class="label selected">Selected</span>
                                    <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                </div>
                                <div class="mfp-hide mfp-with-anim publication-detail13 publication-detail">
                                    <div class="image_work">
                                        <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                    </div>
                                    <div class="project_content">
                                        <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                        <span class="publication_authors"><strong>Johnny smith</strong>, Dumas, C., Milleville-Pennel, I.</span>
                                        <span class="label label-primary">Conferences</span>
                                        <span class="label selected">Selected</span>
                                        <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                            <br>
                                            <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <!-- End Publication item -->
                        </div>
                        <!-- End Publication Wrapper -->
                    </div>
                    <div class="clear"></div>
                </article>
                <!-- End Publication Section -->

                <!-- Research Section -->
                <article class="hs-content research-section" id="section4">
                    <span class="sec-icon fa fa-flask"></span>
                    <div class="hs-inner">
                        <span class="before-title">.04</span>
                        <h2>RESEARCH</h2>
                        <span class="content-title">LABORATORY TEAM</span>
                        <div class="team_wrapper">
                            <div class="team-card-container">
                                <div class="card">
                                    <div class="front team1">
                                        <div class="front-detail">
                                            <h4>JOHN DOE</h4>
                                            <h3>RESEARCH ASSISTANT</h3>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivam.</p>
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-container">
                                <div class="card">
                                    <div class="front team2">
                                        <div class="front-detail">
                                            <h4>JENNIFER DOE</h4>
                                            <h3>ASSOCIATE PROFESSOR</h3>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivam.</p>
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-container">
                                <div class="card">
                                    <div class="front team3">
                                        <div class="front-detail">
                                            <h4>JOHNATAN DOE</h4>
                                            <h3>SENIOR RESEARCH TECHNICIAN</h3>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivam.</p>
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-card-container">
                                <div class="card">
                                    <div class="front team4">
                                        <div class="front-detail">
                                            <h4>CATHERINE DOE</h4>
                                            <h3>RESEARCH FELLOW</h3>
                                        </div>
                                    </div>
                                    <!--end front panel-->
                                    <div class="back">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivam.</p>
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="content-title">RESEARCH PROJECTS</span>
                        <div class="slide-wrapper">
                            <nav>
                                <a class="fa fa-angle-left" id="btn-prev"></a>
                                <a class="fa fa-angle-right" id="btn-next"></a>

                            </nav>
                            <div class="slider-details">
                                <span class="slide-counter"></span>
                                <span class="slide-date"><i class="li_calendar"></i></span>
                            </div>

                            <div class="slide active" data-date="2006/2007">
                                <div class="slide-header">
                                    <h3>PROJECT TITLE</h3>
                                    <h4>DESCRIPTION OF THE PROJECT</h4>
                                </div>
                                <div class="slide-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non .</p>
                                </div>
                            </div>
                            <div class="slide" data-date="2008/2009">
                                <div class="slide-header">
                                    <h3>PROJECT TITLE</h3>
                                    <h4>DESCRIPTION OF THE PROJECT</h4>
                                </div>
                                <div class="slide-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non .</p>
                                </div>
                            </div>
                            <div class="slide" data-date="2004/2005">
                                <div class="slide-header">
                                    <h3>PROJECT TITLE</h3>
                                    <h4>DESCRIPTION OF THE PROJECT</h4>
                                </div>
                                <div class="slide-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non .</p>
                                </div>
                            </div>
                            <div class="slide" data-date="2010/2011">
                                <div class="slide-header">
                                    <h3>PROJECT TITLE</h3>
                                    <h4>DESCRIPTION OF THE PROJECT</h4>
                                </div>
                                <div class="slide-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non .</p>
                                </div>
                            </div>
                            <div class="slide" data-date="2011/2012">
                                <div class="slide-header">
                                    <h3>PROJECT TITLE</h3>
                                    <h4>DESCRIPTION OF THE PROJECT</h4>
                                </div>
                                <div class="slide-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo.Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non .</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </article>
                <!-- End Research Section -->

                <!-- Teaching Section -->
                <article class="hs-content teaching-section" id="section5">
                    <span class="sec-icon fa fa-book"></span>
                    <div class="hs-inner">
                        <span class="before-title">.05</span>
                        <h2>TEACHING</h2>
                        <div class="portfolio" align="center">
                            <figure class="effect-milo" style="display: block;">
                                <h1>A Re-Recreation of Gapminder’s Wealth & Health of Nations</h1>
                                <i>Use your mouse to click and drag countries (represented as circles) to explore +200 years of life expectancy and income indicators.</i></p>
                                <div id="chart" style="margin:0px"></div>
                                <input type="range" name="points" min="0" max="208" step="1" value="0" id="slider-time">
                            </figure>
                        </div>

                        <div class="teaching-wrapper">
                            <ul class="teaching">
                                <li class="time-label">
                                    <span class="content-title">CURRENT</span>
                                </li>
                                <li>
                                    <div class="teaching-tag">
                                        <span class="fa fa-suitcase"></span>
                                        <div class="teaching-date">
                                            <span>NOW</span>
                                            <div class="separator"></div>
                                            <span>2010</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">ASSISTANT PROFESSOR</h3>
                                        <div class="timeline-body">
                                            <h4>UNIVERSITY OF CALIFORNIA</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="teaching-tag">
                                        <span class="fa fa-suitcase"></span>
                                        <div class="teaching-date">
                                            <span>NOW</span>
                                            <div class="separator"></div>
                                            <span>2008</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">TEACHING ASSISTANT</h3>
                                        <div class="timeline-body">
                                            <h4>UNIVERSITY OF CALIFORNIA</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="time-label">
                                    <span class="content-title">TEACHING HISTORY</span>
                                </li>
                                <li>
                                    <div class="teaching-tag">
                                        <span class="fa fa-suitcase"></span>
                                        <div class="teaching-date">
                                            <span>2009</span>
                                            <div class="separator"></div>
                                            <span>2010</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">ADJUNCT PROFESSOR</h3>
                                        <div class="timeline-body">
                                            <h4>OXFORD UNIVERSITY COMPUTING LABORATORY</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="teaching-tag">
                                        <span class="fa fa-suitcase"></span>
                                        <div class="teaching-date">
                                            <span>2009</span>
                                            <div class="separator"></div>
                                            <span>2010</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">TEACHING ASSISTANT</h3>
                                        <div class="timeline-body">
                                            <h4>OXFORD UNIVERSITY COMPUTING LABORATORY</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="teaching-tag">
                                        <span class="fa fa-suitcase"></span>
                                        <div class="teaching-date">
                                            <span>2008</span>
                                            <div class="separator"></div>
                                            <span>2009</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">TEACHING ASSISTANT</h3>
                                        <div class="timeline-body">
                                            <h4>UNIVERSITY OF NANTES</h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
                <!-- End Teaching Section -->

                <!-- Skills Section -->
                <article class="hs-content skills-section" id="section6">
                    <span class="sec-icon fa fa-diamond"></span>
                    <div class="hs-inner">
                        <span class="before-title">.06</span>
                        <h2>SKILLS</h2>
                        <div class="portfolio" align="center">
                            <figure class="effect-milo" style="display: inline-block;">
                                <div class="mbostock1" style="background-color: white;"></div>
                            </figure>
                        </div>
                        <span class="content-title">PROGRAMMING SKIILLS</span>
                        <div class="skolls">
                            <span class="skill-description">Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivam.</span>
                            <div class="bar-main-container">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="60"></div>
                                    <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : INTERMEDIATE</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 3 YEARS</span>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                    <span class="label">Php</span><span class="label">Asp</span><span class="label">Wordpress</span>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                        <span class="content-title">DESIGN SKILLS</span>
                        <div class="skolls">

                            <span class="skill-description">Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivam.</span>
                            <div class="bar-main-container">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="80"></div>
                                    <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : INTERMEDIATE</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 4 YEARS</span>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                    <span class="label">Photoshop</span><span class="label">Illustrator</span>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                        <span class="content-title">OFFICE SKILLS</span>
                        <div class="skolls">

                            <span class="skill-description">Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivam.</span>
                            <div class="bar-main-container">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="40"></div>
                                    <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : ADVANCED</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 5 YEARS</span>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                    <span class="label">Ms excel</span><span class="label">Ms word</span><span class="label">Ms powerpoint</span>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                        <span class="content-title">SOCIAL SKILLS</span>
                        <div class="skolls">
                            <span class="skill-description">Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivam.</span>
                            <div class="bar-main-container">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="90"></div>
                                    <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : EXPERT</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 6 YEARS</span>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                    <span class="label">Event production</span><span class="label">Media relation</span>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Skills Section -->

                <!-- Works Section -->
                <article class="hs-content works-section" id="section7">
                    <span class="sec-icon fa fa-archive"></span>
                    <div class="hs-inner">
                        <span class="before-title">.07</span>
                        <h2>WORKS</h2>
                        <div class="portfolio">
                            <!-- Portfolio Item -->
                            <figure class="effect-milo">
                                <div class="mbostock2" style="background-color: white;"></div>
                                <figcaption>
                                    <div class="portfolio_button">
                                        <a href=".work1" class="open_popup" data-effect="mfp-zoom-out" onclick="showModal()">
                                            <i class="hovicon effect-9 sub-b"><i class="fa fa-search"></i></i>
                                        </a>
                                    </div>
                                    <div class="mfp-hide mfp-with-anim work_desc work1">
                                        <div class="col-md-12">
                                            <div class="mbostock2" align="center"></div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- End Portfolio Item -->
                        </div>
                        <!-- End Portfolio Wrapper -->
                    </div>
                </article>
                <!-- End Works Section -->

                <!-- Contact Section -->
                <article class="hs-content contact-section" id="section8">
                    <span class="sec-icon fa fa-paper-plane"></span>
                    <div class="hs-inner">
                        <span class="before-title">.08</span>
                        <h2>CONTACT</h2>
                        <div class="contact_info">
                            <h3>Get in touch</h3>
                            <hr>
                            <h5>We are waiting to assist you</h5>
                            <h6>Simply use the form below to get in touch</h6>

                            <hr>
                        </div>
                        <!-- Contact Form -->
                        <fieldset id="contact_form">
                            <div id="result"></div>
                            <input type="text" name="name" id="name" placeholder="NAME" />
                            <input type="email" name="email" id="email" placeholder="EMAIL" />
                            <textarea name="message" id="message" placeholder="MESSAGE"></textarea>
                            <span class="submit_btn" id="submit_btn">SEND MESSAGE</span>
                        </fieldset>
                        <!-- End Contact Form -->
                    </div>
                </article>
                <!-- End Contact Section -->
            </div>
            <!-- End hs-content-wrapper -->
        </div>
        <!-- End hs-content-scroller -->
    </div>
    <!-- End container -->
    <div id="my-panel">
    </div>

    <!-- PLUGIN SCRIPTS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/watch.js"></script>
    <script type="text/javascript" src="js/layout.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- <script src="res-bubblecharts/js/dragit.js"></script>     -->
    <script src="res-mbostock1/js/script.js"></script>
    
    <script src="res-highcharts/js/script.js" type="text/javascript"></script>
    <script src="res-highcharts/maps/highmaps.js"></script>
    <script src="res-highcharts/mapdata/countries/us/us-all-all.js"></script>
    <!-- <script type="text/javascript" src="res-bubblecharts/js/dragituse.js"></script>   -->
    <script src="res-mbostock2/js/script.js"></script>  
    <!-- END PLUGIN SCRIPTS -->
    <script src="res-bubblecharts/js/dragit.js"></script>
    <script type="text/javascript" src="res-bubblecharts/js/dragituse.js"></script>
    <script src="res-dragdrop/dndTree.js"></script>

</body>

</html>
