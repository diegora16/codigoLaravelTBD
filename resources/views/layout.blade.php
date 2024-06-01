<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>

<style>
    .activo a{
        color: red;
    }
</style>

<nav>
    <ul class="container text-blue-600 text-lg font-bold mx-auto pt-5 md:flex md:justify-center py-10" >
            <li class="{{ setActivo('home')}} px-5"><a href="/">Home</a></li>
            <li class="{{ setActivo('nosotros')}} px-5"><a href="nosotros">Nosotros</a></li>
            <li class="{{ setActivo('servicios')}} px-5"><a href="servicios">Servicios</a></li>
            <li class="{{ setActivo('contacto')}} px-5"><a href="contacto">Contacto</a></li>
        
    </ul>
</nav>

@yield('content')
    
    
</body>
</html>