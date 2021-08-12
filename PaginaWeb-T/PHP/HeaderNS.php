<header>
        <nav class="navbar navbar-dark " style="background-color: #836953";>
            <div class="slide-item">
            <!--Imagen Logo superior Izquierda-->
            <a href="PagNS.php"> <img src="../Imagenes/LogoRopa2.jpg" WIDTH="150px" HEIGHT="100px" alt=""> </a>
            </div> 
           
            <!--Barra de Busqueda-->
            <div class="field" id="searchform">
              <input type="text" id="searchterm" placeholder="Ropa" />
              <button type="button" id="search">Buscar</button>
            </div>
           
            <!--Boton Carrito-->
            <button id="Carrito" class="navbar-toggler" onClick="javascript:close_clip()"><a href="NCarrito.php"><img src="../Imagenes/carro-de-la-compra.png"WIDTH="30px" HEIGHT="30px" alt=""></a></button>
            
            <!--Boton de Iniciar Sesion-->
            <button id="registro" class="navbar-toggler" onClick="javascript:close_clip()"><a href="index.php"><img src="../Imagenes/usuario.png"WIDTH="30px" HEIGHT="30px" alt=""></a></button>
           
            <!--Boton de Catalogo-->
            <button class="navbar-toggler" aling="Left" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <!--Catalogo-->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catalogo de Hombre
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="camisas-h.php">Camisas</a>
                    <a class="dropdown-item" href="pantalones-h.php">Pantalones</a>
                    <a class="dropdown-item" href="shorts-h.php">Shorts</a>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Catalogo de Mujer
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="blusas-m.php">Blusas</a>
                  <a class="dropdown-item" href="pantalones-m.php">Pantalones</a>
                  <a class="dropdown-item" href="shorts-m.php">Shorts</a>
                  <a class="dropdown-item" href="vestidos-m.php">Vestidos</a>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Catalogo de Jovenes
                      </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="camisas-n.php">Camisas</a>
                    <a class="dropdown-item" href="pantalones-n.php">Pantalones</a>
                    <a class="dropdown-item" href="shorts-n.php">Shorts</a>
                  </div>
                      </li>        
                </ul>
            </nav>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </header>
    <head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../CCS/Estilos.css">
    </head>