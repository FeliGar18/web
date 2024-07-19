<html>
    <head>
        <title>Pagina Presentacion</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body>
    

    <!--
    <ul>
        <li><a href="{{ route('inicio') }}"> INICIO </a></li>
        <li><a href="{{ route('presentacion') }}"> PRESENTACION </a></li>
        <li><a href="{{ route('contacto') }}"> CONTACTO </a></li>
    </ul>
    -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}">Inicio</a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('presentacion') }}">Presentacion</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>Presentacion</h1>
    <img src="imagenes/fotomomo.jpg"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>