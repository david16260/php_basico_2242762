<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de paises</h1>
    <table class="table table-hover">
        <tr class = "thead-light"> 
            <th class ="table-bordered"><span  class = "text-primary">Nombre</span></th>
            <th class ="table-bordered"><span  class = "text-primary">Capital</span></th>  
            <th class ="table-bordered"><span  class = "text-primary">Moneda</span></th> 
            <th class ="table-bordered"><span  class = "text-primary">Nación</span></th>      
           
        </tr>
        @foreach($naciones as $nombre => $nacion)
            <tr class="table-bordered">
                <td class ="table-info " > {{ $nombre  }}</td>
                <td class ="table-success ">{{ $nacion["capital"]  }}</td>
                <td class ="table-info">{{ $nacion["moneda"]  }}</td>
                <td class ="table-success">{{ $nacion["poblacion"]  }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>