<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Proyecto</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="Assets/css/swiper.css" rel="stylesheet">
	<link href="Assets/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="Assets/images/favicon.png">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="/images/logo.svg" alt="alternative"></a>  -->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact
                        ">contacto</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Idioma
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Español</a>
                            <a class="dropdown-item" href="#">Catalán</a>
                            <a class="dropdown-item" href="#">Ingles</a>
                        </div>
                    </div>
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm" href="#contact">Login</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

      
    <!-- Header -->
    <header id="header" class="header">
          <!-- Details 1 -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-5">
                  
                        <img class="img-fluid m-3" src="Assets/images/portada.png" alt="alternative">
                    </div> <!-- end of image-container -->
               
                <div class="col-lg-8 col-xl-7">
                    <div class="text-container">
                        
                        <h3>Compra - Venta de Participaciones</h3>
                        <h4>Empresas y Sociedades no cotizadas</h4>
                        <br>
                        <br>
                        <p>Ponemos en contacto a potenciales compradores de participaciones en sociedades y empresas con vendedores o propietarios con necesidades de liquidez</p>
                        <br>
                        <br>
                        <small>* La presente página no se hace responsable de los datos incorrectos o manipulados</small>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->
    </header> <!-- end of header -->
    <!-- end of header -->
    
       <!-- Projects -->
	<div id="projects" class="filter bg-gray">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Cual es tu sector a buscar</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <button class="button is-checked" data-filter="*">
                          <img class="img-fluid m-2" src="Assets/images/iconohome.png" alt="alternative" width="50px" height="50px"><br>  
                                ALL</button>
                        <button class="button" data-filter=".agricultura">
                            <img class="img-fluid m-2" src="Assets/images/iconoglobe.png" alt="alternative" width="50px" height="50px"><br>
                            Agricultura
                        </button>
                        <button class="button" data-filter=".fabricas">
                            <img class="img-fluid m-2" src="Assets/images/iconodiana.png" alt="alternative" width="50px" height="50px"><br>
                            Fabricas
                        </button>
                        <button class="button" data-filter=".talleres">
                            <img class="img-fluid m-2" src="Assets/images/iconoherramienta.png" alt="alternative" width="50px" height="50px"><br>
                            Talleres
                        </button>
                        <button class="button" data-filter=".hosteleria">
                            <img class="img-fluid m-2" src="Assets/images/iconotiempo.png" alt="alternative" width="50px" height="50px"><br>
                            Hosteleria
                        </button>
                        <button class="button" data-filter=".bancaseguros">
                            <img class="img-fluid m-2" src="Assets/images/iconomoneda.png" alt="alternative" width="50px" height="50px"><br>
                            Banca / Seguros
                        </button>
                        <button class="button" data-filter=".inmobiliarias">
                            <img class="img-fluid m-2" src="Assets/images/iconoinmobiliaria.png" alt="alternative" width="50px" height="50px"><br>
                            Inmobiliarias
                        </button>
                        <button class="button" data-filter=".educacion">
                            <img class="img-fluid m-2" src="Assets/images/iconolapiz.png" alt="alternative" width="50px" height="50px"><br>
                            Educación
                        </button>
                        <button class="button" data-filter=".sanitarias">
                            <img class="img-fluid m-2" src="Assets/images/iconosanidad.png" alt="alternative" width="50px" height="50px"><br>
                            Sanitaria
                        </button>
                         <button class="button" data-filter=".informatica">
                            <img class="img-fluid m-2" src="Assets/images/iconomonitor.png" alt="alternative" width="50px" height="50px"><br>
                            Informatica
                        </button>
                        <!-- <button class="button" data-filter=".development">Servicios</button>
                        <button class="button" data-filter=".marketing">Marketing</button> -->
                    </div> <!-- end of button group -->
                    <div class="grid">
                    <!-- Card -->
                    <div class="element-item sanitarias">  
                    <div class="card">
                        <div class="card-icon">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sanitaria</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->

                       <!-- Card -->
                    <div class="element-item talleres">  
                    <div class="card">
                        <div class="card-icon yellow">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Talleres</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->

                       <!-- Card -->
                    <div class="element-item agricultura">  
                    <div class="card">
                        <div class="card-icon yellow">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Agricultura</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->

                       <!-- Card -->
                    <div class="element-item fabricas">  
                    <div class="card">
                        <div class="card-icon yellow">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Fabricas</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->

                       <!-- Card -->
                    <div class="element-item transporte">  
                    <div class="card">
                        <div class="card-icon yellow">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Transporte</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->

                       <!-- Card -->
                    <div class="element-item hosteleria">  
                    <div class="card">
                        <div class="card-icon yellow">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Hosteleria</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->

                       <!-- Card -->
                    <div class="element-item informatica">  
                    <div class="card">
                        <div class="card-icon yellow">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">informatica</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->

                       <!-- Card -->
                    <div class="element-item bancaseguros">  
                    <div class="card">
                        <div class="card-icon yellow">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Banca Seguros</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->

                       <!-- Card -->
                    <div class="element-item educacion">  
                    <div class="card">
                        <div class="card-icon yellow">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Educación</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->

                       <!-- Card -->
                    <div class="element-item inmobiliarias">  
                    <div class="card">
                        <div class="card-icon yellow">
                            <img class="img-fluid m-3" src="Assets/images/iconobombilla.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Inmobiliarias</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->
                    
                           <!-- Card -->
                    <div class="element-item informatica">  
                    <div class="card">
                        <div class="card-icon">
                            <img class="img-fluid m-3" src="Assets/images/iconomonitor.png" alt="alternative" width="50px" height="50px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Informatica</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <!-- end of card -->


                    
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

   


    <!-- Footer -->
    <div class="footer bg-gray m-5">
        <img class="decoration-city" src="Assets/images/decoration-city.svg" alt="alternative">
       
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg p-small">
                        <li><a href="article.html">Article Details</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Copyright © <a href="#">Your name</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="Assets/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
    	
    <!-- Scripts -->
    <script src="Assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="Assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="Assets/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="Assets/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="Assets/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>