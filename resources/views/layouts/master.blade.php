<!DOCTYPE html>
<html>
<head>
    <title>Pokemon Creator</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="css/poke.css" type='text/css'>
</head>
<body>
    <header>
        <h1>Pokemon Creator: Create your own Pocket Monsters</h1>
        <br>
        <img src="image/pokemon.png" alt="pokemon">
        <br>
        <br>
    </header>
    <a href="/read">See Pokemon</a>
    <a href="/create">Create your own</a>
    <a href="/readTrainers">See Trainers</a>
    <br>
    <br>
    <a href="/giveWill">Give Oak's Pokemon to Will</a>
    <a href="/giveDawn">Give Oak's Pokemon to Dawn</a>
    <a href="/release">Release Pokemon belonging to Will and Dawn</a>
    <div>
        @yield('content')
    </div>
    <div>
        @yield('create')
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>
