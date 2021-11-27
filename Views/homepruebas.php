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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- <link href="../Assets/css/swiper.css" rel="stylesheet">
	<link href="../Assets/css/styles.css" rel="stylesheet"> -->
    <link href="../Assets/css/pruebas.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="Assets/images/favicon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<!---Final del Head--->

<!---Comienza el Body----->

<body data-bs-spy="scroll">

<!----Comienza el container de inicio---->

<div class="container-fluid">

<!-----Comienza el navbar---->

<nav class="navbar navbar-expand-sm bg-primari navbar-dark fixed-top" id="nav-inicio">
<div class="container-fluid"><!----Container del navbar-->
    <div class="col-lg-6 col-md-1 col-sm-1">
        <a class="navbar-brand" href="#"><i class="fas fa-hand-holding-usd mr-2"></i>Logo</a>
    </div>
    <div class="col-lg-4 col-md-7 col-sm-7">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item"> 
                <a class="nav-link" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Views/Contact/contact.php"><i class="far fa-address-card mr-2"></i>Contacto</a>
            </li>
            <li class="nav-item dropdown"><!-- Dropdown de idioma -->
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fas fa-globe-europe mr-2"></i>Idioma</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Español</a>
                    <a class="dropdown-item" href="#">Ingles</a>
                    <a class="dropdown-item" href="#">Catalán</a>
                </div>
            </li>  <!----Fin de dropdowm de idioma-->
        </ul>
    </div> 
    </div>
<div class="col-lg-1 col-md-2 col-sm-2">
    <span class="nav-item">
        <i class="fas fa-user-alt"></i>
        <a class="btn-solid-sm" href="#contact">Login</a>
    </span>
</div>
<div class="col-lg-1 col-md-2 col-sm-2">
    <span class="nav-item">
        <i class="fas fa-sign-in-alt"></i>
        <a class="btn-solid-sm" href="#contact">Sign</a>
    </span>
</div>
</div><!-----Fin de container del navbar--->
</nav>
<!----------------Fin del navbar--------------------->

<!---------Inicio de Header----->
<header id="header" class="header">
<div class="h1 text-center">Compra - Venta de Participaciones</div>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div id="details" class="basic-1"><!-- Details 1 -->
                <img class="img-fluid m-3" src="../Assets/images/portada.png" alt="">
            </div>  
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="text-container">
                <div class="h3">Empresas y Sociedades no cotizadas</div>
                <br><br><br>
                <p>Ponemos en contacto a potenciales compradores de participaciones en sociedades y empresas con vendedores o propietarios con necesidades de liquidez</p>
                <br><br><br><br>
                <div class="h6">
                    <small>* La presente página no se hace responsable de los datos incorrectos o manipulados</small>
                </div>
                
            </div> <!-- end of text-container -->
        </div> <!-- end of col -->
    </div><!---Final del row del header---->
</div><!---Fin de container de header--->
</header>
<!-- Fin del Header -->


<!-----Inicio del filtro----->
<div class="container-fluid" id="filtro-group"><!----Container del navbar-->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<section class="content">
    <div class="box bg-1 button-group filters-button-group">
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter="*">
            <i class="fas fa-users mr-3"></i><span>all</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".agricultura">
            <i class="fab fa-sticker-mule mr-3"></i><span>agricultura</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".bancaseguros">
            <i class="fas fa-fax mr-3"></i><span>banca y seguros</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".educacion">
            <i class="fas fa-user-graduate mr-2"></i><span>educacion</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".fabricas">
            <i class="fas fa-city mr-3"></i><span>fabricas</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".hosteleria">
            <i class="fas fa-hotel mr-3"></i><span>hosteleria</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".informatica">
            <i class="fas fa-laptop mr-2"></i><span>informatica</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".inmobiliaria">
            <i class="fas fa-user-tie mr-2"></i>inmobiliaria</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".sanitarias">
            <i class="fas fa-stethoscope mr-2"></i><span>sanidad</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".talleres">
            <i class="fas fa-wrench mr-3"></i><span>talleres</span>
        </button>
        <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".transporte">
            <i class="fas fa-truck mr-3"></i><span>transporte</span>
        </button>    
    </div>
</section>
</div><!-----fin columna del filtro--->
</div><!-----fin row del filtro--->
</div><!---Fin de container fluid del filtro--->

