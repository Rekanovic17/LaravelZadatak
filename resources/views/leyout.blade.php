
<!DOCTYPE html>
<html lang="en" class=" h-100 w-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('naslov')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class=" h-100 w-100">
    <nav class=" bg-secondary bg-gradient d-flex justify-content-center align-items-center h-auto p-2  w-100 gap-3 ">
        <a href="/" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Home</a>
        <a href="/shop" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Shop</a>
        <a href="/contact" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Contact</a>
        <a href="/about" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">About</a>
    </nav>
    <div class=" bg-primary-subtle d-flex h-75 w-100 justify-content-center align-items-center">
        @yield('Desc')
    </div>
    
    <footer class="bg-secondary bg-gradient d-flex justify-content-center align-items-center h-auto p-2  w-100 gap-3 ">
        <h2>Copyright &copy; {{date("Y")}} </h2>
    </footer>
</body>
</html>
