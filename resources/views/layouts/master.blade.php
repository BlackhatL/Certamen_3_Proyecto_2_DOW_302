<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap-custom.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Web Fotógrafos(Certamen 3-DOW302)</title>
</head>
<header class="bg-light">
    <div class="bg-dark">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link text-light @if(Route::current()->getName()=='home.index') active  @endif" href="{{route('home.index')}}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light @if(Route::current()->getName()=='artista.index') active @endif" href="{{route('artista.index')}}">ARTISTAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light @if(Route::current()->getName()=='admin.index') active @endif" href="{{route('admin.index')}}">ADMINISTRADORES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light @if(Route::current()->getName()=='publico.index') active @endif" href="{{route('publico.index')}}">PUBLICO</a>
            </li>
        </ul>
    </div>



@yield('contenido-principal')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

</header>


</html>