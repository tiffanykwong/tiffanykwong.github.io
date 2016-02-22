<?php 
/* [Tiffany Wong] index.php 
 * Main page
 */ 

require('menu.php');
?>

<!-- Header -->
<header class="text-center" name="home">
    <div class="intro-text">
      <h1 class="wow fadeInDown">Tiffany <strong><span class="color">Wong</span></strong></h1>
      <!-- <p class="wow fadeInDown">software developer // ux designer // product manager</p> -->
      <a href="#works-section" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Portfolio</a> </div>
  </header>


<!-- Services Section -->
<div id="services-section" class="text-center">
  <div class="container">
    <div class="section-title wow fadeInDown">
      <h2><strong>Skills</strong></h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus. Eleifend pellentesque natoque faucibus magna ut etiam.</p>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="200ms"> <i class="fa fa-desktop"></i>
        <h4><strong>Web Development</strong></h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="400ms"> <i class="fa fa-gears"></i>
        <h4><strong>Product Design</strong></h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
      </div>
      <!-- <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="600ms"> <i class="fa fa-bullhorn"></i>
        <h4><strong>UX Design</strong></h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div> -->
      <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="800ms"> <i class="fa fa-rocket"></i>
        <h4><strong>Marketing</strong></h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="works-section" class="text-center">
  <div class="container"> <!-- Container -->
    <div class="section-title wow fadeInDown">
      <h2><strong>Portfolio</strong></h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Web Development</a></li>
            <li><a href="#" data-filter=".app">Product Design</a></li>
            <li><a href="#" data-filter=".branding">Marketing</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="200ms">
            <div class="hover-bg"> <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Project Title</h4>
                Web Design
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/01.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="400ms">
            <div class="hover-bg"> <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Project Title</h4>
                App Development
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/02.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="600ms">
            <div class="hover-bg"> <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Project Title</h4>
               Web Design
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/03.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="800ms">
            <div class="hover-bg"> <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Project Title</h4>
                Web Design
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="1000ms">
            <div class="hover-bg"> <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Project Title</h4>
                App Development
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="1200ms">
            <div class="hover-bg"> <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Project Title</h4>
                Branding
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="1400ms">
            <div class="hover-bg"> <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Project Title</h4>
                App Development, Branding
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/07.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="1600ms">
            <div class="hover-bg"> <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Project Title</h4>
                Web Design
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/08.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center wow fadeInDown">
      <h2><strong>About</strong> me</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div class="row">
      <div class="col-md-6 wow fadeInLeft"> <img src="img/about.png" class="img-responsive"> </div>
      <div class="col-md-6 wow fadeInRight">
          <h4>Who I Am</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante facilisis bibendum.</p>
          <div class="space"></div>
          <h4>What I Do</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
          <div class="space"></div><div class="list-style">
            <div class="row">
              <div class="col-lg-6 col-sm-6 col-xs-12">
                <ul>
                  <li>Lorem ipsum dolor</li>
                  <li>Consectetur adipiscing</li>
                  <li>Duis sed dapibus leo</li>
                  <li>Sed commodo nibh ante</li>
                </ul>
              </div>
              <div class="col-lg-6 col-sm-6 col-xs-12">
                <ul>
                  <li>Lorem ipsum dolor</li>
                  <li>Consectetur adipiscing</li>
                  <li>Duis sed dapibus leo</li>
                  <li>Sed commodo nibh ante</li>
                </ul>
              </div>
            </div>
          </div>     
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title wow fadeInDown">
      <h2><strong>Contact</strong> me</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="200ms">
      <!-- <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p>321 Awesome Street<br>
          New York, NY 17022</p>
      </div> -->
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>tkw32@cornell.edu</p>
      </div>
      <!-- <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p> +1 408 621 3019</p>
      </div> -->
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="400ms">
  <h3>Leave us a message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
      <p>Copyright © Tempo. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
  </div>
</div>

<!-- Portfolio Modals --> 
<!-- Use the modals below to showcase details about your portfolio projects! --> 

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/01-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
            <ul class="list-inline">
              <li><strong>Client</strong>: John Doe</li>
              <li><strong>Category</strong>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/02-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
            <ul class="list-inline">
              <li><strong>Client</strong>: John Doe</li>
              <li><strong>Category</strong>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/03-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
            <ul class="list-inline">
              <li><strong>Client</strong>: John Doe</li>
              <li><strong>Category</strong>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/04-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
            <ul class="list-inline">
              <li><strong>Client</strong>: John Doe</li>
              <li><strong>Category</strong>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/05-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
            <ul class="list-inline">
              <li><strong>Client</strong>: John Doe</li>
              <li><strong>Category</strong>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/06-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
            <ul class="list-inline">
              <li><strong>Client</strong>: John Doe</li>
              <li><strong>Category</strong>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 7 -->
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/07-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
            <ul class="list-inline">
              <li><strong>Client</strong>: John Doe</li>
              <li><strong>Category</strong>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 8 -->
<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body"> 
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/08-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
            <ul class="list-inline">
              <li><strong>Client</strong>: John Doe</li>
              <li><strong>Category</strong>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/wow.min.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>