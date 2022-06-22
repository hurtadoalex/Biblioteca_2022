<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nombre_libro</th>
                <th>autor</th>
                <th>area</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
                <tr>
                    <td>{{$libro->id}}</td>
                    <td>{{$libro->nombre_libro}}</td>
                    <td>{{$libro->autor}}</td>
                    <td>{{$libro->Area}}</td>
                </tr>
            @endforeach

        </tbody>

    </table>

</body>
</html>