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

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

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
                    <a class="dropdown-item" href="#">Espa??ol</a>
                    <a class="dropdown-item" href="#">Ingles</a>
                    <a class="dropdown-item" href="#">Catal??n</a>
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
                <img class="img-fluid m-3 mx-auto d-block" src="../Assets/images/portada.png" alt="">
            </div>  
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="text-container mr-5">
                <div class="h3">Empresas y Sociedades no cotizadas</div>
                <br><br><br>
                <p>Ponemos en contacto a potenciales compradores de participaciones en sociedades y empresas con vendedores o propietarios con necesidades de liquidez</p>
                <br><br><br><br>
                <div class="h6">
                    <small>* La presente p??gina no se hace responsable de los datos incorrectos o manipulados</small>
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
                <div class="box bg-1 button-group filters-button-group d-flex justify-content-center">
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter="*">
                        <i class="fas fa-users mr-4"></i><span>all</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".agricultura">
                        <i class="fab fa-sticker-mule mr-4"></i><span>Agr</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".bancaseguros">
                        <i class="fas fa-fax mr-4"></i><span>Bca</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".educacion">
                        <i class="fas fa-user-graduate mr-4"></i><span>Edu</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".fabricas">
                        <i class="fas fa-city mr-4"></i><span>Fab</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".hosteleria">
                        <i class="fas fa-hotel mr-4"></i><span>Hos</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".informatica">
                        <i class="fas fa-laptop mr-4"></i><span>Inf</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".inmobiliaria">
                        <i class="fas fa-user-tie mr-4"></i><span>Inm</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".sanitarias">
                        <i class="fas fa-stethoscope mr-4"></i><span>San</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".talleres">
                        <i class="fas fa-wrench mr-4"></i><span>Tal</span>
                    </button>
                    <button class="button button--shikoba button--round-s button--border-thin is-checked" data-filter=".transporte">
                        <i class="fas fa-truck mr-4"></i><span>Tra</span>
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
                    <img alt="Bootstrap Image Preview" src="../Assets/images/iconolapiz.png" class="rounded ml-4">
                </div>
                <div class="col-10">
                    <div class="h2 text-center">Automoci??n</div>
                </div>
            </div>
            <table class="table-responsive ml-4">
                <tbody>
                <tr>
                    <th scope="row">Nombre:</th>
                    <td>Audi</td>
                </tr>
                <tr>
                    <th scope="row">Poblaci??n:</th>
                    <td>Barcelona</td>
                </tr>
                <tr>
                    <th scope="row">Cantidad:</th>
                    <td>10</td>
                </tr>
                <tr>
                    <th scope="row">Precio:</th>
                    <td>1.000 ???</td>
                </tr>
                </tbody>
            </table>
        <div id="card-3" class="card-ficha-inf"> 
            <div class="card">
                <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-3" href="#card-element-3">
                        <i class="fas fa-caret-square-down"></i>Informaci??n cliente</a>
                </div>
            <div id="card-element-3" class="collapse">
                <div class="card-body">
                    <table class="table-responsive ml-4">
                        <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>Audi</td>
                        </tr>
                        <tr>
                            <th scope="row">Poblaci??n:</th>
                            <td>Barcelona</td>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad:</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Precio:</th>
                            <td>1.000 ???</td>
                        </tr>
                        </tbody>
                    </table>
                    <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal"><i class="fas fa-plus"></i>M??s</a>
                </div>
            </div>
        </div>
        <div id="card-4" class="card-ficha-inf"> 
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-4" href="#card-element-4">
                <i class="fas fa-caret-square-down"></i>Datos Empresa</a>
            </div>
            <div id="card-element-4" class="collapse">
                <div class="card-body">
                    <table class="table-responsive ml-4">
                        <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>Audi</td>
                        </tr>
                        <tr>
                            <th scope="row">Poblaci??n:</th>
                            <td>Barcelona</td>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad:</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Precio:</th>
                            <td>1.000 ???</td>
                        </tr>
                        </tbody>
                    </table>
                    <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal"><i class="fas fa-plus"></i>M??s</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-ficha-inf">
        <a id="modal-2" href="#modal-container-2" role="button" class="btn" data-toggle="modal">Solicitar</a>          
    </div>
    </div>
<!-----modal de informaci??n---->
    <div class="modal fade" id="modal-container-436999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Datos Economicos</h5> 
                    <button type="button" class="close" data-dismiss="modal">
                         <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table-responsive ml-4">
                        <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>Audi</td>
                        </tr>
                        <tr>
                            <th scope="row">Poblaci??n:</th>
                            <td>Barcelona</td>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad:</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Precio:</th>
                            <td>1.000 ???</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn-modal-footer" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>  
    </div>
