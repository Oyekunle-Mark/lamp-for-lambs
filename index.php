<?php
    include 'default_header.php';
?>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

 
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/p4.jpg" width="100%" alt="Chania">
<!--
              <div class="carousel-caption">
                <h3>Aircraft</h3>
              </div>
-->
            </div>

            <div class="item">
              <img src="img/p3.jpg" width="100%" alt="Chania">
<!--
              <div class="carousel-caption">
                <h3>Bulgaria</h3>
              </div>
-->
            </div>

            <div class="item">
              <img src="img/p1.jpg" width="100%" alt="Flower">
<!--
              <div class="carousel-caption">
                <h3>Compass</h3>
              </div>
-->
            </div>

            <div class="item">
              <img src="img/p2.jpg" width="100%" alt="Flower">
<!--
              <div class="carousel-caption">
                <h3>Eiffel Tower</h3>
              </div>
-->
            </div>
          </div>

       
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        
        
        <section id="myBackground">
            <div class="container">
                <div class="row">
                    <div class="wrapLine">
                        <div class="col-xs col-sm col-md">
                            <div class="jumbotron text-center" id="message">
                                <h1>Welcome to LawSpace <br /><small>Connecting Lawyers and Clients</small></h1>
                                <h2>About Us</h2><br />
                                <p>LawSpace is a platform designed to connect prospective clients to preferred lawyers. The platform makes the connection faster and easier, creating an avenue for practicing lawyers to expand their practice and also ensuring the utmost satisfaction of our clients/users.</p>
                            </div>
                            <form action="newsletter.php" method="post" class="form-inline" id="newsLetter">
                                <h5><strong>Sign up for our newsletter</strong></h5>
                                <input type="email" class="form-control" placeholder="Enter email here" name="email">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    include 'footer.php';
?>