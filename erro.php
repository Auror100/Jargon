<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="style.css">
   
    <title tle>Home</title>
</head>

<body class="b-theme">

    <!-- NAV -->

    <nav class="navbar navbar-expand-lg navbar navbar-light bg-light c-letter-nav ">
        <a class="navbar-brand" href=""> <img class="logo" src="./imagens/logotipo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-lg-8 offset-lg-2" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link c-letter-nav" href="index.php">Página Inicial <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./categorias/empreendedorismo.php">Empreendedorismo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./categorias/tecnologia.php">Tecnologia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./categorias/league-of-legends.php">League of Legends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./categorias/design.php">Design</a>
                </li>

        </div>
    </nav>


    <div class="col-lg-12 mt-lg-3">
        <div class="row">
        <p class=" letter-center-logo c-white-letter-logo error-margin margin-logo-index">4</p>
        <p class=" letter-center-logo margin-logo-index c-orange-letter-logo">0</p>
        <p class=" letter-center-logo margin-logo-index c-white-letter-logo">4</p>


        </div>
      
        <h4 class="text-align-error c-white-letter-tip">A pesquisa realizada não gerou nenhum resultado.</h4>
        <h4 class="text-align-error c-white-letter-tip">Talvez você quis pesquisar por:</h4>
      

    </div>
    <div class="row">
       
        <div class="col-lg-8 offset-lg-2 b-article mt-lg-5 w-article">
            <article class="h-article-lg w-article">
                <header>
                <div class="row justify-content-center">  

                <h1 class="c-yellow-letter-header ml-3">Seme</h1>

                <h1 class="c-orange-letter-header">lhantes:</h1>

                </div>
                </header>
                
                <?php
                 include 'conexao.php';
                 include 'errocrud.php';
                 $like= $_GET["pesquisa"];
                 $pesquisa=maybe($like);

                    if($pesquisa){
                        
                        while($linha=mysqli_fetch_assoc($pesquisa)){
                            $palavra= $linha["word"];

                         echo "   
                            <h4 class='text-align-categories'><a class='btn btn-outline-primary' href='./artigos/$palavra.php'>$palavra</a></h4>
                        ";
                        }

                    }
                
                ?>

                
                 
            </article>

            </img>

        </div>
    </div>
    <div class="footer-basic margin-footer-index h-75">
        <footer class="margin-footer">
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a class="btn btn-outline-sencodary disabled" href="#">Mapa do site</a></li>
                <li class="list-inline-item"><a href="politica-de-privacidade.php">Política de privacidade</a></li>
              
            </ul>
            <p class="copyright">GBITS © 2020</p>
        </footer>
    </div>

    
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>