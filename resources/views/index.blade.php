<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola desde Home Instructor</h1>

    <tr>
        <label>
            ICONO NOTIFICACIONES
        <br>
        <td><a href="{{route('create')}}">Notificaciones</a></td> 
    </label>
    <br>
    <br>
    <label>
        ICONO NOMBRE DE USUARIO  
        <br>
        <td><a href="{{route('edit')}}">Nombre Usuario</a></td>
    </label>
    <br>
    <br>
    <label>
        ICONO APRENDIZ
        <br>
        <td><a href="{{route('show')}}">Aprendiz</a></td> 
    </label>  
    <br>
    <br>
    <label>
        ICONO REPORTES
        <br>
        <td><a href="{{route('store')}}">Reportes</a></td>
    </label> 

       </tr>
    
    

</body>
</html>

