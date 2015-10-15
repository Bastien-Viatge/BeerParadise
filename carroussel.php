<!DOCTYPE html>


<head>

	<title> Beer Paradise </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>	
    <title>Feature Carousel Demonstration Test</title>
    <link rel="stylesheet" href="css/feature-carousel.css" charset="utf-8" />
    <script src="js/jquery-1.7.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.featureCarousel.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var carousel = $("#carousel").featureCarousel({
          // include options like this:
          // (use quotes only for string values, and no trailing comma after last option)
          // option: value,
          // option: value
        });

        $("#but_prev").click(function () {
          carousel.prev();
        });
        $("#but_pause").click(function () {
          carousel.pause();
        });
        $("#but_start").click(function () {
          carousel.start();
        });
        $("#but_next").click(function () {
          carousel.next();
        });
      });
    </script>






<carroussel>

<a id="but_prev" href="#">PREV</a> | <a id="but_pause" href="#">PAUSE</a> | <a id="but_start" href="#">START</a> | <a id="but_next" href="#">NEXT</a> 

    <div class="carousel-container">
    
      <div id="carousel">
        <div class="carousel-feature">
          <a href="Products.php"><img class="carousel-image" alt="Image Caption" src="images/R1.png"></a>
          <div class="carousel-caption">
            <p>
              Bière du démon
            </p>
          </div>
        </div>
        <div class="carousel-feature">
          <a href="Products.php"><img class="carousel-image" alt="Image Caption" src="images/R2.png"></a>
          <div class="carousel-caption">
            <p>
              Leffee
            </p>
          </div>
        </div>
        <div class="carousel-feature">
          <a href="Products.php"><img class="carousel-image" alt="Image Caption" src="images/R3.png"></a>
          <div class="carousel-caption">
            <p>
             E-ARM
            </p>
          </div>
        </div>
        <div class="carousel-feature">
          <a href="Products.php"><img class="carousel-image" alt="Image Caption" src="images/R4.png"></a>
        
          <div class="carousel-caption">
            <p>
             E-Pet
            </p>
	</div>
	</div>
        <div class="carousel-feature">
          <a href="http://en.wikipedia.org/wiki/Admiral_Ackbar"><img class="carousel-image" alt="Image Caption" src="images/trap.jpg"></a>
          <div class="carousel-caption">
            <p>
              It's a trap !
            </p>
          </div>
        </div>
      </div>
    
      <div id="carousel-left"><img src="images/arrow-left.png" /></div>
      <div id="carousel-right"><img src="images/arrow-right.png" /></div>
    </div>

</carroussel>
