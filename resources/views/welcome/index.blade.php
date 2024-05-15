<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Kaas</h1>
    @for($i =0; $i < 10; $i++)
    <h2>Deze tekst is {{$i}} keer herhaald</h2>
    <img src="img/arona-arona-blue-archive.gif" alt="hij doet het niet"/>

    @endfor
    <p>Welkom op de website van Kaas</p>
</body>
</html>