<!------Fin de primer modal informaci??n---->
<!------Inicio de modal de enviar---->
    <div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Solicitar</h5> 
                    <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="PasswordSolicitud1">Password</label>
                            <input type="password" class="form-control" id="PasswordSolicitud" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn-modal-footer">Login</button>
                    <button type="button" class="btn-modal-footer" data-dismiss="modal">Cerrar</button>
                </div>
            </div>   
        </div>
<!----fin del modal enviar----> 
</div>
</div>
<!----fin del card informaci??n---->
   <div class="col-md-3 col-fichas-inf">
            <div class="row row-titulo-ficha mb-3">
                <div class="col-2">
                    <img alt="Bootstrap Image Preview" src="../Assets/images/iconolapiz.png" class="rounded ml-4">
                </div>
                <div class="col-10">
                    <div class="h2 text-center">Automoci??n</div>
                </div>
            </div>
            <table class="table-responsive ml-4">
                <tbody>
                <tr>
                    <th scope="row">Nombre:</th>
                    <td>Audi</td>
                </tr>
                <tr>
                    <th scope="row">Poblaci??n:</th>
                    <td>Barcelona</td>
                </tr>
                <tr>
                    <th scope="row">Cantidad:</th>
                    <td>10</td>
                </tr>
                <tr>
                    <th scope="row">Precio:</th>
                    <td>1.000 ???</td>
                </tr>
                </tbody>
            </table>
        <div id="card-5" class="card-ficha-inf"> 
            <div class="card">
                <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-5" href="#card-element-5">
                        <i class="fas fa-caret-square-down"></i>Informaci??n cliente</a>
                </div>
            <div id="card-element-5" class="collapse">
                <div class="card-body">
                    <table class="table-responsive ml-4">
                        <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>Audi</td>
                        </tr>
                        <tr>
                            <th scope="row">Poblaci??n:</th>
                            <td>Barcelona</td>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad:</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Precio:</th>
                            <td>1.000 ???</td>
                        </tr>
                        </tbody>
                    </table>
                    <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal"><i class="fas fa-plus"></i>M??s</a>
                </div>
            </div>
        </div>
        <div id="card-6" class="card-ficha-inf"> 
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-6" href="#card-element-6">
                <i class="fas fa-caret-square-down"></i>Datos Economicos</a>
            </div>
            <div id="card-element-6" class="collapse">
                <div class="card-body">
                    <table class="table-responsive ml-4">
                        <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>Audi</td>
                        </tr>
                        <tr>
                            <th scope="row">Poblaci??n:</th>
                            <td>Barcelona</td>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad:</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Precio:</th>
                            <td>1.000 ???</td>
                        </tr>
                        </tbody>
                    </table>
                    <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal"><i class="fas fa-plus"></i>M??s</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal-ficha-inf">
        <a id="modal-2" href="#modal-container-2" role="button" class="btn" data-toggle="modal">Solicitar</a>          
    </div>
<!-----modal de informaci??n---->
    <div class="modal fade" id="modal-container-436999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Informaci??n Empresa</h5> 
                    <button type="button" class="close" data-dismiss="modal">
                         <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table-responsive ml-4">
                        <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>Audi</td>
                        </tr>
                        <tr>
                            <th scope="row">Poblaci??n:</th>
                            <td>Barcelona</td>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad:</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Precio:</th>
                            <td>1.000 ???</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn-modal-footer" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>  
    </div>
<!------Fin de primer modal informaci??n---->
<!------Inicio de modal de enviar---->
    <div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Solicitar</h5> 
                    <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="PasswordSolicitud1">Password</label>
                            <input type="password" class="form-control" id="PasswordSolicitud" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn-modal-footer">Login</button>
                    <button type="button" class="btn-modal-footer" data-dismiss="modal">Cerrar</button>
                </div>
            </div>   
        </div>
