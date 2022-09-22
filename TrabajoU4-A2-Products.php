<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Products</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider">
                            
                        </div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--CONTAINER-->
    <div class="container-fluid">
        <div class="row">
            <!--SIDE NAVBAR-->
            <div class="col-lg-2 d-none d-sm-block border">
                <aside>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider">
                                    
                                </div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <!--CONTENT-->
            <div class="col-lg-10 col-sm-12">
                <div class="container-fluid">
                    <!--BREAD-->
                    <div class="row m-2">
                        <div class="col">
                            <h4>Productos</h4>
                        </div>
                        <div class="col">
                            <button class="btn btn-info">Añadir productos</button>
                        </div>
                    </div>
                    <!--CONTENT-->
                    <div class="row">
                        <?php for($i=0; $i<12; $i++): ?>
                            <div class="col-md-3 col-sm-12">
                                <div class="card" style="width: 18rem;">
                                    <!--Con la ruta default de github seria solo con tostitos.png, pero con carpetas funciona como con este codigo-->
                                    <img class="card-img-top" src="img/tostitos.png" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Tostitos</h5>
                                        <h6 class="card-subtitle mb-2 text-muted text-center">Botana</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="row">
                                            <button class="col-6 btn btn-warning"> 
                                                <a href="#" class="card-link">Editar</a>
                                            </button>
                                            <button class="col-6 btn btn-danger"> 
                                                <a href="#" class="card-link">Borrar</a>
                                            </button>
                                        </div>
                                        <div class="row">
                                            <button class="col btn btn-info"> 
                                                <a href="#" class="card-link">Borrar</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
</body>
</html>