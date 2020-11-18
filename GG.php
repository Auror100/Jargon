<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title tle>Home</title>
</head>

<body>

    <!-- NAV -->
    <ul class="nav justify-content-center bg-dark">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Página Inicial</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Empreendedorismo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Computação</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Design</a>
        </li>
    </ul>


    <div class="col-lg-12 bg-warning mt-lg-3">
        <form method="POST" action="crud.php">
        <input type="search" name="word" class="col-lg-6 offset-lg-3" placeholder="Exemplo: Feedback">
        <input type="submit" class="btn btn-primary" value="pesquisar">
        </form>
    </div>

    <div class="row">
        <img src="GG.jpg" class="principal-images offset-lg-2">
        <div class="col-lg-8 offset-lg-2 border border-dark mt-lg-5">
            <article class="h-article-lg">
                <h1>GG</h1>
                <p>Sigla utilizada quando um time vence do outro antes dos 20 minutos.
                </p>

                <p>Também chamado de GG EASY pode significar que uma coisa é fácil.
                </p>

            </article>

            </img>

        </div>
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
