<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
</head>
<body>
    <h3>Ecco la lista di alcuni framework per l'ambito web</h3>

    <ul>
        @foreach($frameworks as $framework)
          <li>{{$framework}}</li>
        @endforeach
    </ul>
    
</body>
</html>