<!----fin del modal enviar----> 
</div>
</div>
<!----fin del card informaci??n---->
   <div class="col-md-3 col-fichas-inf">
            <div class="row row-titulo-ficha mb-3">
                <div class="col-2">
                    <img alt="Bootstrap Image Preview" src="../Assets/images/iconolapiz.png" class="rounded ml-4">
                </div>
                <div class="col-10">
                    <div class="h2 text-center">Automoci??n</div>
                </div>
            </div>
            <table class="table-responsive ml-4">
                <tbody>
                <tr>
                    <th scope="row">Nombre:</th>
                    <td>Audi</td>
                </tr>
                <tr>
                    <th scope="row">Poblaci??n:</th>
                    <td>Barcelona</td>
                </tr>
                <tr>
                    <th scope="row">Cantidad:</th>
                    <td>10</td>
                </tr>
                <tr>
                    <th scope="row">Precio:</th>
                    <td>1.000 ???</td>
                </tr>
                </tbody>
            </table>
        <div id="card-7" class="card-ficha-inf"> 
            <div class="card">
                <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-7" href="#card-element-7">
                        <i class="fas fa-caret-square-down"></i>Informaci??n cliente</a>
                </div>
            <div id="card-element-7" class="collapse">
                <div class="card-body">
                    <table class="table-responsive ml-4">
                        <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>Audi</td>
                        </tr>
                        <tr>
                            <th scope="row">Poblaci??n:</th>
                            <td>Barcelona</td>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad:</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Precio:</th>
                            <td>1.000 ???</td>
                        </tr>
                        </tbody>
                    </table>
                    <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal"><i class="fas fa-plus"></i>M??s</a>
                </div>
            </div>
        </div>
        <div id="card-8" class="card-ficha-inf"> 
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-8" href="#card-element-8">
                <i class="fas fa-caret-square-down"></i>Datos Economicos</a>
            </div>
            <div id="card-element-8" class="collapse">
                <div class="card-body">
                    <table class="table-responsive ml-4">
                        <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>Audi</td>
                        </tr>
                        <tr>
                            <th scope="row">Poblaci??n:</th>
                            <td>Barcelona</td>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad:</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Precio:</th>
                            <td>1.000 ???</td>
                        </tr>
                        </tbody>
                    </table>
                    <a id="modal-436999" href="#modal-container-436999" role="button" class="btn" data-toggle="modal"><i class="fas fa-plus"></i>M??s</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal-ficha-inf">
        <a id="modal-2" href="#modal-container-2" role="button" class="btn" data-toggle="modal">Solicitar</a>          
    </div>
<!-----modal de informaci??n---->
    <div class="modal fade" id="modal-container-436999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Informaci??n Empresa</h5> 
                    <button type="button" class="close" data-dismiss="modal">
                         <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table-responsive ml-4">
                        <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>Audi</td>
                        </tr>
                        <tr>
                            <th scope="row">Poblaci??n:</th>
                            <td>Barcelona</td>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad:</th>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Precio:</th>
                            <td>1.000 ???</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn-modal-footer" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>  
    </div>
<!------Fin de primer modal informaci??n---->
<!------Inicio de modal de enviar---->
    <div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Solicitar</h5> 
                    <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="PasswordSolicitud1">Password</label>
                            <input type="password" class="form-control" id="PasswordSolicitud" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn-modal-footer">Login</button>
                    <button type="button" class="btn-modal-footer" data-dismiss="modal">Cerrar</button>
                </div>
            </div>   
        </div>
<!----fin del modal enviar----> 
</div>
</div>
<!----fin del card informaci??n---->
</div>
</div>
</div>
</div>
</div>
<!-----fin de ficha de informaci??n---->

<!--Paginaci??n de la p??gina--->

 <ul class="pagination justify-content-center m-5">
    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
  </ul>

<!---Fin de paginaci??n de la p??gina-->

</div><!---fin container principal-->

</div><!--Fin de container de inicio-->

<!-- Footer -->

<!-----cookies------>
<div id="cajacookies">
<p>
??ste sitio web usa cookies, si permanece aqu?? acepta su uso.
Puede leer m??s sobre el uso de cookies en nuestra <a href="politica.html">pol??tica de privacidad</a>.
</p>
<button onclick="aceptarCookies()" class="pull-right"><i class="fa fa-times"></i> Aceptar</button>
</div>

<!-----Fin de cookies---->

    <div class="footer bg-gray m-5">
        <img class="decoration-city" src="../Assets/images/decoration-city.svg" alt="alternative">
       
    </div> <!-- end of footer -->  
    <!-- end of footer -->

    

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

<!----cookies------>

<script>
/* ??sto comprueba la localStorage si ya tiene la variable guardada */
function compruebaAceptaCookies() {
  if(localStorage.aceptaCookies != 'true'){
    cajacookies.style.display = 'block';
  }
}

/* aqu?? guardamos la variable de que se ha
aceptado el uso de cookies as?? no mostraremos
el mensaje de nuevo */
function aceptarCookies() {
  localStorage.aceptaCookies = 'true';
  cajacookies.style.display = 'none';
}

/* ??sto se ejecuta cuando la web est?? cargada */
$(document).ready(function () {
  compruebaAceptaCookies();
});
</script>

<!----fin de las cookies---->

</body>
</html>