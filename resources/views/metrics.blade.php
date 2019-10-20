<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nasa Apps</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <header>
                <nav class="navbar navbar-expand-sm">
                    <!-- Brand/logo -->
                    <a class="navbar-brand" href="#">Home</a>
                    
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </nav>
                
            <div class="group-title">
                <h1 class="text-center">Prefere encontrar grupos?</h1>
            </div>
            
            <form class="form-inline">
                <input class="form-control" type="text" placeholder="Procure um grupo por ODS ou ação.">
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>

        </div>
    </body>
</html>
​

       

