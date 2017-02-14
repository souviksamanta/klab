<?php include('includes/header.php'); ?>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/vegas.min.js"></script>
    <nav class="navbar navbar-default navbar-fixed-top navbar-border" role="navigation">
      <div class="header col-lg-12 col-md-4">
        <div class=" pull-right">
          <ul class="header-bar">
            <li><a href="#" role="button" data-toggle="modal" data-target="#login-modal">login</a></li>
            <li><a href="#" role="button" data-toggle="modal" data-target="#register-modal">register</a></li>
          </ul>
        </div>
        <?php include('includes/login_reg_modal.php'); ?>
      </div>
      <a class="navbar-brand page-scroll klimg" href="#page-top"><img src="images/knowledge_png.png" style=" height: 170px; padding-bottom: 110px; bottom: 110px;margin-left: 20px"></a>
    	<div class="navbar-header page-scroll">
     		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>          
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse navbar-top" style=" padding-right: 20px" > 
        <ul class="nav navbar-nav navbar-right ">
          <li><a class="page-scroll" href="#submenu"><h4 style="color: #333; font-family: myFirstFont; font-size: 16px; ">LEARNING APP</h4></a></li>
          <li><a class="page-scroll" href="#menu2"><h4 style="color: #333; font-family: myFirstfont; font-size: 16px;">TRAINING LAB</h4></a></li>
          <li class="visible-xs"><a class="page-scroll" href="#menu5"><h5 style="color: #333; margin-top: 0px; font-family: myFirstFont">Testimonial</h5></a></li>
          <li class="visible-xs"><a class="page-scroll" href="index1.html#submenu6"><h5 style="color: #333; margin-top: 0px;font-family: myFirstFont">Mission</h5></a></li>
          <li class="visible-xs"><a class="page-scroll" href="index1.html#submenu4"><h5 style="color: #333; margin-top: 0px;font-family: myFirstFont">About Us</h5></a></li>
          <li class="visible-xs"><a class="page-scroll" href="index1.html#submenu8"><h5 style="color: #333; margin-top: 0px;font-family: myFirstFont">Work With Us</h5></a></li>
          <li class="visible-xs"><a class="page-scroll" href="#contact"><h5 style="color: #333; margin-top: 0px;font-family: myFirstFont">Contact us</h5></a></li>   
          <li class="custom-dropdown hidden-xs">
            <div class="holder">                             
              <button class="btn dropbtton mybtn" onclick="myFunction()">
                <i class="fa fa-bars"> </i>MENU
              </button>
              <div id="myDropdown" class="dropdown-content">
                <a class="page-scroll" href="#menu5"><h5 style="color: #333; margin-top: 0px; font-family: myFirstFont">Testimonial</h5></a>
                <a class="page-scroll" href="index1.html#submenu6"><h5 style="color: #333; margin-top: 0px;font-family: myFirstFont">Mission</h5></a>
                <a class="page-scroll" href="index1.html#submenu4"><h5 style="color: #333; margin-top: 0px;font-family: myFirstFont">About Us</h5></a>
                <a class="page-scroll" href="index1.html#submenu8"><h5 style="color: #333; margin-top: 0px;font-family: myFirstFont">Work With Us</h5></a>
                <a class="page-scroll" href="#contact"><h5 style="color: #333; margin-top: 0px;font-family: myFirstFont">Contact us</h5></a>
              </div>
            </div>
          </li>
      	</ul>
  		</div>
    </nav>
    <section id="intro" class="intro-section">
      <div class="container intro-container">
        <div class="intro-sec  col-md-6">
        	<div class="video" style="text-align: center;">
          <i class="fa fa-play-circle-o fa-4" aria-hidden="true" style="font-size: 60px; color:  #9ab51f;"> </i>
          <h4 style="font-size: 16px; color:  #FFF; text-align: center;">VIEW DEMO</h4>
					</div>
					<div class="col-md-4 col-md-offset-2 video-btn"><button class="page-scroll btn btn-xl app-btn" onClick="location.href='#'">FREE TRAIL</button></div>
					<div class="col-md-2 video-btn" ><button class="page-scroll btn btn-xl app-btn" onClick="location.href='#'">SUBSCRIBE</button></div>
        </div> 
        <div class="col-md-2"></div>
        <div class="intro-text col-md-4 col-xs-hidden col-sm-hidden">
          <div class="container">
             <div class="text" style="text-align: left; font-family: myFirstFont; font-size: 18px; float: right; font-weight: bold;">
               <p style="color:  #9ab51f;"> Excel in college</p>
               <p style="color:  #fff;"> With the worlds first <br> Learning App with best <br> open source content <br> mapped to your syllabus.</p><br><br>
               <p style="color:  #9ab51f; font-size:15px; ">GET READY FOR TOMORROW. TODAY.</p>
              </div>
          </div>
        </div>      
      </div>
    </section>
    <hr class="image-bottom-boder"></hr>
    <div  class="tag-line" >
      <div class="container">
        <div class="row  text-center">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p>IN THE LAST 2 YEARS, 8500 ENGINEERING STUDENTS STUDIED FROM THE KNOWLEDGELAB APP TO MASTER</BR> THE SUBJECTS TAUGHT IN CLASS, PRACTICE AND APPLY THEIR KNOWLEDGE TO EXCELIN THE UNIVERSITY EXAMS. </p>
          </div>
        </div>
      </div>  
    </div>
    <section id="services" class="bg-light-gray portfolio-background submenu1-section">
      <div class="container" >
        <div class="row">
          <div class="col-lg-12 ">
            <h2 class="section-heading">Guiding students through college years <br>and connecting to the industry.</h2>
            <hr class="primary">
          </div>
          <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 840px; height: 400px; overflow: hidden; visibility: hidden;">
            <div data-u="slides" style="cursor: default; position: absolute;top: 50px; left: 10px; width: 1000px; height: 600px;overflow: hidden">
              <div class="col-md-4 col-sm-6 portfolio-item">
                <div class="portfolio-caption bottom-section1" style=" text-align: center; background-color: #f9f9f9">
                  <div class="title-area">
                    <img src="images/service/Log_in.png" class="img-responsive" alt="myimg" style=" padding: 27px 40px 10px 70px">
                    <h4 style="color: #006cae;"> A tech-enabled <br>learning system</h4>
                    <h5 class="text-muted text1 title" style=" font-size: 14px"><br>The Learning App makes <br> the subjects super easy <br> to understand. Accessible <br>offline, our students<br> study anywhere, anytime in<br>  big cities or small towns. <br><br><br></h5>
                  </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 col-sm-6 portfolio-item">
                <div class="portfolio-caption bottom-section1" style=" text-align: center; background-color: #f9f9f9">
                  <div class="title-area">
                    <img src="images/service/Training.png" class="img-responsive" alt="myimg" style=" padding: 25px 40px 8px 70px">
                    <h4 style="color: #006cae;">Develop skills on <br>emerging technologies</h4>
                    <h5 class="text-muted text1 title" style=" font-size: 14px"><br>Our online and offline <br>trainings, workshops and <br>internships help our<br> students to be skilled <br>in technologies sought<br> by the industry.<br><br><br></h5>
                  </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 col-sm-6 portfolio-item">
                <div class="portfolio-caption bottom-section1" style=" text-align: center; background-color: #f9f9f9">
                  <div class="title-area">
                    <img src="images/service/Apply_contact.png" class="img-responsive" alt="myimg" style=" padding: 25px 40px 15px 60px">
                    <h4 style="color: #006cae;">Connect to the industry</h4>
                    <h5 class="text-muted text1 title" style=" font-size: 14px"><br>Students can apply <br>directly to hundreds of <br>job opportunities.<br> <br>Employers can view progress<br> through college and judge<br> the students’ strengths. <br><br><br></h5>
                  </div>
                </div>
                <br>
              </div>
            </div>
            <span data-u="arrowleft" class="jssora03l" style="top: 0px;left:12px;width:55px;height:55px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora03r" style="top: 0px;right:0px;width:55px;height:55px;" data-autocenter="2"></span>
            <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
          </div>
          <script>
            jssor_1_slider_init();
          </script>
        </div>
      </div>
    </section>
    <section id="menu2" class="bg-light-gray portfolio-background menu2-section">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 ">
                  <h1 class="text-center border-sider">
                    <span>Summer Training Programs</span>    
                  </h1>                                        
                </div>
            <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <script>
        jssor_51_slider_init = function() {
            
            var jssor_51_options = {
              $AutoPlay: false,
              $AutoPlaySteps: 1,
              $SlideDuration: 1500,
            
              $SlideWidth: 275,
              $SlideHeight: 600,              
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            var jssor_51_slider = new $JssorSlider$("jssor_51", jssor_51_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_51_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_51_slider.$ScaleWidth(refSize);
                    
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
       .jssorb503 {
            position: absolute;
        }
        
        .jssorb503 div { background-position: -5px -4px; }
        .jssorb503 div:hover, .jssorb503 .av:hover { background-position: -35px -4px; }
        .jssorb503 .av { background-position: -65px -4px; }
        .jssorb503 .dn, .jssorb503 .dn:hover { background-position: -95px -4px; }  

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora503l, .jssora503r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('images/a03.png') no-repeat;
            overflow: hidden;
            
            
        }
        
        .jssora503l { background-position: -3px -33px; }
        .jssora503r { background-position: -63px -33px; }
        .jssora503l:hover { background-position: -123px -33px; }
        .jssora503r:hover { background-position: -183px -33px; }
        .jssora503l.jssora503ldn { background-position: -243px -33px; }
        .jssora503r.jssora503rdn { background-position: -303px -33px; }
    </style>


    <div id="jssor_51" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 840px; height: 600px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        
        <div data-u="slides" style="cursor: default; position: absolute;top: 50px; left: 10px; width: 1000px; height: 600px;overflow: hidden">
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/android.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px"><br><br>Date: Jun 20 onwards<br><br> (WBUT Summer Vacation)<br><br>Duration: 2 weeks<br><br>Venue: off EM Bypass<br> near Salt Lake<br><br>
Fee: Rs.4,850<br>(incl Service Tax)</h4>
                            </div>
                        </div>
                        
                    </a>
                <div class="portfolio-caption bottom-section" style=" text-align: center">
                    <h4 class="box-text">Learning Outcome</h4>
                    <div class="border-side1"></div>
                    <h5 class="text-muted box-text" style=" font-size: 16px">Understand basic<br> Android Development tools<br><br>

Create interactive <br>applications including <br>audio, video<br> and notifications<br><br>
Create applications<br> using SQLite database <br><br>
Run your project<br> on the emulator</h5>
                    </div>
                <br>
                <div class="btn-cb">
                <div class=" btn-d"><button class="page-scroll btn btn-xl" data-toggle="modal" data-target="#myModal1">GET SYLLABUS</button></div><div class=" btn-d btn-en" ><button class="page-scroll btn btn-xl" onClick="location.href='form1.html'">ENROLL NOW</button></div>
                </div></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/bigdata_hadoop.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px"><br><br>Date: Jun 20 onwards<br><br> (WBUT Summer Vacation)<br><br>Duration: 2 weeks<br><br>Venue: off EM Bypass<br> near Salt Lake<br><br>
Fee: Rs.4,850<br>(incl Service Tax)</h4>
                            </div>
                        </div>
                        
                    </a>
                <div class="portfolio-caption bottom-section" style=" text-align: center">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <h5 class="text-muted box-text" style=" font-size: 16px">Understand role of<br> Big Data & Analytics <br><br>Design & develop<br> Big Data solution <br><br>Differentiate between <br>Real Time Querying & <br>Historical Data Analysis
<br><br>Generate visualization <br>for BigData using Python,<br> Java, Scala, Spark and BIRT</h5>
                    </div>
                <br>
                <div class="btn-cb">
                <div class=" btn-d"><button class="page-scroll btn btn-xl" data-toggle="modal" data-target="#myModal2">GET SYLLABUS</button></div><div class=" btn-d btn-en" ><button class="page-scroll btn btn-xl" onClick="location.href='form1.html'">ENROLL NOW</button></div>
                </div><div class=" btn-d"><button class="page-scroll btn btn-xl btn-sm" onClick="location.href='big_data_sm.html'">STUDY MATERIAL</button></div></div>               
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/php_mysql.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px"><br><br>Date: Jun 20 onwards<br><br> (WBUT Summer Vacation)<br><br>Duration: 2 weeks<br><br>Venue: off EM Bypass<br> near Salt Lake<br><br>
Fee: Rs.4,850<br>(incl Service Tax)</h4>
                            </div>
                        </div>
                        
                    </a>
                <div class="portfolio-caption bottom-section" style=" text-align: center">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <h5 class="text-muted box-text" style=" font-size: 16px">Understand basics <br>of Web Technology <br><br>Build interactive data<br> driven websites <br><br>Installation & <br>configuration of <br>PHP & MySQL
<br><br>Work with PHP <br>text mails and <br>HTML emails Upload<br> files to server</h5>
                    </div>
                <br>
                <div class="btn-cb">
                <div class=" btn-d"><button class="page-scroll btn btn-xl" data-toggle="modal" data-target="#myModal3">GET SYLLABUS</button></div><div class=" btn-d btn-en" ><button class="page-scroll btn btn-xl" onClick="location.href='form1.html'">ENROLL NOW</button></div>
                </div></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/Arduino_Microcontroller.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px"><br><br>Date: Jun 20 onwards<br><br> (WBUT Summer Vacation)<br><br>Duration: 2 weeks<br><br>Venue: off EM Bypass<br> near Salt Lake<br><br>
Fee: Rs.4,850<br>(incl Service Tax)</h4>
                            </div>
                        </div>
                        
                    </a>
                <div class="portfolio-caption bottom-section" style=" text-align: center">
                        <h4>Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <h5 class="text-muted box-text" style=" font-size: 16px">Introduction to Arduino<br><br>Practical sessions on<br> Arduino software<br><br>Skills for designing<br> projects on Arduino<br><br>
Live projects on<br> Arduino</h5>
                    </div>
                <br>
                <div class="btn-cb">
                <div class=" btn-d"><button class="page-scroll btn btn-xl" data-toggle="modal" data-target="#myModal4">GET SYLLABUS</button></div><div class=" btn-d btn-en" ><button class="page-scroll btn btn-xl" onClick="location.href='form1.html'">ENROLL NOW</button></div>
                </div></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/Computer-Aided-Engineering.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px"><br><br>Date: Jun 20 onwards<br><br> (WBUT Summer Vacation)<br><br>Duration: 2 weeks<br><br>Venue: off EM Bypass<br> near Salt Lake<br><br>
Fee: Rs.4,850<br>(incl Service Tax)</h4>
                            </div>
                        </div>
                        
                    </a>
                <div class="portfolio-caption bottom-section" style=" text-align: center">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <h5 class="text-muted box-text" style=" font-size: 16px"> Understand Virtual <br>Modelling<br><br>
Learn about Sustainable <br>Design (Manufacturability <br>& Stability of a product)<br><br>
Appreciate feasibility <br>study (Stress/Strain <br>analysis)<br><br>
 Showcase a Virtual <br>Design<br><br>
</h5>
                    </div>
                <br>
                <div class="btn-cb">
                <div class=" btn-d"><button class="page-scroll btn btn-xl" data-toggle="modal" data-target="#myModal5">GET SYLLABUS</button></div><div class=" btn-d btn-en" ><button class="page-scroll btn btn-xl" onClick="location.href='form1.html'">ENROLL NOW</button></div>
                </div></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/BIM.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px"><br><br>Date: Jun 20 onwards<br><br> (WBUT Summer Vacation)<br><br>Duration: 2 weeks<br><br>Venue: off EM Bypass<br> near Salt Lake<br><br>
Fee: Rs.4,850<br>(incl Service Tax)</h4>
                            </div>
                        </div>
                        
                    </a>
                <div class="portfolio-caption bottom-section" style=" text-align: center">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <h5 class="text-muted box-text" style=" font-size: 16px">Understand the process<br> of creating a building<br> design/drawings<br><br>Create the <br>models/drawings <br>in minimum time<br><br>
Analyze the feasibility<br> of the designs<br><br>Showcase the <br>designs virtually</h5>
                    </div>
                <br>
                <div class="btn-cb">
                <div class=" btn-d"><button class="page-scroll btn btn-xl" data-toggle="modal" data-target="#myModal6">GET SYLLABUS</button></div><div class=" btn-d btn-en" ><button class="page-scroll btn btn-xl" onClick="location.href='form1.html'">ENROLL NOW</button></div>
                </div></div>
               
            
        </div>
        <!-- Bullet Navigator -->
        
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora503l" style="top: 0px;left:12px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora503r" style="top: 0px;right:0px;width:55px;height:55px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>
    <script>
        jssor_51_slider_init();
    </script>
        </div>
        </div>
    </section>
    
    <section id="submenu3" class="submenu3-section">
    <div class="col-lg-12">
                  <h3 class="text-center border-side">
                      <span>Seminar and Workshops</span>   </h3>   <br><br>
                </div>
    </section>
    <section id="menu3" class="menu3-section bg-light-gray portfolio-background">
        <div class="container" >
            <div class="row">
                
            
            <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jssor_11_slider_init = function() {
            
            var jssor_11_options = {
             $AutoPlay: false,
              $AutoPlaySteps: 1,
              $SlideDuration: 1500,
            
              $SlideWidth: 275,
              $SlideHeight: 600,              
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            var jssor_11_slider = new $JssorSlider$("jssor_11", jssor_11_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_11_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_11_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
       .jssorb013 {
            position: absolute;
        }
        
        .jssorb013 div { background-position: -5px -4px; }
        .jssorb013 div:hover, .jssorb013 .av:hover { background-position: -35px -4px; }
        .jssorb013 .av { background-position: -65px -4px; }
        .jssorb013 .dn, .jssorb013 .dn:hover { background-position: -95px -4px; }  

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora013l, .jssora013r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('images/a03.png') no-repeat;
            overflow: hidden;
            
        }
        
        .jssora013l { background-position: -3px -33px; }
        .jssora013r { background-position: -63px -33px; }
        .jssora013l:hover { background-position: -123px -33px; }
        .jssora013r:hover { background-position: -183px -33px; }
        .jssora013l.jssora013ldn { background-position: -243px -33px; }
        .jssora013r.jssora013rdn { background-position: -303px -33px; }
    </style>


    <div id="jssor_11" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 840px; height: 600px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        
        <div data-u="slides" style="cursor: default; position: absolute;top: 50px; left: 10px; width: 1000px; height: 600px;overflow: hidden">
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/swone.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px">Duration: 12 hrs<br>(6 hrs x 2 days)<br><br>
                                Free Development kit <br>for a group of <br>4 members<br><br>
                                Sample Projects: <br>             
                                Home Automation<br>
                                Intelligent Control <br>System<br>   
                                Interaction with <br>Environment<br><br>
                                For 1st and <br>2nd Year <br>B.Tech students</h4>
                            </div>
                        </div>
                        
                    </a>
                <div class="portfolio-caption bottom-section" style=" background-color: white">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <p class="text-muted box-text" style=" font-size: 16px">Introduction to Arduino<br><br>
                            Practical sessions <br>on Arduino software<br><br>
                            Skills for designing <br>projects on Arduino<br><br>
                            Live projects on <br>Arduino</p> <br><br>   
                       
                    </div>
                <br>
                <div class="btn-cb">
           
                </div></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/swtwo.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px">Duration: 24 hrs<br>(6 hrs x 4 days)<br><br>
                                    Date: Jun 27 onwards<br>(WBUT Summer Vacation)<br><br>
                                      <i class="fa fa-plus" aria-hidden="true"></i><br><br>
                                        3 months
                                        Online<br> Continuous Engagement<br> Plan for practice<br><br>
                                        Venue: off EM Bypass <br>near Salt Lake, Kolkata<br><br>
                                        Fee: Rs.2,999
                            </div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption bottom-section" style=" background-color: white">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <p class="text-muted box-text" style=" font-size: 16px">Fully ready to<br> answer questions on<br> C asked during all<br> interviews<br><br>
                        First steps to <br>understand and speak<br> in English, especially<br> for Bengali & Hindi<br> medium students</p><br>
                       
                    </div>
                <br>
                
                               <div class="btn-cb">
                                   <div class=" btn-d"><button class="page-scroll btn btn-xl" data-toggle="modal" data-target="#myModal7">GET SYLLABUS</button></div>
                <div class=" btn-d btn-en" ><button class="page-scroll btn btn-xl" onClick="location.href='form1.html'">ENROLL NOW</button></div>
                </div></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/swthree.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1" style=" background-color: white">
                                <h4 class="box-text" style=" font-size: 16px">Duration: 12 hrs<br>(6 hrs x 2 days)<br><br>
                                Free Arduino UNO kit<br> for a group of<br> 4 members<br><br>
                                Robotic System <br>
                                Communication <br>between 2 or more <br>electronic systems<br>
                                Automated Control <br>System in Industries<br>
                                Home Automation Kits<br><br>
                                For 3rd year <br>B.Tech students</h4>
                            </div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption bottom-section" style=" background-color: white">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <p class="text-muted box-text" style=" font-size: 16px">Introduction to Arduino<br><br>
                        Usage of Arduino<br> IDE and high <br>level language C<br><br>
                        Program Arduino,<br> upload code and <br>hook up circuit<br>
                        Live projects <br>on Arduino</p><br>
                        
                    </div>
                <br>
                <div class="btn-cb">
              
                </div></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/swfour.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px">Duration: 12 hrs<br>(6 hrs x 2 days)<br><br>
                                Free Development kit <br>for a group of<br> 4 members<br><br>
                                Sample Projects: <br>             
                                Smart homes/cities<br>
                                Intelligent Control<br> System with Analytics<br>   
                                Intelligent office<br><br>
                                For 3rd year <br>B.Tech students</h4>
                            </div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption bottom-section" style=" background-color: white">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <p class="text-muted box-text" style=" font-size: 16px">Communication protocols &<br> their use in IOT<br><br>
                            Understand Sensors<br> & Actuators<br><br>
                            Understand Data<br> Logging<br><br>
                            Connect devices <br>on a network</p><br>
                       
                    </div>
                <br>
                
                               <div class="btn-cb">
              
                </div></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/swone.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px">Duration: 12 hrs<br>(6 hrs x 2 days)<br><br>
                                Free Development kit <br>for a group of <br>4 members<br><br>
                                Sample Projects: <br>             
                                Home Automation<br>
                                Intelligent Control <br>System<br>   
                                Interaction with <br>Environment<br><br>
                                For 1st and <br>2nd Year <br>B.Tech students</h4>
                            </div>
                        </div>
                        
                    </a>
                <div class="portfolio-caption bottom-section" style=" background-color: white">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <p class="text-muted box-text" style=" font-size: 16px">Introduction to Arduino<br><br>
                            Practical sessions <br>on Arduino software<br><br>
                            Skills for designing <br>projects on Arduino<br><br>
                            Live projects on <br>Arduino</p> <br><br>   
                       
                    </div>
                <br>
                <div class="btn-cb">
            
                </div></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/portfolio/swtwo.png" class="img-responsive" alt="myimg">
                        <div class="portfolio-hover box2">
                            
                            <div class="portfolio-hover-content box1">
                                <h4 class="box-text" style=" font-size: 16px">Duration: 24 hrs<br>(6 hrs x 4 days)<br><br>
                                    Date: Jun 27 onwards<br>(WBUT Summer Vacation)<br><br>
                                      <i class="fa fa-plus" aria-hidden="true"></i><br><br>
                                        3 months
                                        Online<br> Continuous Engagement<br> Plan for practice<br>
                                        Venue: off EM Bypass <br>near Salt Lake, Kolkata<br>
                                        Fee: Rs.2,999
                            </div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption bottom-section" style=" background-color: white">
                        <h4 class="box-text">Learning Outcome</h4>
                        <div class="border-side1"></div>
                        <p class="text-muted box-text" style=" font-size: 16px">Fully ready to<br> answer questions on<br> C & Data Structure<br> asked during all<br> interviews<br><br>
                        First steps to <br>understand and speak<br> in English, especially<br> for Bengali & Hindi<br> medium students</p><br>
                       
                    </div>
                <br>
                
                               <div class="btn-cb">
                                   <div class=" btn-d"><button class="page-scroll btn btn-xl" data-toggle="modal" data-target="#myModal7">GET SYLLABUS</button></div>
                <div class=" btn-d btn-en" ><button class="page-scroll btn btn-xl" onClick="location.href='form1.html'">ENROLL NOW</button></div>
                </div></div>
               
            
        </div>
        <!-- Bullet Navigator -->
        
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora013l" style="top:0px;left:12px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora013r" style="top:0px;right:0px;width:55px;height:55px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>
    <script>
        jssor_11_slider_init();
    </script>
        </div>
        </div>
    </section>
    
   
    <section id="menu5" class="menu5-section bg-light-gray portfolio-background">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-center border-side">
    <span style="background-color: white; background-image: none">Students Speak</span>    </h1>                    
                </div>
            
            <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jssor_31_slider_init = function() {
            
            var jssor_31_options = {
              $AutoPlay: false,
              $AutoPlaySteps: 1,
              $SlideDuration: 2000,
            
              $SlideWidth: 275,
              $SlideHeight: 600,              
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            var jssor_31_slider = new $JssorSlider$("jssor_31", jssor_31_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_31_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_31_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
       .jssorb03 {
            position: absolute;
        }
        
        .jssorb033 div { background-position: -5px -4px; }
        .jssorb033 div:hover, .jssorb033 .av:hover { background-position: -35px -4px; }
        .jssorb033 .av { background-position: -65px -4px; }
        .jssorb033 .dn, .jssorb033 .dn:hover { background-position: -95px -4px; }  

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora033l, .jssora033r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('images/a03.png') no-repeat;
            overflow: hidden;
            top: 220.5px;
            
            
        }
        
        .jssora033l { background-position: -3px -33px; }
        .jssora033r { background-position: -63px -33px; }
        .jssora033l:hover { background-position: -123px -33px; }
        .jssora033r:hover { background-position: -183px -33px; }
        .jssora033l.jssora033ldn { background-position: -243px -33px; }
        .jssora033r.jssora033rdn { background-position: -303px -33px; }
    </style>


    <div id="jssor_31" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 840px; height: 600px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        
        <div data-u="slides" style="cursor: default; position: absolute;top: 50px; left: 10px; width: 1000px; height: 600px;overflow: hidden">
            <div class="col-md-4 col-sm-6 portfolio-item" >
                <div class="std-img" style=" padding-left: 50px">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/student/Aditya_Kumar.png" class="img-responsive img-circle" style=" height: 150px; width: 150px" alt="myimg">                         
                    </a>
                    </div> 
                <div class="portfolio-caption bottom-section" style=" background-color: white">
                        <h4>Aditya Kumar</h4>
                        <p class="text-muted">Stream: ECE</p>
                        <p class="text-std" style=" text-align: justify">The app is very useful for studies. Because of it the topic of discussion gets easier, as we can know in very easy to understand videos. The subtitles help to understand diverse English accents of international professors.</p>
                    </div>
                
                </div>
             <div class="col-md-4 col-sm-6 portfolio-item" >
                    <div class="std-img" style=" padding-left: 50px">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/student/prasid.jpg" class="img-responsive img-circle" style=" height: 150px; width: 150px" alt="myimg">
                    </a>
                        </div>  
                     <div class="portfolio-caption bottom-section" style=" background-color: white">
                        <h4>Prasid Biswas</h4>
                        <p class="text-muted">Stream: ME</p>
                        <p class="text-std" style=" text-align: justify">I have been using the knowledge lab application since the last couple of months. It's really good application having notes, video lectures and even previous years'
                           question papers which gives us an idea about what type of questions may be put before us in any exam. Also, the video lectures are helpful when I am
                        unable to understand something in class.</p>
                    </div>
                
                </div>
              <div class="col-md-4 col-sm-6 portfolio-item" >
                    <div class="std-img" style=" padding-left: 50px">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <img src="images/student/shatarupa_bepari.png" class="img-responsive img-circle" style=" height: 150px;width: 150px" alt="myimg">
                    </a>                       
                        </div>  
                     <div class="portfolio-caption bottom-section" style=" background-color: white">
                        <h4>Shatarupa Bepari</h4>
                        <p class="text-muted">Stream: IT</p>
                        <p class="text-std" style=" text-align: justify">The Knowledge Lab software is helping me a lot in my studies and on this account I would like to thank you and your team for your hard work on this and would certainly like to have some more updates on it.</p>
                    </div>
                
                </div>
            
               
            
        </div>
        <!-- Bullet Navigator -->
        
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora033l " style="top: 0px;left:12px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora033r " style="top: 0px;right:0px;width:55px;height:55px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>
    <script>
        jssor_31_slider_init();
    </script>
        </div>
    </section>    
    
        
    <section id="contact" class="menu7-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 contact_text-center">
            <h2>Contact Us</h2> 
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              <form name="sentMessage" id="contactForm" novalidate action="insertsentMessage.php" method="post" onSubmit="return(validate());">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Your Name *" name="name" required data-validation-required-message="Please enter your name.">
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control" placeholder="Your Email *" name="email" required data-validation-required-message="Please enter your email address.">
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group">
                              <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required data-validation-required-message="Please enter your phone number.">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <textarea class="form-control" placeholder="Leave us a message.We look forward to talk to you. *" name="message" required data-validation-required-message="Please enter a message."></textarea>
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-lg-12 text-center">
                          <div id="success"></div>
                          <button type="submit" class="btn btn-xl" style=" font-size: 18px">SUBMIT</button>
                      </div>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </section>
    <section id="menu9" class="menu9-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 smap text-center">
                    <div class="simg col-md-3">
                     <a href="#page-top"><img class="smimg" src="images/knowledge_png.png" ></a>   
                       
                </div>
                    <div class="smtop col-md-3">
                        <h5 style=" color: white">COMPANY<br></h5><a class="sbm" href="index1.html#submenu6">Mission</a><br><a class="sbm" href="index1.html#submenu4">About us</a><br> <a class="sbm" href="index1.html#submenu8">Work with us</a>
                       
                </div>
                    <div class="smmid col-md-3">
                        <h5 style=" color: white">SUPPORT<br></h5><a class="sbm" href="#">Reach a Teacher</a><br><a class="sbm" href="#contact">Contact us</a><br>
                       
                </div>
                    <div class="smbot col-md-3">
                        <h5 style=" color: white">GET READY<br></h5><a class="sbm" href="#submenu">Learning App</a><br><a class="sbm" href="#menu2">Training Lab</a><br>
                       
                </div>
                </div>
                    
            </div>
            
        </div>
    </section>

    <?php include('includes/footer.php'); ?>
<!--     <a href="#" class="scrollup"><i class="fa fa-chevron-circle-up icon_for_scroll_up"></i></a>
    <div id="fb-root"></div>

    <div class="footerbar" style="">
      <div class="container clearfix">
        <div class="row">
          <div class="call-us">
            <span class="dis-blk" style=" font-size: 14px">
              Call us on &nbsp; <i class="fa fa-phone"></i>            
            </span>
            <span id="contact-ind" style=" font-size: 14px" data-val="+91-88808-62004">
              &nbsp;&nbsp;+91 7278003722&nbsp;&nbsp;
            </span>
          </div>  
          <div class="fb-like" data-href="https://www.facebook.com/KnowledgeLab-World-865527740189412/" data-layout="standard" data-action="like" data-show-faces="false" data-share="true" style="padding-top: 10px;width: 100px">
          </div>
          <p class="copyright pull-right" style=" color: white;padding-top: 10px;margin-right: 300px; font-size: 12px"> Copyright <i class="fa fa-copyright" aria-hidden="true"></i> Knowledgelab 2016. All rights reserved.</p>
        </div>
      </div>
    </div> -->
    
    <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-content" style="padding:30px;">
            <div class="" id="form-div">
                <span aria-hidden="true" data-dismiss="modal" class="fa fa-times-circle closepopup" style="cursor: pointer; color: white; font-size: 25px; background-color: transparent; position: absolute; left: 98%; top: -12px; z-index: 111111;">
                </span>
                <p style="padding:0px 15px;font-size:18px;color:#000;" align="center">
                   Please fill in your details
                </p>
                <form action="amad_insert.php" method="POST" accept-charset="UTF-8" name="get_syllabus_form_popup1" id="get_syllabus_form_popup1" role="form"><input name="_token" type="hidden" value="QFqQwW8IdHEz10e702bdM36r9ThcOV4yyiKWlhwt">                <label id="webinarFormFields">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" placeholder="Your Name *" name="name_amad" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="name" class="error"></label>
                <label id="webinarFormFields">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Your Email *" name="email_amad" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="email" class="error"></label>
                <label id="webinarFormFields">
                    <div class="input-group" style="border: 1px solid #c0c0c0">
                                                <span class="input-group-addon" id="basic-addon1" style="background:#fff;padding:0px;border:none">

                            

                        </span>
<input type="tel" class="form-control" placeholder="Your Phone *" name="phone_amad" required data-validation-required-message="Please enter your 10 digit phone number.">
                                    <p class="help-block text-danger"></p>
                                            </div>
                </label>
                <label for="phone" class="error"></label>
                <input type="hidden" class="country_code" name="country_code" value="in">
                <input name="course" type="hidden" value="big-data-development">                <div class="submitBox" align="center">
                    <input type="submit" value="Get Syllabus" class="btn btn-lg get-syllabus-popup" style="font-size:23px;border-radius:0;width:100%;color:fff;background:#0099CC;">
                </div>
                </form>            </div>
        </div>
        
      </div>
    </div>
  </div>
        <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-content" style="padding:30px;">
            <div class="" id="form-div">
                <span aria-hidden="true" data-dismiss="modal" class="fa fa-times-circle closepopup" style="cursor: pointer; color: white; font-size: 25px; background-color: transparent; position: absolute; left: 98%; top: -12px; z-index: 111111;">
                </span>
                <p style="padding:0px 15px;font-size:18px;color:#000;" align="center">
                   Please fill in your details
                </p>
                <form action="bdh_insert.php" method="POST" accept-charset="UTF-8" name="get_syllabus_form_popup2" id="get_syllabus_form_popup2" role="form"><input name="_token" type="hidden" value="QFqQwW8IdHEz10e702bdM36r9ThcOV4yyiKWlhwt">                <label id="webinarFormFields">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" placeholder="Your Name *" name="name_bdh" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="name" class="error"></label>
                <label id="webinarFormFields">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Your Email *" name="email_bdh" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="email" class="error"></label>
                <label id="webinarFormFields">
                    <div class="input-group" style="border: 1px solid #c0c0c0">
                                                <span class="input-group-addon" id="basic-addon1" style="background:#fff;padding:0px;border:none">

                            

                        </span>
<input type="tel" class="form-control" placeholder="Your Phone *" name="phone_bdh" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                            </div>
                </label>
                <label for="phone" class="error"></label>
                <input type="hidden" class="country_code" name="country_code" value="in">
                <input name="course" type="hidden" value="big-data-development">                <div class="submitBox" align="center">
                    <input type="submit" value="Get Syllabus" class="btn btn-lg get-syllabus-popup" style="font-size:23px;border-radius:0;width:100%;color:fff;background:#0099CC;">
                </div>
                </form>            </div>
        </div>
        
      </div>
    </div>
  </div>
    
        <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-content" style="padding:30px;">
            <div class="" id="form-div">
                <span aria-hidden="true" data-dismiss="modal" class="fa fa-times-circle closepopup" style="cursor: pointer; color: white; font-size: 25px; background-color: transparent; position: absolute; left: 98%; top: -12px; z-index: 111111;">
                </span>
                <p style="padding:0px 15px;font-size:18px;color:#000;" align="center">
                   Please fill in your details
                </p>
                <form action="wdwpm_insert.php" method="POST" accept-charset="UTF-8" name="get_syllabus_form_popup3" id="get_syllabus_form_popup3" role="form"><input name="_token" type="hidden" value="QFqQwW8IdHEz10e702bdM36r9ThcOV4yyiKWlhwt">                <label id="webinarFormFields">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" placeholder="Your Name *" name="name_wdwpm" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="name" class="error"></label>
                <label id="webinarFormFields">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Your Email *" name="email_wdwpm" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="email" class="error"></label>
                <label id="webinarFormFields">
                    <div class="input-group" style="border: 1px solid #c0c0c0">
                                                <span class="input-group-addon" id="basic-addon1" style="background:#fff;padding:0px;border:none">

                            

                        </span>
<input type="tel" class="form-control" placeholder="Your Phone *" name="phone_wdwpm" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                            </div>
                </label>
                <label for="phone" class="error"></label>
                <input type="hidden" class="country_code" name="country_code" value="in">
                <input name="course" type="hidden" value="big-data-development">                <div class="submitBox" align="center">
                    <input type="submit" value="Get Syllabus" class="btn btn-lg get-syllabus-popup" style="font-size:23px;border-radius:0;width:100%;color:fff;background:#0099CC;">
                </div>
                </form>            </div>
        </div>
        
      </div>
    </div>
  </div>
    
        <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-content" style="padding:30px;">
            <div class="" id="form-div">
                <span aria-hidden="true" data-dismiss="modal" class="fa fa-times-circle closepopup" style="cursor: pointer; color: white; font-size: 25px; background-color: transparent; position: absolute; left: 98%; top: -12px; z-index: 111111;">
                </span>
                <p style="padding:0px 15px;font-size:18px;color:#000;" align="center">
                   Please fill in your details
                </p>
                <form action="eswam_insert.php" method="POST" accept-charset="UTF-8" name="get_syllabus_form_popup4" id="get_syllabus_form_popup4" role="form"><input name="_token" type="hidden" value="QFqQwW8IdHEz10e702bdM36r9ThcOV4yyiKWlhwt">                <label id="webinarFormFields">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" placeholder="Your Name *" name="name_eswam" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="name" class="error"></label>
                <label id="webinarFormFields">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Your Email *" name="email_eswam" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="email" class="error"></label>
                <label id="webinarFormFields">
                    <div class="input-group" style="border: 1px solid #c0c0c0">
                                                <span class="input-group-addon" id="basic-addon1" style="background:#fff;padding:0px;border:none">

                            

                        </span>
<input type="tel" class="form-control" placeholder="Your Phone *" name="phone_eswam" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                            </div>
                </label>
                <label for="phone" class="error"></label>
                <input type="hidden" class="country_code" name="country_code" value="in">
                <input name="course" type="hidden" value="big-data-development">                <div class="submitBox" align="center">
                    <input type="submit" value="Get Syllabus" class="btn btn-lg get-syllabus-popup" style="font-size:23px;border-radius:0;width:100%;color:fff;background:#0099CC;">
                </div>
                </form>            </div>
        </div>
        
      </div>
    </div>
  </div>
    
        <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-content" style="padding:30px;">
            <div class="" id="form-div">
                <span aria-hidden="true" data-dismiss="modal" class="fa fa-times-circle closepopup" style="cursor: pointer; color: white; font-size: 25px; background-color: transparent; position: absolute; left: 98%; top: -12px; z-index: 111111;">
                </span>
                <p style="padding:0px 15px;font-size:18px;color:#000;" align="center">
                   Please fill in your details
                </p>
                <form action="cae_insert.php" method="POST" accept-charset="UTF-8" name="get_syllabus_form_popup5" id="get_syllabus_form_popup5" role="form"><input name="_token" type="hidden" value="QFqQwW8IdHEz10e702bdM36r9ThcOV4yyiKWlhwt">                <label id="webinarFormFields">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" placeholder="Your Name *" name="name_cae" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="name" class="error"></label>
                <label id="webinarFormFields">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Your Email *" name="email_cae" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="email" class="error"></label>
                <label id="webinarFormFields">
                    <div class="input-group" style="border: 1px solid #c0c0c0">
                                                <span class="input-group-addon" id="basic-addon1" style="background:#fff;padding:0px;border:none">

                            

                        </span>
<input type="tel" class="form-control" placeholder="Your Phone *" name="phone_cae" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                            </div>
                </label>
                <label for="phone" class="error"></label>
                <input type="hidden" class="country_code" name="country_code" value="in">
                <input name="course" type="hidden" value="big-data-development">                <div class="submitBox" align="center">
                    <input type="submit" value="Get Syllabus" class="btn btn-lg get-syllabus-popup" style="font-size:23px;border-radius:0;width:100%;color:fff;background:#0099CC;">
                </div>
                </form>            </div>
        </div>
        
      </div>
    </div>
  </div>
    
        <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-content" style="padding:30px;">
            <div class="" id="form-div">
                <span aria-hidden="true" data-dismiss="modal" class="fa fa-times-circle closepopup" style="cursor: pointer; color: white; font-size: 25px; background-color: transparent; position: absolute; left: 98%; top: -12px; z-index: 111111;">
                </span>
                <p style="padding:0px 15px;font-size:18px;color:#000;" align="center">
                   Please fill in your details
                </p>
                <form action="bim_insert.php" method="POST" accept-charset="UTF-8" name="get_syllabus_form_popup6" id="get_syllabus_form_popup6" role="form"><input name="_token" type="hidden" value="QFqQwW8IdHEz10e702bdM36r9ThcOV4yyiKWlhwt">                <label id="webinarFormFields">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" placeholder="Your Name *" name="name_bim" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="name" class="error"></label>
                <label id="webinarFormFields">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Your Email *" name="email_bim" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="email" class="error"></label>
                <label id="webinarFormFields">
                    <div class="input-group" style="border: 1px solid #c0c0c0">
                                                <span class="input-group-addon" id="basic-addon1" style="background:#fff;padding:0px;border:none">

                            

                        </span>
<input type="tel" class="form-control" placeholder="Your Phone *" name="phone_bim" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                            </div>
                </label>
                <label for="phone" class="error"></label>
                <input type="hidden" class="country_code" name="country_code" value="in">
                <input name="course" type="hidden" value="big-data-development">                <div class="submitBox" align="center">
                    <input type="submit" value="Get Syllabus" class="btn btn-lg get-syllabus-popup" style="font-size:23px;border-radius:0;width:100%;color:fff;background:#0099CC;">
                </div>
                </form>            </div>
        </div>
        
      </div>
    </div>
  </div>
    
   <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-content" style="padding:30px;">
            <div class="" id="form-div">
                <span aria-hidden="true" data-dismiss="modal" class="fa fa-times-circle closepopup" style="cursor: pointer; color: white; font-size: 25px; background-color: transparent; position: absolute; left: 98%; top: -12px; z-index: 111111;">
                </span>
                <p style="padding:0px 15px;font-size:18px;color:#000;" align="center">
                   Please fill in your details
                </p>
                <form action="ce_insert.php" method="POST" accept-charset="UTF-8" name="get_syllabus_form_popup7" id="get_syllabus_form_popup7" role="form"><input name="_token" type="hidden" value="QFqQwW8IdHEz10e702bdM36r9ThcOV4yyiKWlhwt">                <label id="webinarFormFields">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" placeholder="Your Name *" name="name_ce" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="name" class="error"></label>
                <label id="webinarFormFields">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Your Email *" name="email_ce" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                </label>
                <label for="email" class="error"></label>
                <label id="webinarFormFields">
                    <div class="input-group" style="border: 1px solid #c0c0c0">
                                                <span class="input-group-addon" id="basic-addon1" style="background:#fff;padding:0px;border:none">

                            

                        </span>
<input type="tel" class="form-control" placeholder="Your Phone *" name="phone_ce" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                            </div>
                </label>
                <label for="phone" class="error"></label>
                <input type="hidden" class="country_code" name="country_code" value="in">
                <input name="course" type="hidden" value="big-data-development">                <div class="submitBox" align="center">
                    <input type="submit" value="Get Syllabus" class="btn btn-lg get-syllabus-popup" style="font-size:23px;border-radius:0;width:100%;color:fff;background:#0099CC;">
                </div>
                </form>            </div>
        </div>
        
      </div>
    </div>
  </div>
  <script src="js/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="js/jssor.slider.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.fa-bars')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    };
   /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
    $(".mybtn").click(function(e) {
      e.preventDefault();
      $("#myDropdown").toggle();
    });
  </script>
  <script src="js/jquery.easing.min.js"></script>    
  <script src="js/animated_menu_and_scrollpy.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-75761760-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