<!-----Inicio de las fichas--->
<div class="container-fluid container-ficha-inf">
<div class="row row-ficha-inf">
<div class="col-1 mr-5"></div>
<div class="col-md-3 col-fichas-inf">
<div class="row row-titulo-ficha mb-3">
    <div class="col-2">
        <img alt="Bootstrap Image Preview" src="../Assets/images/iconolapiz.png" class="rounded">
    </div>
    <div class="col-10">
        <div class="h2">Empresa</div>
    </div>
</div>
<p>
    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
</p>
<div id="card-897473" class="card-ficha-inf"> 
    <div class="card">
        <div class="card-header">
                <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-897473" href="#card-element-193894">Información cliente</a>
        </div>
        <div id="card-element-193894" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-897473" href="#card-element-689042">Datos economicos</a>
        </div>
        <div id="card-element-689042" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
</div>
        <div class="row modal-ficha-inf">
           <div class="col-6">
                <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal">Información</a>
           </div>
           <div class="col-6">
                <a id="modal-2" href="#modal-container-2" role="button" class="btn" data-toggle="modal">Enviar</a>          
           </div>
        </div>
<!-----modal de información---->
<div class="modal fade" id="modal-container-436999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        
    </div>  
</div>
<!------Fin de primer modal información---->
<!------Inicio de modal de enviar---->
<div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>   
    </div>
<!----fin del modal enviar----> 
</div>
</div>
<!----fin del card información---->
<div class="col-md-3 col-fichas-inf">
<div class="row row-titulo-ficha mb-3">
    <div class="col-2">
        <img alt="Bootstrap Image Preview" src="../Assets/images/iconolapiz.png" class="rounded">
    </div>
    <div class="col-10">
        <div class="h2">Empresa</div>
    </div>
</div>
<p>
    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
</p>
<div id="card-897473" class="card-ficha-inf"> 
    <div class="card">
        <div class="card-header">
                <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-897473" href="#card-element-193894">Información cliente</a>
        </div>
        <div id="card-element-193894" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-897473" href="#card-element-689042">Datos economicos</a>
        </div>
        <div id="card-element-689042" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
</div>
        <div class="row modal-ficha-inf">
           <div class="col-6">
                <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal">Información</a>
           </div>
           <div class="col-6">
                <a id="modal-2" href="#modal-container-2" role="button" class="btn" data-toggle="modal">Enviar</a>          
           </div>
        </div>
<!-----modal de información---->
<div class="modal fade" id="modal-container-436999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        
    </div>  
</div>
<!------Fin de primer modal información---->
<!------Inicio de modal de enviar---->
<div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>   
    </div>
<!----fin del modal enviar----> 
</div>
</div>
<div class="col-md-3 col-fichas-inf">
<div class="row row-titulo-ficha mb-3">
    <div class="col-2">
        <img alt="Bootstrap Image Preview" src="../Assets/images/iconolapiz.png" class="rounded">
    </div>
    <div class="col-10">
        <div class="h2">Empresa</div>
    </div>
</div>
<p>
    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
</p>
<div id="card-897473" class="card-ficha-inf"> 
    <div class="card">
        <div class="card-header">
                <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-897473" href="#card-element-193894">Información cliente</a>
        </div>
        <div id="card-element-193894" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-897473" href="#card-element-689042">Datos economicos</a>
        </div>
        <div id="card-element-689042" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
</div>
        <div class="row modal-ficha-inf">
           <div class="col-6">
                <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal">Información</a>
           </div>
           <div class="col-6">
                <a id="modal-2" href="#modal-container-2" role="button" class="btn" data-toggle="modal">Enviar</a>          
           </div>
        </div>
<!-----modal de información---->
<div class="modal fade" id="modal-container-436999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        
    </div>  
</div>
<!------Fin de primer modal información---->
<!------Inicio de modal de enviar---->
<div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>   
    </div>
<!----fin del modal enviar----> 
</div>
</div>
</div>
</div>
</div>
<!-----fin de ficha de información---->

<!-----Inicio de las fichas--->
<div class="container-fluid container-ficha-inf">
<div class="row row-ficha-inf">
<div class="col-1 mr-5"></div>
<div class="col-md-3 col-fichas-inf">
<div class="row row-titulo-ficha mb-3">
    <div class="col-2">
        <img alt="Bootstrap Image Preview" src="../Assets/images/iconolapiz.png" class="rounded">
    </div>
    <div class="col-10">
        <div class="h2">Empresa</div>
    </div>
</div>
<p>
    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
