<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refrigerador</title>
    <link rel="icon" href="img/favicon.jpg" type="image/jpg" sizes="32x32">
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Refrigerador</a>
    <form class="d-flex">
      <input class="form-control me-16" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="#" alt="#" width="154" height="64">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuDeNavegacion"
                aria-controls="menuDeNavegacion" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuDeNavegacion">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ubica el tuyo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">La Tiendita</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">La curva pegada</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="registro.html">Iniciar Secion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorias</a> 
                    </li>
                </ul>

                <a class="nav-link" aria-current="page" href="#">Tendejones</a>

                <ul class="navbar-nav">
                    <li class="nav-item"href="carrito.php">
                    <button type="button" class="btn btn-outline-primary text-align">Ayuda</button>
                    </li>
                </ul>
                <a class="nav-link" aria-current="page" href="carrito.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-plus" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="6" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l6.005 .429m7.138 6.573l-.143 .998h-13" />
                    <path d="M15 6h6m-3 -3v6" />
                    </svg></a>
                
            </div>
        </div>
    </nav>

    <main class="mt-4">
        <div class="container">
            <h1>Hola Alejandro!</h1>
            <p>Ahora estas en tu refrigerador
            </p>
            <a href="#" class="btn btn-lg btn-primary">Visualizar camara</a>
        </div>
    </main>


    <div class="container">
        <div class="row">
             <div class="col-4">
                <img src="img/refrigerador.jpg" alt="#">
             </div>
            <div class="col-6">

                <div id="productos">
                    <h2>Categoria</h2>
                    <button type="button" class="btn btn-primary">Finalizar</button>
                </div>

        
                <div class="enlistado">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="img/leche.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Leche deslactosada</h5>
                                <p class="card-text">Disponible 2pz</p>
                                <p class="card-text"><small class="text-muted">La Tiendita</small></p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="img/Campari.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Campari</h5>
                                <p class="card-text">Disponible 5pz</p>
                                <p class="card-text"><small class="text-muted">La curva pegada</small></p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="img/Aguacate.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Aguacate</h5>
                                <p class="card-text">Disponible 2KG</p>
                                <p class="card-text"><small class="text-muted">Doña Cuca</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>














    <section>
        <article>
            <div class="container">
             
            </div>
            </div>
        </article>
    </section>
</div>







    
    
    <script src="js/bootstrap.js"></script>
</body>

</html>