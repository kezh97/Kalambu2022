<?php
	include('php/language.php');
	$en_selected = "";
	$es_selected = "";
	$language = "";
	if((isset($_GET['language']) &&  $_GET['language'] == 'es') || !isset($_GET['language'])){
		$es_selected = 'selected';
		$language = 'es';
	} else {
		$en_selected = 'selected';
		$language = 'en';
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Kalambú Hot Springs | Diversión y relajación en un mismo lugar, ubicado a tan sólo 5 minutos del parque de La Fortuna en San Carlos. Contamos con múltiples atracciones acuáticas para que pases un momento de diversión en familia. ">
	<link rel="icon" type="image/x-icon" href="img/logo.png">
	<title>Kalambú Hot Springs Costa Rica</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="icon/icon-style.css">
	<script src="https://kit.fontawesome.com/5770ce2232.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/ekko-lightbox.css">
</head>
<body>
	<span class="up icon-arrow-up2"></span>
	<!-- NAV -->
	<div class="nav-wrapper" id="home">
		<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#home">
					<img src="img/logo.png" alt="Logo Kalambu">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto" id="navItemMenu">
						<hr>
						<li class="nav-item active"><a href="#home" class="nav-link"><?php echo $nav_options[$language][0]?></a></li>
						<hr>
						<li class="nav-item"><a href="#attraction" class="nav-link"><?php echo $nav_options[$language][1]?></a></li>
						<hr>
						<li class="nav-item"><a href="#prices" class="nav-link"><?php echo $nav_options[$language][2]?></a></li>
						<hr>
						<li class="nav-item"><a href="#gallery" class="nav-link"><?php echo $nav_options[$language][3]?></a></li>
						<hr>
						<li class="nav-item"><a href="#contact" class="nav-link"><?php echo $nav_options[$language][4]?></a></li>
						<hr>
						<form action="" class="form-inline">
							<select onchange="setLanguage()" name="language" id="lang" class="custom-select my-1 mr-sm-2">
								<option value="es" <?php echo $es_selected?> >ES</option>
								<option value="en" <?php echo $en_selected?> >EN</option>
							</select>
						</form>

						<!--<li class="nav-item"><a onclick="setLanguage()" value="es" id="lang" class="nav-link">ES</a></li>
						<hr>
						<li class="nav-item"><a onclick="setLanguage()" value="en" id="lang" class="nav-link">EN</a></li>
						<hr>
					-->
					</ul>
				</div>	
			</div>
		</nav>
	</div>

<!-- SLIDER -->
	<div class="slider-wrapper" >
		<div id="slides" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#slides" data-slide-to="0" class="active"></li>
				<li data-target="#slides" data-slide-to="1"></li>
				<li data-target="#slides" data-slide-to="2"></li>
				<li data-target="#slides" data-slide-to="3"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/img_1.jpg" alt="Entrada Kalambu">
					<div class="carousel-caption">
						<h1 class="display-2">Kalambu Hot Springs Water Park</h1>
						<h3>La Fortuna, Costa Rica</h3>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/img_2.jpg" alt="Cascada Kalambu 1">
				</div>
				<div class="carousel-item">
					<img src="img/img_3.jpg" alt="Fuente Kalambu 1">
				</div>
				<div class="carousel-item">
					<img src="img/img_4.jpg" alt="Cascada Kalambu 2">
				</div>
			</div>
			<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#slides" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
   				 <span class="sr-only">Next</span>
  			</a>
		</div>
	</div>

<!-- JUMBOTRON -->
	<div class="jumbotron-wrapper">
		<div class="container-fluid">
			<div class="row jumbotron">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">	
				</div>
			</div>
		</div>
	</div>

<!-- WELCOME -->
	<div class="bienvenida-wrapper" id="attraction">
		<div class="container-fluid padding">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1 class="display-4"><?php echo $welcome_caps[$language][0]?></h1>
					<hr>
					<div class="col-12">
						<p class="lead"><?php echo $welcome_caps[$language][1]?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ATRRACTIONS -->
		<div class="atracciones-wrapper">
			<div class="container-fluid padding">
				<div class="row welcome text-center">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<img src="img/img_7_crop.jpg" class="rounded-circle" width="80%" alt="Mamut">
						<hr>
						<h3><?php echo $attractions_caps[$language][0]?></h3>
						<p><?php echo $attractions_caps[$language][1]?></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<img src="img/img_5_crop.jpg" class="rounded-circle" width="80%" alt="Triple Slide">
						<hr>
						<h3><?php echo $attractions_caps[$language][2]?></h3>
						<p><?php echo $attractions_caps[$language][3]?></p>
					</div>
					<div class="co3-xs-12 col-sm-6 col-md-4">
						<img src="img/img_6_crop.jpg" class="rounded-circle" width="80%" alt="Play Area">
						<hr>
						<h3><?php echo $attractions_caps[$language][4]?></h3>
						<p><?php echo $attractions_caps[$language][5]?></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<img src="img/img_2_crop.jpg" class="rounded-circle" width="80%" alt="Thermal Pool">
						<hr>
						<h3><?php echo $attractions_caps[$language][6]?></h3>
						<p><?php echo $attractions_caps[$language][7]?></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<img src="img/img_8_crop.jpg" class="rounded-circle" width="80%" alt="Restaurant">
						<hr>
						<h3><?php echo $attractions_caps[$language][8]?></h3>
						<p><?php echo $attractions_caps[$language][9]?></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<img src="img/img_15_crop.jpg" class="rounded-circle" width="80%" alt="Swim-up Bar">
						<hr>
						<h3><?php echo $attractions_caps[$language][10]?></h3>
						<p><?php echo $attractions_caps[$language][11]?></p>
					</div>
				</div>
				<hr class="my-4">
			</div>
		</div>

<!-- PARALLAX -->
	<div class="parallax-wrapper">
		<div class="container-fluid">
		    <hr>
			<div class="row parallax text-center"></div>
			<hr>
		</div>
	</div>

<!-- SCHEULES AND RATES -->
	<div class="price-title-wrapper" id="prices">
		<div class="container-fluid padding">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1><?php echo $sche_pri_caps[$language][0]?></h1>
					<hr>
					<div class="col-12">
						<p class="lead"><?php echo $sche_pri_caps[$language][1]?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row welcome text-center">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3><?php echo $schedules_caps[$language][0]?></h3>
					<hr>
					<div class="row">
						<div class="col-6">
							<p><?php echo $schedules_caps[$language][1]?></p>
						</div>
						<div class="col-6">
							<p>9:00am - 8:00pm</p>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<p><?php echo $schedules_caps[$language][2]?></p>
						</div>
						<div class="col-6">
							<p>9:00am - 9:00pm</p>
						</div>
					</div>
				</div>
			</div>
			<hr>
		</div>

		<div class="container-fluid">
			<div class="row welcome text-center">
				<div class="col-xs-12 col-xs-6 col-md-6">
					<h3><?php echo $prices_caps[$language][0]?></h3>
					<hr>
					<div class="row">
						<div class="col-6">
							<h4>₡5000</h4>
							<p><?php echo $prices_caps[$language][1]?></p>
						</div>
						<div class="col-6">
							<h4>₡4500</h4>
							<p><?php echo $prices_caps[$language][2]?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-xs-6 col-md-6">
					<h3><?php echo $prices_caps[$language][3]?></h3>
					<hr>
					<div class="row">
						<div class="col-12">
							<h4>₡10000</h4>
							<p><?php echo $prices_caps[$language][4]?></p>
						</div>
					</div>

				</div>
			</div>
		</div>
		<hr class="my-4">

		<div class="container-fluid padding">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1><?php echo $group_packages_caps[$language][0]?></h1>
					<hr>
					<p class="lead"><?php echo $group_packages_caps[$language][1]?></p>
					<p class="lead"><?php echo $group_packages_caps[$language][2]?></p>
					<div class="row welcome padding">
						<div class="col-xs-12 col-md-12 col-lg-4">
							<h3>PACK 1: ₡7000</h3>
							<hr>
							<p><?php echo $group_packages_caps[$language][3]?></p>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-4">
							<h3>PACK 2: ₡10000</h3>
							<hr>
							<p><?php echo $group_packages_caps[$language][4]?></p>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-4">
							<h3>PACK 3: ₡15000</h3>
							<hr>
							<p><?php echo $group_packages_caps[$language][5]?></p>
						</div>
					</div>
				</div>
			</div>
			<hr class="my-4">
		</div>
	</div>

	<!-- TIPS & RECOMMENDATIONS -->
	<div class="about_us-wrapper" id="nosotros">
		<div class="container-fluid">
			<div class="row padding">
				<div class="col-sm-12 col-lg-6">
					<h2><?php echo $rules_caps[$language][0]?></h2>
					<ul class="text-justify">
						<li><?php echo $rules_caps[$language][1]?></li>
						<li><?php echo $rules_caps[$language][2]?></li>
						<li><?php echo $rules_caps[$language][3]?></li>
						<li><?php echo $rules_caps[$language][4]?></li>
						<li><?php echo $rules_caps[$language][5]?></li>
						<li><?php echo $rules_caps[$language][6]?></li>
					</ul>
				</div>
				<div class="col-sm-12 col-lg-6 text-center">
					<img src="img/img_5.jpg" alt="" class="img-fluid" alt="Triple Slide">
				</div>
			</div>
			<hr class="my-4">
		</div>
	</div>
		
<!-- GALLERY -->
	<div class="gallery-wrapper container-fluid" id="gallery">
		<div class="container-fluid">
			<div class="row welcome text-center">
				<div class="col-12">
					<h2 class="display-4"><?php echo $gallery_caps[$language][0]?></h2>
					<hr>
				</div>
				<div class="col-12">
					<p class="lead"><?php echo $gallery_caps[$language][1]?></p>
				</div>
			</div>			
		</div>
		
		<div class="row justify-content-center">
			<div class="col-md-10">
				<!--4 -->
		        <div class="row">
		            <a href="img/img_1.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-3">
		                <img src="img/img_1.jpg" class="img-fluid" alt="Entrada Kalambu">
		            </a>
		            <a href="img/img_2.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-3">
		                <img src="img/img_2.jpg" class="img-fluid" alt="Cascada Kalambu">
		            </a>
		            <a href="img/img_3.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-3">
		                <img src="img/img_3.jpg" class="img-fluid" alt="Fuente Kalambu">
		            </a>
		            <a href="img/img_4.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-3">
		                <img src="img/img_4.jpg" class="img-fluid" alt="Cascada Kalambu">
		            </a>
		        </div>
		        <!-- 2 -->
		        <div class="row">
		        	<a href="img/img_8.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-6">
		                <img src="img/img_8.jpg" class="img-fluid" alt="Restaurante Kalambu 1">
		            </a>
		            <a href="img/img_9.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-6">
		                <img src="img/img_9.jpg" class="img-fluid" alt="Restaurante Kalambu 2">
		            </a>
		        </div>

				<!-- 3 -->
	        	<div class="row">
		            <a href="img/img_12.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-4">
		                <img src="img/img_12.jpg" class="img-fluid" alt="Zona de Juegos Kalambu 1">
		            </a>
		            <a href="img/img_14.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-4">
		                <img src="img/img_14.jpg" class="img-fluid" alt="Lockers Kalambu">
		            </a>
		            <a href="img/img_13.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-4">
		                <img src="img/img_13.jpg" class="img-fluid" alt="Zona de Juegos Kalambu 2">
		            </a>
	        	</div>
				<!-- 4 -->
	        	<div class="row">
		            <a href="img/img_7.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-3">
		                <img src="img/img_7.jpg" class="img-fluid" alt="Mamut Kalambu">
		            </a>
		            <a href="img/img_6.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-3">
		                <img src="img/img_6.jpg" class="img-fluid" alt="Zona de Juegos Kalambu 3">
		            </a>
		            <a href="img/img_5.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-3">
		                <img src="img/img_5.jpg" class="img-fluid" alt="Triple Tobogan Kalambu">
		            </a>
		            <a href="img/img_10.jpg" data-toggle="lightbox" data-gallery="example-gallery" style="padding: 2px 2px;" class="col-sm-3">
		                <img src="img/img_10.jpg" class="img-fluid" alt="Zona de Juegos Kalambu 4">
		            </a>
	        	</div>
    		</div>	
		</div>
		<hr class="my-4">
	</div>

<!-- CONTACT -->
	<div class="contact-wrapper" id="contact">
		<div class="container-fluid">
			<div class="row padding">
				<div class="welcome text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>D<?php echo $contact_caps[$language][0]?></h1>
					<p class="lead"><?php echo $contact_caps[$language][1]?></p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="map_responsive">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.2144792119075!2d-84.68181818534745!3d10.483751592520521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa00c07dddf1f9d%3A0x4c2f2e048643e629!2sKalambu%20Hot%20Springs!5e0!3m2!1ses-419!2scr!4v1578002024424!5m2!1ses-419!2scr" width="800" height="500" frameborder="0" style="border:1px solid #000;" allowfullscreen=""></iframe>
					</div>
				</div>				
			</div>
		</div>
		<div class="container-fluid padding">
			<div class="row welcome text-center padding">
				<div class="col-12">
					<h1><?php echo $contact_caps[$language][2]?></h1>
					<hr>
				</div>
				<div class="col-12 social padding">
					<a href="https://es-la.facebook.com/kalambuhotsprings/"><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com/kalambufortuna?lang=es"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/kalambuhotsprings/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCmLX-aN1iZwsCrN_K7-Vdjw"><i class="fab fa-youtube"></i></a>
					<a href="https://www.tripadvisor.com.mx/Attraction_Review-g309226-d6734112-Reviews-Kalambu_Hot_Springs-La_Fortuna_de_San_Carlos_Arenal_Volcano_National_Park_Provinc.html"><i class="fab fa-tripadvisor"></i></a>
				</div>
			</div>
		</div>
	</div>

<!-- FOOTERS -->
	<footer>
		<div class="container-fluid">
			<div class="row text-center">
				<div class="col-md-6">
					<hr class="light">
					<img src="img/logo.png" alt="" width="18%" alt="Logo kalambu">
					<hr class="light">
					<p><i class="fa fa-phone-alt"></i> (+506) 2766-5353</p>
					<p><i class="fab fa-whatsapp"></i> (+506) 8454-7777</p>
					<p><i class="fa fa-envelope"></i> info@kalambu.com</p>
					<p><i class="fa fa-map-marker-alt"></i> La Fortuna, Alajuela, Costa Rica</p>

				</div>
				<div class="col-md-6" >
					<hr class="light">
					<p><?php echo $footer_caps[$language][0]?></p>
					<hr class="light">
					<p><?php echo $footer_caps[$language][1]?></p>
					<p><?php echo $footer_caps[$language][2]?></p>
					<p><?php echo $footer_caps[$language][3]?></p>
				</div>
				<div class="col-12">
					<hr class="light">
					<h5>&copy; Kalambú Hot Springs, Costa Rica</h5>
				</div>
			</div>
		</div>
	</footer>

<!-- -->	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
	<script>
		$(document).ready(function(){
  			$('a').on('click', function(event) {
    			if (this.hash !== "") {
      				event.preventDefault();
      				var hash = this.hash;
      				$('html, body').animate({scrollTop: $(hash).offset().top}, 1250, function(){window.location.hash = hash;
      				});
    			} 
  			});

  			$('.up').click(function(){
				$('body, html').animate({
					scrollTop: '0px'
				}, 300);
			})

  			// CACHE SELECTOR
			var lastId,
			    topMenu = $(".navbar-nav"),
			    topMenuHeight = topMenu.outerHeight()+15,
			    // LIST ITEMS
			    menuItems = topMenu.find("a"),
			    // ACTIVE ITEMS
			    scrollItems = menuItems.map(function(){
			      	var item = $($(this).attr("href"));
			      	if (item.length) { return item; }
			    });

			// SMOOTH SCROLL
			menuItems.click(function(e){
			  	var href = $(this).attr("href"), offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
			  	$('html, body').stop().animate({scrollTop: offsetTop}, 1300);
			  	e.preventDefault();
			});

			// Bind to scroll
			$(window).scroll(function(){
			   	// GET CONTENT ON PAGE
			   	var fromTop = $(this).scrollTop()+topMenuHeight;
			   
			   	// GET CONTENT ID
			   	var cur = scrollItems.map(function(){
			     	if ($(this).offset().top < fromTop)
			       	return this;
			   	});

			   	// GET ID OF THE CURRENT ELEMENT
			   	cur = cur[cur.length-1];
			   	var id = cur && cur.length ? cur[0].id : "";
			   
			   	if (lastId !== id) {
			       	lastId = id;
			       	// ADD/REMOVE 'ACTIVE' CLASS
			       	menuItems
			         	.parent().removeClass("active")
			         	.end().filter("[href='#"+id+"']").parent().addClass("active");
			   	}                   
			});

  			$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

            $(window).scroll(function(){
			if($(this).scrollTop()){
				$('.up').slideDown(300);
			} else{
				$('.up').slideUp(300);
			}
			});

			
		});	

		function setLanguage(){
				var lang = jQuery("#lang").val();
				window.location.href = '/?language=' + lang;
			}
	</script>
</body>
</html>
