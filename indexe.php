<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM tbluser WHERE id = :id');
    $records->bindParam(':id', $_SESSION['id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>

<head>

	<title>Work - Force | Página de Inicio</title>


	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="shortcut icon" href="images/12.png" type="image/x-icon">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap">


	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

	<link rel='stylesheet' type='text/css'
		href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>


	<link rel="stylesheet" type="text/css" href="assets/revolution_slider/css/revslider.css" media="screen" />
	<style>
		// font stuff
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900);


// colour stuff
@white: #ffffff;
@lightBG: #dce1df;
@salmon: #ff6666;

@teal: #0096a0;
@tealMid: #0ebac7;
@tealContrast: #33ffff;
@tealShade:	#007c85;

@darkGrey: #4f585e;

body {
  background: @lightBG;
  color: @darkGrey;
  font-family: 'Source Sans Pro', sans-serif;
  text-rendering: optimizeLegibility;
}

a.btn {
  background: @teal;
  border-radius: 4px;
	box-shadow: 0 2px 0px 0 rgba(0,0,0,0.25);
  color: @white;
  display: inline-block;
  padding: 6px 30px 8px;
  position: relative;
  text-decoration: none;
	transition: all 0.1s 0s ease-out;
}

.no-touch a.btn:hover {
  background: lighten(@teal,2.5);
  box-shadow: 0px 8px 2px 0 rgba(0, 0, 0, 0.075);
  transform: translateY(-2px);
  transition: all 0.25s 0s ease-out;
}

.no-touch a.btn:active,
a.btn:active {
  background: darken(@teal,2.5);
  box-shadow: 0 1px 0px 0 rgba(255,255,255,0.25);
  transform: translate3d(0,1px,0);
  transition: all 0.025s 0s ease-out;
}

div.cards {
  margin: 80px auto;
  max-width: 960px;
  text-align: center;
}

div.card {
  background: @white;
  display: inline-block;
  margin: 8px;
  max-width: 300px;
  perspective: 1000;
  position: relative;
  text-align: left;
  transition: all 0.3s 0s ease-in;
  width: 300px;
  z-index: 1;

  img {
    max-width: 300px;
  }
  
  .card__image-holder {
    background: rgba(0,0,0,0.1);
    height: 0;
    padding-bottom: 75%;
  }

  div.card-title {
    background: @white;
    padding: 6px 15px 10px;
    position: relative;
    z-index: 0;
    
    a.toggle-info {
      border-radius: 32px;
      height: 32px;
      padding: 0;
      position: absolute;
      right: 15px;
      top: 10px;
      width: 32px;
      
      span {
        background: @white;
        display: block;
        height: 2px;
        position: absolute;
        top: 16px;
        transition: all 0.15s 0s ease-out;
        width: 12px;
      }
      
      span.left {
        right: 14px;
        transform: rotate(45deg);
      }
      span.right {
        left: 14px;
        transform: rotate(-45deg);
      }
    }
    
    h2 {
      font-size: 24px;
      font-weight: 700;
      letter-spacing: -0.05em;
      margin: 0;
      padding: 0;
      
      small {
        display: block;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: -0.025em;
      }
    }
  }

  div.card-description {
    padding: 0 15px 10px;
    position: relative;
    font-size: 14px;
  }

  div.card-actions {
  	box-shadow: 0 2px 0px 0 rgba(0,0,0,0.075);
    padding: 10px 15px 20px;
    text-align: center;
  }
  
  div.card-flap {
    background: darken(@white,15);
    position: absolute;
    width: 100%;
    transform-origin: top;
    transform: rotateX(-90deg);
  }
  div.flap1 {
    transition: all 0.3s 0.3s ease-out;
    z-index: -1;
  }
  div.flap2 {
    transition: all 0.3s 0s ease-out;
    z-index: -2;
  }
  
}

div.cards.showing {
  div.card {
    cursor: pointer;
    opacity: 0.6;
    transform: scale(0.88);
  }
}

.no-touch  div.cards.showing {
  div.card:hover {
    opacity: 0.94;
    transform: scale(0.92);
  }
}

div.card.show {
  opacity: 1 !important;
  transform: scale(1) !important;

  div.card-title {
    a.toggle-info {
      background: @salmon !important;
      span {
        top: 15px;
      }
      span.left {
        right: 10px;
      }
      span.right {
        left: 10px;
      }
    }
  }
  div.card-flap {
    background: @white;
    transform: rotateX(0deg);
  }
  div.flap1 {
    transition: all 0.3s 0s ease-out;
  }
  div.flap2 {
    transition: all 0.3s 0.2s ease-out;
  }
}

	</style>

</head>

<body>
		<?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['email']; ?>
	  <?php else: ?>
	<div class="preloader"><span class="preloader-gif"></span></div>
	<div class="theme-wrap clearfix">
		<div class="wsmenucontent overlapblackbg"></div>
		<div class="wsmenuexpandermain slideRight">
			<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
			<a href="#" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>
		</div>
		<?php include_once('includes/headr.php'); ?>

		<section id="slider-revolution">
			<div class="fullwidthbanner-container">
				<div class="revolution-slider tx-center">
					<ul><!-- SLIDE  -->

						<!-- Slide1 -->
						<li data-transition="slideright" data-slotamount="5" data-masterspeed="1000">
							<!-- MAIN IMAGE -->
							<img src="images/12.png" alt="item slide">
							<!-- LAYERS -->





						</li>



					</ul>
				</div>
			</div>
		</section>
		<section>
		<div class="cards">

<div class="card">
  <div class="card__image-holder">
	<img class="card__image" src="images/calidad.png" width="300" height="300" alt="wave" />
  </div>
  <div class="card-title">
	<a href="#" class="toggle-info btn">
	  <span class="left"></span>
	  <span class="right"></span>
	</a>
	<h2>
		Calidad segura
	</h2>
  </div>
  <div class="card-flap flap1">
	<div class="card-description">
	  This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
	</div>
	<div class="card-flap flap2">
	  <div class="card-actions">
		<a href="#" class="btn">Read more</a>
	  </div>
	</div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
	<img class="card__image" src="images/trato.png" alt="beach" width="300" height="300" />
  </div>
  <div class="card-title">
	<a href="#" class="toggle-info btn">
	  <span class="left"></span>
	  <span class="right"></span>
	</a>
	<h2>
		Excelente trato
	</h2>
  </div>
  <div class="card-flap flap1">
	<div class="card-description">
     Como usuario, nosotros te ofrecemos un trato de calidad para que te sientas comodo dentro de la plataforma y a la hora de buscar algún servicio con nosotros.
	</div>
	<div class="card-flap flap2">
	  <div class="card-actions">
		<a href="#" class="btn">Read more</a>
	  </div>
	</div>
  </div>
</div>

<div class="card">
  <div class="card__image-holder">
	<img class="card__image" src="https://source.unsplash.com/300x225/?mountain" alt="mountain" />
  </div>
  <div class="card-title">
	<a href="#" class="toggle-info btn">
	  <span class="left"></span>
	  <span class="right"></span>
	</a>
	<h2>
		Un mejor servicio
	</h2>
  </div>
  <div class="card-flap flap1">
	<div class="card-description">
	  This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
	</div>
	<div class="card-flap flap2">
	  <div class="card-actions">
		<a href="#" class="btn">Read more</a>
	  </div>
	</div>
  </div>
</div>

		</section>
		<section class="categories-section padding-top-20 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>Categorías de trabajos</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<div class="row category-section-wrap cat-style-2">
					<div class="col-md-12 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">

							<h5><i class="fa fa-heart bgblue-1 white"></i>Categorías de Trabajo Local </h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									<?php
									$sql = "SELECT Category, count(ID) as total from tblperson group by Category";
									$query = $dbh->prepare($sql);
									$query->execute();
									$results = $query->fetchAll(PDO::FETCH_OBJ);

									$cnt = 1;
									if ($query->rowCount() > 0) {
										foreach ($results as $row) { ?>
											<li><a
													href="view-category-detail.php?viewid=<?php echo htmlentities($row->Category); ?>"><?php echo htmlentities($row->Category); ?> <span>(
														<?php echo htmlentities($row->total); ?>)
													</span></a></li>
											<?php $cnt = $cnt + 1;
										}
									} ?>

								</ul>
							</div>
						</div>

						<div class="listing-border-bottom bgblue-1"></div>
					</div><!-- category column end -->
				</div>
			</div><!-- section container end -->
		</section>

		<?php include_once('includes/footer.php'); ?>
	</div>

	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.js"></script><!-- jquery 1.11.2 -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/modernizr.custom.js"></script>


	<script src="bootstrap/js/bootstrap.min.js"></script>


	<script type="text/javascript" src="js/menu.js"></script>

	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider-tool.js"></script>
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider.js"></script>


	<script src="js/owl.carousel.js"></script>
	<script src="js/triger.js" type="text/javascript"></script>


	<script src="js/jquery.countTo.js"></script>


	<script src="js/jquery.cycle2.min.js" type="text/javascript"></script>


	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->


	<script src="js/jquery.raty-fa.js"></script>
	<script src="js/rate.js"></script>
	<script src="work-force\java.js"></script>

	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">

			<div class="rg-image-wrapper">
				<div class="rg-image"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
						<h5></h5>
						<div class="caption-metas">
							<p class="position"></p>
							<p class="orgnization"></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</script>
	<script type="text/javascript" src="assets/testimonial/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/gallery.js"></script>

	<script type="text/javascript" src="js/custom.js"></script>
    <?php endif; ?>

</body>

</html>