</p>
<div id="card-897473" class="card-ficha-inf"> 
    <div class="card">
        <div class="card-header">
                <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-897473" href="#card-element-193894">Información cliente</a>
        </div>
        <div id="card-element-193894" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-897473" href="#card-element-689042">Datos economicos</a>
        </div>
        <div id="card-element-689042" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
</div>
        <div class="row modal-ficha-inf">
           <div class="col-6">
                <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal">Información</a>
           </div>
           <div class="col-6">
                <a id="modal-2" href="#modal-container-2" role="button" class="btn" data-toggle="modal">Enviar</a>          
           </div>
        </div>
<!-----modal de información---->
<div class="modal fade" id="modal-container-436999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        
    </div>  
</div>
<!------Fin de primer modal información---->
<!------Inicio de modal de enviar---->
<div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>   
    </div>
<!----fin del modal enviar----> 
</div>
</div>
<!----fin del card información---->
<div class="col-md-3 col-fichas-inf">
<div class="row row-titulo-ficha mb-3">
    <div class="col-2">
        <img alt="Bootstrap Image Preview" src="../Assets/images/iconolapiz.png" class="rounded">
    </div>
    <div class="col-10">
        <div class="h2">Empresa</div>
    </div>
</div>
<p>
    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
</p>
<div id="card-897473" class="card-ficha-inf"> 
    <div class="card">
        <div class="card-header">
                <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-897473" href="#card-element-193894">Información cliente</a>
        </div>
        <div id="card-element-193894" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-897473" href="#card-element-689042">Datos economicos</a>
        </div>
        <div id="card-element-689042" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
</div>
        <div class="row modal-ficha-inf">
           <div class="col-6">
                <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal">Información</a>
           </div>
           <div class="col-6">
                <a id="modal-2" href="#modal-container-2" role="button" class="btn" data-toggle="modal">Enviar</a>          
           </div>
        </div>
<!-----modal de información---->
<div class="modal fade" id="modal-container-436999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        
    </div>  
</div>
<!------Fin de primer modal información---->
<!------Inicio de modal de enviar---->
<div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>   
    </div>
<!----fin del modal enviar----> 
</div>
</div>
<div class="col-md-3 col-fichas-inf">
<div class="row row-titulo-ficha mb-3">
    <div class="col-2">
        <img alt="Bootstrap Image Preview" src="../Assets/images/iconolapiz.png" class="rounded">
    </div>
    <div class="col-10">
        <div class="h2">Empresa</div>
    </div>
</div>
<p>
    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
</p>
<div id="card-897473" class="card-ficha-inf"> 
    <div class="card">
        <div class="card-header">
                <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-897473" href="#card-element-193894">Información cliente</a>
        </div>
        <div id="card-element-193894" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-897473" href="#card-element-689042">Datos economicos</a>
        </div>
        <div id="card-element-689042" class="collapse">
            <div class="card-body">
                Anim pariatur cliche...
            </div>
        </div>
    </div>
</div>
        <div class="row modal-ficha-inf">
           <div class="col-6">
                <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal">Información</a>
           </div>
           <div class="col-6">
                <a id="modal-2" href="#modal-container-2" role="button" class="btn" data-toggle="modal">Enviar</a>          
           </div>
        </div>
<!-----modal de información---->
<div class="modal fade" id="modal-container-436999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        
    </div>  
</div>
<!------Fin de primer modal información---->
<!------Inicio de modal de enviar---->
<div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    Modal title
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                    
                <button type="button" class="btn btn-primary">
                    Save changes
                </button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>   
    </div>
<!----fin del modal enviar----> 
</div>
</div>
</div>
</div>
</div>
<!-----fin de ficha de información---->

<!--Paginación de la página--->

 <ul class="pagination justify-content-center m-5">
    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
  </ul>

<!---Fin de paginación de la página-->

</div><!---fin container principal-->

</div><!--Fin de container de inicio-->

<!-- Footer -->
    <div class="footer bg-gray m-5">
        <img class="decoration-city" src="../Assets/images/decoration-city.svg" alt="alternative">
       
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
    

    <!-- Scripts -->
    <script src="../Assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="..Assets/js/jquery.min.js"></script>
    <script src="../Assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../Assets/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="../Assets/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="../Assets/js/scripts.js"></script> <!-- Custom scripts -->

	<script>
			(function() {
				var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
				if(isSafari) {
					document.getElementById('support-note').style.display = 'block';
				}
			})();
	</script>


</body>
</html>